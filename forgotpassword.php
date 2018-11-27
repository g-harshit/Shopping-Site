<?php
	$error=null;
	include 'database.php';
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$user=$_POST['uname'];
		$email=$_POST['email'];
		
		try
		{
			//$result=mysql_query("SELECT * from users");
			$result1=$db->prepare("SELECT * from users where username=?");
			$result1->bindParam(1,$user);
			$result1->execute();
			$result2=$db->prepare("SELECT * from users where email=?");
			$result2->bindParam(1,$email);
			$result2->execute();
		}
		catch(exception $e)
		{
			$error= "OOPS! data cannot be fetched from Database";
		}
		$result1=$result1->fetch(PDO::FETCH_ASSOC);
		$result2=$result2->fetch(PDO::FETCH_ASSOC);
		
		if($result2 === FALSE) 
		{ 
			$error= "Email not registered";
		}
		else if($result1 === FALSE)
		{
			$error= "No ".$user." found. Please Signup first"; 
		}
		
		else 
		{ 
			try
			{
				//$result=mysql_query("SELECT * from users");
				$result=$db->prepare("SELECT password from users where username=? and email=?");
				$result->bindParam(1,$user);
				$result->bindParam(2,$email);
				$result->execute();
				$result=$result->fetch(PDO::FETCH_ASSOC);
			}
			catch(exception $e)
			{
				$error= "OOPS! data cannot be fetched from Database";
			}
			if($result === FALSE)
			{
				$error= "OOPS! Something went wrong."; 
			}
			else
			{
				$mailbody=$result['password'];
				
				include("phpmailer/class.smtp.php");
				require_once 'phpmailer/PHPMailerAutoload.php';
				
				
				
				 $mail=new PHPMailer;
				 $mail->IsSmtp();
				 $mail->SMTPDebug=1;
				 $mail->SMTPAuth=true;
				 $mail->SMTPSecure='ssl';
				 $mail->Host="ssl://smtp.gmail.com";
				 $mail->Port=465;
				 $mail->IsHTML(true);
				 $mail->Username="gharshit1237@gmail.com";
				 $mail->Password="sonyxperia1";
				 $mail->SetFrom($email);
				 $mail->Subject="Password";
				 $mail->Body=$mailbody;
				 $mail->AddAddress($email);
				 
				 if($mail->Send())
				 {
					?>
					<script>
					location.replace("login.php");
					</script><?php
				 }
				 else
				 {
					 $errormessage= "OOPs!!!!! SomeThing went wrong. Please after some time.";
				 }
			}// TODO: better error handling
		}
	}

?>

<?php 
	$header = "Forgot Password";
	include('header.php');
?>
<html>

<?php $message="Enter your Username and Email "?>



  <div class="imgcontainer">
    <img src="login.png" alt="Avatar" class="avatar">
  </div>
  
  <p class="text-center"><?php
	                            if($error == null) echo $message;
								else{ ?><h4 class="error text-center"><?php echo $error;}?>
	                        </h4></p>

  
<form action="" method="post">
  <div class="container">
	
    <label for="uname"><b>Username</b></label>
    <input type="text" name="uname" required>
	
	<label for="email"><b>Email</b></label>
    <input type="text" name="email" required>

    <button type="submit">Sign Up</button>
    
  </div>
  <div class="container" style="background-color:#f1f1f1">
	<span class=""><a href="signup.php">Sign Up</a></span>
	<span class="psw"><a href="login.php">Login</a></span>
  </div>
</form>
</html>
<?php include('footer.php');?>