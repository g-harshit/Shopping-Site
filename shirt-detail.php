<?php include("database.php"); ?>
<?php 
 if(isset($_GET["id"]))
 {
     $product_id=intval($_GET["id"])+101;

     try{
	 $result=$db->prepare("SELECT * from product where id=?");
	 $result->bindParam(1,$product_id);
	 $result->execute();}
	 catch(exception $e)
	 {
		 echo "OOPS! data cannot be fetched from Database";
	 }
	 /*"select size from sizes where size_id in (select size_id from product_sizes where product_id=? )"*/
	 $product=$result->fetch(PDO::FETCH_ASSOC);
	 $product["sizes"]=array();
	 if(isset($product)){
	 try{
	      $result_nw=$db->prepare("select size from product_sizes ps inner join sizes s on ps.size_id=s.size_id where product_id=?");
	      $result_nw->bindParam(1,$product_id);
	      $result_nw->execute();
	 }
	 catch(exception $e)
	 {
		 echo "OOPS! data cannot be fetched from Database";
	 }
	 $product["sizes"]=$result_nw->fetch(PDO::FETCH_ASSOC);
	 //print_r($product);
	 var_dump($result_nw->fetch(PDO::FETCH_ASSOC));
	 while($row=$result_nw->fetch(PDO::FETCH_ASSOC));
	 {
		 echo "Hie";
		 $product["sizes"][]=$row["size"]; 
	 }}
 } 
 if(empty($product))
 {
	 header("location:shirts.php");
	 exit();
 }
   $header=$product["name"];
   include("header.php");
?>
<html>
  <div class="format"><br><br>
    <a href="shirts.php">
      <b>All Shirts</b>
    </a> <b> > <?php echo $product["name"];?> </b><br><br>
	<div class="row">
	  <div class="col-md-6">
	    <img src="<?php echo $product["img"]; ?>" width="300">
	  </div>
	  <div class="col-md-6">
	    <div class="price">$<?php echo $product["price"];?> <h3><?php echo $product["name"];?></h3>
		<h6>* All Shirts are Designed by Professional Designers</h6></div>
		<form action="#">
		  <br><br>
		  <select>
		    <?php foreach($product["sizes"] as $size) {?>
			<option value="<?php echo $size ?>"><?php echo $size ?></option>
			<?php } ?>
		  </select><br><br>
		  <button class="btn b">Add TO Cart</button>
		</form>
	  </div>
	</div>
  </div>
</html>
<?php 
 include("footer.php");
?>
 