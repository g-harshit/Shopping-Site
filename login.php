<?php 

//error message is not being received

	session_start();
	include('database.php');
	
	$error=null;
	$temp=null;
	
	/*$_SESSION["name"]="abc";
	?>
		<script>
		location.replace("home.php");
		</script><?php*/
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$user=$_POST['uname'];
		$password=$_POST['psw'];
		try
		{
			//$result=mysql_query("SELECT * from users");
			$result=$db->prepare("SELECT * from users where username=?");
			$result->bindParam(1,$user);
			$result->execute();
		}
		catch(exception $e)
		{
			$error= "OOPS! data cannot be fetched from Database";
		}
		$result=$result->fetch(PDO::FETCH_ASSOC);
		
		if($result === FALSE) 
		{ 
			$error= "NO ".$user." found. Please register before login..!"; // TODO: better error handling
		}
		else
		{
			
			try
			{
				//$result=mysql_query("SELECT * from users");
				$result=$db->prepare("SELECT password from users where username=?");
				$result->bindParam(1,$user);
				$result->execute();
			}
			catch(exception $e)
			{
				$error= "OOPS! data cannot be fetched from Database";
			}
			$result=$result->fetch(PDO::FETCH_ASSOC);
			if($result === FALSE) 
			{ 
				$error= "Incorect Password"; // TODO: better error handling
			}
			else
			{
				if($result['password']==$password)
				{
					$_SESSION["name"]=$user;
					?>
					<script>
					location.replace("home.php");
					</script><?php

				}
				else
				{
					$error= "Incorect Password";
				}
			}
		}
		
	}
	
?>

<?php 
	$header = "Login";
	include('header.php');
?>
<html>
<?php $message="Welcome. Please Login to visit our Store"; ?>

  <div class="imgcontainer">
    <img src="login.png" alt="Avatar" class="avatar">
  </div>
  <p class="text-center"><?php
	                            if($error == null) echo $message;
								else{ ?><h4 class="error text-center"><?php echo $error;}?>
	                        </h4></p>
  
<form action="login.php" method="post">  
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" name="uname" required>
	
    <label for="psw"><b>Password</b></label>
    <input type="password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class=""><a href="signup.php">Sign Up</a></span>
    <span class="psw"><a href="forgotpassword.php">Forgot password?</a></span>
  </div>
</form>
</html>
<?php include('footer.php');?>

