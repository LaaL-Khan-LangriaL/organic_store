<?php
include ('../Assets/configuiration/db.php');

$db=new MainClass();
if(isset($_POST['addToCart']))
{
	$id=$_POST['id'];
	$product=$db->getRow($_POST['tableName'],'id',$id);
	if($product)
	{
		$db->addToCart($product);
	}
	
}



?>