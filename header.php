<?php include('style.php');?>
<html>
<head>
  <title>
    <?php echo $header;?>
  </title>
</head>
<?php $flag = 0; ?>
<div class="row bgc">
      <div class="col-md-2">
	    <div id="drop">
		    <ul><a href="#"><span><img src="menu-icon.png" width="100"></span></a>
                <li><a href="home.php">HOME</a></li>
                <li><a href="shirts.php">MENS</a></li>
                <li><a href="shirts.php">WOMEN</a></li>
                <li><a href="shirts.php">KIDS</a></li>
                <li><a href="#">ELECTRONICS</a></li>
                <li><a href="#">SPORTS</a></li>
                <li><a href="search.php">SEARCH</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="about.php">ABOUT</a></li>
				<li><a href="logOut.php">LOG OUT</a></li>				
			</ul>
		</div>
      </div>
      <div class="col-md-2"id="brandlogo">
         <a href="home.php"><img src="img/branding-title.png" width="180px"></img></a>
      </div>
      <div class="col-md-2">
        <img src="img/srt.png"width="100px">
        </img>
        <a href="shirts.php" class="imgicon <?php if(section=="shirt"){echo "active";}?>"><b>SHIRTS</b></a>
      </div>
      <div class="col-md-2 <?php if(section=="contact"){echo "active";}?>">
        <img src="img/cnt.png" width="80px">
        </img>
        <a href="contact.php" class="imgicon"><b>CONTACT</b></a>
      </div>
	  <div class="col-md-2">
        <img src="img/search.png"width="100px">
        </img>
        <a href="search.php" class="imgicon <?php if(section=="shirt"){echo "active";}?>"><b>SEARCH</b></a>
      </div>
      <div class="col-md-2">
        <a href="#" class="imgicon"><img src="img/cart.png" width="130px"></a>
      </div>
</div>
</html>
	