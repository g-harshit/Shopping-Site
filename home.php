<?php 
	session_start();
	$header="Shirts4Mike";
	include('header.php');
	
	if(!isset($_SESSION["name"]))
	{?>
		<script>
		location.replace("login.php");
		</script><?php
		
	}
?>
<html>
  <div class="img-responsive">
    
      <img src="img/banner-background.jpg" width="100%" height="300">
	  <img src="img/mike-the-frog.png" width="35%" height="350" class="image">
    <br><br><br>
	<p class="text-center"><b>MIKE’S LATEST SHIRTS</b></p><br><br>
	<div class="row">
	  <div class="col-md-2">
	  </div>
	  <div class="col-md-2 border">
	    <a href="#"><img src="img/shirts/shirt-101.jpg"width="200"></img>
		<p class="text-center">VIEW DETAILS</p></a>
	  </div>
	  <div class="col-md-2 border">
	    <a href="#"><img src="img/shirts/shirt-102.jpg"width="200"></img>
		<p class="text-center">VIEW DETAILS</p></a>
	  </div>
	  <div class="col-md-2 border">
	    <a href="#"><img src="img/shirts/shirt-103.jpg"width="200"></img>
		<p class="text-center">VIEW DETAILS</p></a>
	  </div>
	  <div class="col-md-2 border">
	    <a href="#"><img src="img/shirts/shirt-104.jpg"width="200"></img>
		<p class="text-center">VIEW DETAILS</p></a>
	  </div>
	  <div class="col-md-2">
	  </div>
	</div>
  </div>
</html>	
<?php include('footer.php');?>