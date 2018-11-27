<?php
	session_start();
	include("products.php");?>
<?php 
	$header="Shirts";
	include("header.php");
	$section="shirt";
	
	if(!isset($_SESSION["name"]))
	{?>
		<script>
		location.replace("login.php");
		</script><?php
		
	}
?>

<?php
    $total_products=32;
    $product_in_page=8;
    $total_pages=ceil($total_products/$product_in_page);
    if(isset($_GET["pg"]))
	{
		$current_page=$_GET["pg"];
	}
	else
	{
		$current_page=1;
	}
	if($current_page<1)
	{
		$current_page=1;
	}
	if($current_page>$total_pages)
	{
		$current_page=$total_pages; 
	}
	$end=$product_in_page*$current_page;
	$start=$product_in_page*($current_page-1)+1;
	

    	
?>

<html>
  <div class="format"><br><br>
    <p class="text-center">Mike's Full Catalog of Shirts</p><br>
	<div class="pagination">
	    <?php
            $i=0;
            while($i<$total_pages)
            {?>
		        <?php $i+=1;?>
				<a href="shirts.php ?pg=<?php echo $i?>"><?php echo $i." ";?></a><?php
            }				
	    ?>   
	</div> <br><br><br>
	<div class="row">
	  <?php foreach($products as $product_id => $product) {?>
	    <div class="col-md-3"><?php
		  if($product_id+1>=($start)&&$product_id+1<=($end))
		  {?>
	        <a href="shirt-detail.php ?id=<?php echo $product_id?>">
		     <img src="<?php echo $product["img"]?>" width="200"><p class="text-center">View Details</p>
		    </a><?php
          }	?>	
        </div>	
      <?php } ?>	  
    </div><br>
	<p id="page"class="text-center"><b>Page:<?php echo $current_page ?></b></p>
  </div>	
</html>
<?php include('footer.php');?>