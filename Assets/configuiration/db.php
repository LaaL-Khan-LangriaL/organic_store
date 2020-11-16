<?php
$base_url='http://localhost/organicstore/Assets/';
class MainClass {
		function __construct(){
			session_start();
			$server = 'localhost';
			$user = 'root';
			$password = "";
			$db_name = 'organic_store';
			$this->con = mysqli_connect($server,$user,$password,$db_name);
			if(!$this->con){

				echo "Error in Database";

			}


}
		














	     // <<<<<<<<<<<<<<<<<<<<<<<<<<< Auth Functions For Panel  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>




		function Auth_Sign_In(){

			if(!isset($_SESSION['login']) && $_SESSION['login']!='YES'){

				header('Location:http://localhost/adcp/admin/pages/sign_in.php');
			}
		}






	     // <<<<<<<<<<<<<<<<<<<<<<<<<<< Acces Function for panel  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>






		function Access_Sign_In(){

				if(isset($_POST['submit'])){

			    $query  = "select * from adminpanel where email = '".$_POST['email']."' and password = '".$_POST['password']."'";
				$result = mysqli_query($this->con,$query);
				$row = mysqli_fetch_assoc($result);
				if($row){
					$_SESSION['userData']=$result;
					$_SESSION['login']='yes';
					
					header('location:http://localhost/adcp/admin/index.php');

				}else{

					echo "Error";
				}
		}
	}			






		











						// <<<<<<<< Lock Screen Function >>>>>>>>>>


// function Auth_Lock_Screen(){

		// 	if(!isset($_SESSION['login']) && $_SESSION['login']!='YES'){

		// 		header('Location:http://localhost/adcp/admin/pages/lockscreen/lock_screen.php');
		// 	}
		// }
		




        // <<<<<<<<<<<<<<<<<<<<<<<<<<< Acces Function for lock_screen  >>>>>>>>>>>>>>>>>>>>>>>>>>>



	// 	function Access_Lock_Screen(){

	// 			if(isset($_POST['submit'])){

	// 		    $query  = "select * from adminpanel where password = '".$_POST['password']."'";
	// 			$result = mysqli_query($this->con,$query);
	// 			$row = mysqli_fetch_assoc($result);
	// 			if($row){
	// 				$_SESSION['userData']=$result;
	// 				$_SESSION['login']='yes';
					
	// 				header('location:http://localhost/adcp/admin/index.php');

	// 			}else{

	// 				echo "Error";
	// 			}
	// 	}
	// }			














	     // <<<<<<<<<<<<<<<<<<<<<<<<<<<  Generic Functions Starts Here    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>


		function getRow($tableName,$key,$id)
		{
			$query="select * from ".$tableName." where ".$key."=".$id."";
			$result=mysqli_query($this->con,$query);
			return mysqli_fetch_assoc($result);
		}



		
		function getRows($tableName,$key,$id)
		{	$data=[];
			$query="select * from ".$tableName." where ".$key."=".$id."";
			$result=mysqli_query($this->con,$query);
			while ($row=mysqli_fetch_assoc($result)) {
				# code...
				$data[]=$row;
			}
			return $data;
		}


		function Dell_data($tableName,$key,$value){

		$query = "delete from ".$tableName."  where ".$key." = ".$value."";
		$result = mysqli_query($this->con,$query);
		return $result;
	}




	 function Show_Data($tableName)
		{
			$query="select * from ".$tableName."";
			$result = mysqli_query($this->con,$query);
			return $result;
		
		}




	function Insert_Data($tableName,$index=array(),$values=array())
		{
		
	$query="insert into ".$tableName." (".implode(',',$index).") Values('".implode("','",$values)."') ";

	 
	 $result = mysqli_query($this->con,$query);

	 return $result;




		}

		function InsertLastId($tableName,$index=array(),$values=array())
		{
		
     $query="insert into ".$tableName." (".implode(',',$index).") Values('".implode("','",$values)."') ";

	 
	    mysqli_query($this->con,$query);

	    $last_id = mysqli_insert_id($this->con);

		return $last_id;




		}


	     // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<   Generic Functions End >>>>>>>>>>>>>>>>>>>>>>>>










                 // <<<<<<<<<<<<<<<<<<<<<<<<<<NON GENERIC FUNCTION>>>>>>>>>>>>>>>>>>>>



function Update_Menu_Data($data){
				
	  $query = "update menu set name = '".$data['name']."',title = '".$data['title']."',
		  keywords = '".$data['keywords']."',position = '".$data['position']."',
		     description = '".$data['description']."',slug = '".$data['name']."'
		     where id = '".$data['id']."'";

					 $result = mysqli_query($this->con,$query);

					 if($result){

					 	 header('location:http://localhost/organicstore/admin/pages/menus/site_menus.php');
					 }else

					 {

					 	echo "Error";
					 }

}







function Update_Fruits_Data($data){
				
	  $query = "update fruits set name = '".$data['name']."',keywords = '".$data['keywords']."',
		  price = '".$data['price']."',shipping = '".$data['shipping']."',
		     description = '".$data['description']."',image = '".$data['image']."',
		       slug = '".$data['name']."'where id = '".$data['id']."'";

					 $result = mysqli_query($this->con,$query);

					 if($result){

					 	 header('location:http://localhost/organicstore/admin/pages/products/fruits.php');
					 }else

					 {

					 	echo "Error";
					 }

}







function Update_Juices_Data($data){
				
	  $query = "update juices set name = '".$data['name']."',keywords = '".$data['keywords']."',
		  price = '".$data['price']."',shipping = '".$data['shipping']."',
		     description = '".$data['description']."',image = '".$data['image']."',
		       slug = '".$data['name']."'where id = '".$data['id']."'";

					 $result = mysqli_query($this->con,$query);

					 if($result){

					 	 header('location:http://localhost/organicstore/admin/pages/products/juices.php');
					 }else

					 {

					 	echo "Error";
					 }

}







function Update_Salads_Data($data){
				
	  $query = "update salads set name = '".$data['name']."',keywords = '".$data['keywords']."',
		  price = '".$data['price']."',shipping = '".$data['shipping']."',
		     description = '".$data['description']."',image = '".$data['image']."',
		       slug = '".$data['name']."'where id = '".$data['id']."'";


					 $result = mysqli_query($this->con,$query);

					 if($result){

					 	 header('location:http://localhost/organicstore/admin/pages/products/salads.php');
					 }else

					 {

					 	echo "Error";
					 }

}












































// <<<<<<<<<<<<<<<<<<<<<<<<<<<IMAGES FUNCTIONS>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>






function Fruit_Images()
	{
	
 $uploaddir = '../../../Assets/product_images/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
		

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
    	return $_FILES['image']['name'];
    }
}



       
function Juice_Images()
	{
	
 $uploaddir = '../../../Assets/product_images/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
		

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
    	return $_FILES['image']['name'];
    }
}



function Salad_Images()
	{
	
 $uploaddir = '../../../Assets/product_images/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
		

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
    	return $_FILES['image']['name'];
    }
}

      



function order_Images()
	{
	
 $uploaddir = '../../../Assets/product_images/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
		

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
    	return $_FILES['image']['name'];
    }
}


  


 function addToCart($item)
{
	
	if (array_key_exists($item['id'],$_SESSION['cart']))
{	

	// $price=$_SESSION['cart'][$items['id']]['price'];


	$_SESSION['cart'][$item['id']]['qty']=$_SESSION['cart'][$item['id']]['qty']+1;
	

}else{

	$_SESSION['cart'][$item['id']]=$item;
	$_SESSION['cart'][$item['id']]+=array('qty'=>1);
	

}

}
function getCart()
{	
	if (isset($_SESSION['cart'])) {
		# code...
		return $_SESSION['cart'];
	}else
	{
		return array();
	}
}

 function removeItem($id)
{
	# code...
	unset($_SESSION['cart'][$id]);
	return 1;
}


function getTotal(){
    	$total=0;
		if(isset($_SESSION['cart'])){
	foreach ($_SESSION['cart'] as $key => $value) {
		# code...
    	$total+=$value['price']*$value['qty'];

	}

}
	return $total;


}



}

?>

