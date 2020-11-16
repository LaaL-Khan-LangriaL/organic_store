<?php

include ('Assets/configuiration/db.php');

$object = new MainClass();
$show = $object->Show_Data('menu');

$fruit = $object->Show_Data('fruits');

$juice = $object->Show_Data('juices');

$salad = $object->Show_Data('salads');



?>




<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<base href="http://localhost/organicstore/">
	<!-- <<<<<<<<<<<<<<<<<<<<<MAIN CSS FILE >>>>>>>>>>>>>>>>> -->
		<link rel="stylesheet" type="text/css" href="Assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="Assets/css/styles.css">
		<!-- <link  rel="stylesheet" type="text/css" href="Assets/css/animate.css"> -->
		

	<!-- <<<<<<<<<<<<<<< BOOTSTRAP C.D.N >>>>>>>>>> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- <<<<<<<<<<<<<<<<<<<< FONT AWESOME C.D.N>>>>>>>>>>> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>


<body>

<header>




	<!-- <<<<<<<<<<<<<<<<<<<<<NAVBAR START AREA>>>>>>>>>>>>>>>>> -->
   <nav class="navbar navbar-expand-md navbar-dark fixed-top text-white" style="background: #2EB26E";>
		<a class="navbar-brand text-white" href="">
			<i class="fab fa-pagelines animate flash"></i> Organic Store</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
		 aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		 <span class="navbar-toggler-icon"></span>	</button>	

		<div class="navbar navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto menu">


			<?php while ($row = mysqli_fetch_assoc($show)) {
  # code...
 ?>
				<li class="nav-item">
					<a class="nav-link" href=""><?=$row['name'];?></a>
				</li>
				
<?php  }  ?>

			</ul>
			<form class="form-inline mt-2 mt-md-0 justify-content-end">
				<a class="nav-link text-white "  href="views/cart.php" style="cursor: pointer;">
				      <i class="fas fa-shopping-cart text-warning"></i> Shopping Cart
				      <i style="color: yellow;" id="cart_n"></i>

				  </a>
				<a class="nav-link text-white" style="cursor: pointer;"  data-toggle="modal"
				      data-target="#ModalCenter">
				      <i class="far fa-user text-warning"></i> Administrator
				  </a> 
			</form>
		</div>
	</nav>
</header>
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<HEADER AREA ENDING >>>>>>>>>>>>>>>>>>> -->

 <!-- <<<<<<<<<<<<<<<<<<<<<<<MODAL START>>>>>>>>>>>>>>>>>>>>>>>>>> -->


		  	<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" 
		  	     aria-labelledby="ModalCenterTitle" aria-hidden="true">
		  	     <div class="modal-dialog modal-dialog-centered" role="document">
		  	     	<div class="modal-content">
		  	     		<div class="modal-header">
		  	     			<h5 class="ModalLongTitle" class="modal-title">
		  	     				Administrator
		  	     			</h5>
		  	     			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  	     				<span aria-hidden="true">&times;</span>
		  	     			</button>
		  	     		</div>

		  	     		<form id="formA" class="text-center border border-light p-5" autocomplete="off">
		  	     			<p class="h4 mb-4">
		  	     				Login
		  	     			</p>
		  	     			<input type="text" name="usera" class="form-control mb-4" placeholder="User">
		  	     			<input type="password" name="passworda" class="form-control mb-4" placeholder="Password">
		  	     			<button type="submit" class="btn btn-success btn-block"
		  	     			   style="color: white;background: #2EB26E;">Submit</button>
		  	     		</form>
		  	     	</div>
		  	     </div>
		  	</div>




		  	<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<END MODAL>>>>>>>>>>>>>>>>>>>>> -->




		  		