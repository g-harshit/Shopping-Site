<?php
	session_start();
	
	if(!isset($_SESSION["name"]))
	{?>
		<script>
		location.replace("login.php");
		</script><?php
		
	}
    $header="About";
    include('header.php');
   
   ?>
<div id="about">
    <br>
		       <img src="asd.jpg" width="300">
			   <br><br>
		   
		       <b> Mr. Harshit Gupta</b><br>
			   Email-gharshit1237@gmail.com<br>
			   Mobile-9795340107<br>
			   Address-Jaypee University,<br>
			           Anoopshahr 203390<br>
					   Boys Hostel Room-No-428
			   
		   
</div>
<?php
      include('footer.php');
   ?>