<?php 
session_start();
$header="Search";
include("header.php");
include("products.php");
if(!isset($_SESSION["name"]))
	{?>
		<script>
		location.replace("login.php");
		</script><?php
		
	}
/*if()
	{?>
		<script>
		location.replace("login.php");
		</script><?php
	}*/
?>

<html>
   <br><br>
   <?php
       $search_item="";
	   if(isset($_GET["s"]))
	   {
		   $search_item=trim($_GET["s"]);
	   }
   ?>
   <div class="format">
       <h1 class="text-center"> SEARCH <h1> <br><br>
       <form id="search" method="get" action="search.php">
	     <input id="search_input"type="text" name="s" value="<?php echo $search_item ?>"></input>
		 <input type="submit" value="GO" class="btn b"></input>
       </form><br><br> <?php
       if(isset($search_item))
		{ ?>
	        <div class="row"><?php
			    foreach($products as $product_id => $product) 
				{
				    if(stripos($product["name"],$search_item)!==false)
					{?>
	                  <div class="col-md-3">
	                    <a href="shirt-detail.php ?id=<?php echo $product_id ?>">
		                    <img src="<?php echo $product["img"]?>" width="200"><p class="text-center">View Details</p>
		                </a>  
                      </div>	<?php 
					}
                }?>
			</div>	<?php
		}  ?>
		
   </div>
</html>

<?php include("footer.php");?>