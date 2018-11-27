<?php
	$error=null;
	include 'database.php';
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name=$_POST['name'];
		$user=$_POST['uname'];
		$email=$_POST['email'];
		$password=$_POST['psw'];
		
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
		include("phpmailer/class.smtp.php");
		require_once 'phpmailer/PHPMailerAutoload.php';
		$mail=new PHPMailer;
		if(!$mail->ValidateAddress($email))
		{
			$error= "Please enter your valid mail address";
		}
		else if($result1 === FALSE && $result2 === FALSE) 
		{ 
			try
			{
				
				$result=$db->prepare("insert into users value(?,?,?,?)");
				$result->bindParam(1,$name);
				$result->bindParam(2,$user);
				$result->bindParam(3,$email);
				$result->bindParam(4,$password);
				if($result->execute()) 
				{
					?>
					<script>
					location.replace("login.php");
					</script><?php
				}
				
			}
			catch(exception $e)
			{
				echo "OOPS! data cannot be fetched from Database";
			}
			 // TODO: better error handling
		}
		else if($result2 === FALSE) 
		{ 
			$error= "Username already exist.Please try another one.";
		}
		else if($result1 === FALSE)
		{
			$error= "Email already registered.Please try another one."; 
		}
	}

?>

<?php 
	$header = "Sign Up";
	include('header.php');
?>
<html>

<?php $message="Welcome.. Please fill details and submit to get registered."?>



  <div class="imgcontainer">
    <img src="login.png" alt="Avatar" class="avatar">
  </div>
  
  <p class="text-center"><?php
	                            if($error == null) echo $message;
								else{ ?><h4 class="error text-center"><?php echo $error;}?>
	                        </h4></p>

  
<form action="" method="post">
  <div class="container">
	
	<label for="name"><b>Name</b></label>
    <input type="text" name="name" required>
	
    <label for="uname"><b>Username</b></label>
    <input type="text" name="uname" required>
	
	<label for="email"><b>Email</b></label>
    <input type="text" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" name="psw" required>

    <button type="submit">Sign Up</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class=""><a href="login.php">Login</a></span>
  </div>
</form>
</html>
<?php include('footer.php');?>