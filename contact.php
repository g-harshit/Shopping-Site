<?php
	session_start();
	
	if(!isset($_SESSION["name"]))
	{?>
		<script>
		location.replace("login.php");
		</script><?php
		
	}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $name=trim($_POST["name"]);
  $email=trim($_POST["email"]);
  $message=trim($_POST["message"]);
    if($name == "" OR $email == "" OR $message == "")
	{
		$errormessage= "You cannot leave Name,Email or Message empty.";
	}
	
	$mailbody="";
	$mailbody=$mailbody.$name.'<br>';
	$mailbody=$mailbody.$email.'<br>';
	$mailbody=$mailbody.$message;
	
	include("phpmailer/class.smtp.php");
  	require_once 'phpmailer/PHPMailerAutoload.php';
	
	
	
	 $mail=new PHPMailer;
	 if(!isset($errormessage)){
	 if(!$mail->ValidateAddress($email))
	 {
	    $errormessage= "Please enter your valid mail address";
	 }}
	 if(!isset($errormessage)){
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
	 $mail->Subject="Contact";
	 $mail->Body=$mailbody;
	 $mail->AddAddress("gharshit1237@gmail.com");
	 
	 if($mail->Send())
	 {
		 header("location: contact-thanks.php");
	     exit;
	 }
	 else
	 {
		 $errormessage= "OOPs!!!!! SomeThing went wrong. Please after some time.";
	 }
	 }	 
}
?>
<?php 
$header="Contact Mike";
$section="contact";
include('header.php');?>
<html>
   <?php $message="I&rsquo;d love to hear from you! Complete the form to send me an email.";?>
  <br><br>
  <div class="format">
    <h1 class="text-center">CONTACT</h1>
	<p class="text-center"><?php
	                            if(!isset($errormessage)) echo $message;
								else{ ?><h4 class="error text-center"><?php echo "*".$errormessage;}?>
	                        </h4></p><br><br>
	<form method="post" action="contact.php">
	  <table>
	    <tr>
		  <th>
	        <label for="name">Name</label>
		  </th>
		  <td>
		    <input type="text" name="name" id="name" required>
		  <td>
		</tr>
        <tr>
		  <th>
		    <label for="email">Email</label>
		  </th>
		  <td>
		    <input type="text" name="email" id="email" required>
		  </td>
        </tr>
        <tr>
		  <th>
		    <label for="message">Message</label>
		  </th>
		  <td>
		    <textarea name="message" id="message"></textarea required>
		  </td>
        </tr>
        <tr style="display:none;">
		  <th>
		    <label for="add">Address</label>
		  </th>
		  <td>
		    <input type="text" name="Address" id="add"></input>
		  </td>
        </tr>		
	  </table>
	  <br><button class="btn b">SUBMIT</button>
	</form>
  </div>
</html>
<?php include('footer.php');?>