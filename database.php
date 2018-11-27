<?php 
    
	try{
	$db=new PDO("mysql:host=localhost;dbname=shirts4mike;port=3306","root","");
	}
	catch(exception $e)
	{
		echo "oops could not connect the database";
		exit;
	}
?>