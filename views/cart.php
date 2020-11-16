<?php

include ('../Assets/configuiration/db.php');
$object = new MainClass();

$cart = $object->getCart();

$Total = $object->getTotal();

if(isset($_GET['dell'])){
$object->removeItem($_GET['dell']);
$cart = $object->getCart();

header ('location:http://localhost/organicstore/views/cart.php');

}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<base href="http://localhost/organicstore/">
	<!-- <<<<<<<<<<<<<<<<<<<<<MAIN CSS FILE >>>>>>>>>>>>>>>>> -->
		<link rel="stylesheet" type="text/css" href="Assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="Assets/css/styles.css">
		<link  rel="stylesheet" type="text/css" href="Assets/css/animate.css">
		

	<!-- <<<<<<<<<<<<<<< BOOTSTRAP C.D.N >>>>>>>>>> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- <<<<<<<<<<<<<<<<<<<< FONT AWESOME C.D.N>>>>>>>>>>> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>


<body class="body">

<header>




	<!-- <<<<<<<<<<<<<<<<<<<<<NAVBAR START AREA>>>>>>>>>>>>>>>>> -->
	<nav class="navbar navbar-expand-md navbar-dark  text-white" style="background: #2EB26E";>
		<a class="navbar-brand text-white" href="">
			<i class="fab fa-pagelines animate flash"></i> Organic Store</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
		 aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		 <span class="navbar-toggler-icon"></span>	</button>	

		<div class="navbar navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto menu">
				<li class="nav-item active">
					<a class="nav-link" href="">Home</a>
				</li>
				
			</ul>
			<form class="form-inline mt-2 mt-md-0">
				
				<a class="nav-link text-white" style="cursor: pointer;" >
				      <i class="fas fa-shopping-cart text-warning "></i> Shopping Cart
				      <i style="color: yellow;" id="cart_n"></i>
				  </a> 
			</form>
		</div>
	</nav>
</header>
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<HEADER AREA ENDING >>>>>>>>>>>>>>>>>>> -->

<div class="container mt-5">
<main role="main">
	<div class="card">
	 <div class="card-header text-center" style="background-color:#2EB26E; color: white;"> 
	 	                                <h4>Your Cart Summary</h4></div>
	 <div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<div class="table table-responsive table-inverse">
					<table class="table">
					<thead>
						<tr>
							<th scope="col">Product</th>
							<th scope="col">Quantity</th>
							<th scope="col">Total Price</th>
							<th scope="col">Shipping</th>



						</tr>
					</thead>
					<tbody id="table">

						

						<?php foreach($cart as $row) {
							# code... 

						?>

						<tr>
          <td><img style="width:100px;height:80px;" src="<?php echo $base_url.'/product_images/'.$row['image'];?>">                  <?=$row['name'];?></td>
							<td><?=$row['qty'];?></td>
							<td>$<?=$row['price']*$row['qty'];?></td>
							<td><?=$row['shipping'];?></td>

							<td><a class="btn btn-danger"href="http://localhost/organicstore/views/
								cart.php?dell=<?php echo $row['id'];?>">
							<i class="fa fa-trash"></i></a></td>
						</tr>
					<?php } ?> 
					</tbody>
				</table>
			</div>
		</div>
		</div>
		<hr class="featurette-divider">
		<div class="row">
		<div class="col-md-5 offset-7">


		<h5>GrandTotal: $<?php echo $Total; ?></h5>

	</div>
</div>
		<hr class="featurette-divider">


		<div class="row justify-content-end">
			<div class="col-md-4 offset-8 ">
		<a href="index.php" class="btn btn-success">Continue to shopping</a>&nbsp;&nbsp;&nbsp;&nbsp;

        <a class="btn btn-success" href="views/user_info.php" style="background-color:#2EB26E; color: white;">Check Out
          </a>

       

</div>
</div>
</div>
</div>



 </main>
</div>






<footer class="container mt-5">
<div class="row">
		<b>Organic |</b> Store . Terms . About . ContactUs
	</div>
</footer>


</body>



<!-- <<<<<<<<<<<JQUERY C.D.N>>>>>>>>>>> -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<CART ITEM JAVASCRIPT FILE>>>>>>>>>>>>>>>>>> -->
		<script type="text/javascript" src="Assets/js/cart.js"></script>
		<script type="text/javascript" src="Assets/js/wow.js"></script>



</html>