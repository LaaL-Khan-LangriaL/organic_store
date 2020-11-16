

	<!-- <<<<<<<<<<<<<<<<<<<<MAIN AREA STARTING>>>>>>>>>>>>>>>>>>>>>>> -->
		<main role="main">
				<div id="carouselExampleCaptions" class="carousel slide imgFilter " data-ride="carousel">
				  <ol class="carousel-indicators">
				   <li style="z-index: 102;" data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				   <li style="z-index: 102;"data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				   <li style="z-index: 102;"data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="Assets/product_images/slider/wine.jpg" class="d-block w-100" alt="..."
				       style="width: 640px;height:480px;">
				      <div class="carousel-caption d-none d-md-block ">
				        <h3 id="slide1">Organic Store</h3>
				        <p id="slide1">We are offering you fresh Organic Items.</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="Assets/product_images/slider/wine3.jpg" class="d-block w-100" alt="..."
				       style="width: 640px;height:480px;">
				      <div class="carousel-caption d-none d-md-block">
				        <h3 id="slide2">Organic Store</h3>
				        <p id="slide2">We are offering you fresh Organic Items.</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="Assets/product_images/slider/wine4.jpg" class="d-block w-100" alt="..."
				       style="width: 640px;height:480px;">
				      <div class="carousel-caption d-none d-md-block ">
				        <h3 id="slide3">Organic Store</h3>
				        <p id="slide3">We are offering you fresh Organic Items.</p>
				      </div>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  </a>
				</div>

				<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<SLIDER ENDING HERE>>>>>>>>>>>>>> -->






				<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<MAIN  CATAGORIES>>>>>>>>>>>>>>> -->
 
<form action="cart.php" method="POST">

					<div class="container marketing">

						<h2 id="fruit">Fruits</h2>
						<hr>	

						<div class="row">

							<?php while ($row = mysqli_fetch_assoc($fruit)) {
  # code...
 ?>
			<div class="col-md-4">
			 <div class="card mb-4 sm-shadow">
						

    <img style="height: 16rem;" class="card-img-top" src="http://localhost/organicstore/<?php echo '/Assets/product_images/'.$row['image'];?>">
			
			 	 <div class="card-body">
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 		<p class="card-text"><?=$row['name'];?></p>
			 	 		<p class="card-text">$<?=$row['price'];?></p>

			 	 			<div class="d-flex justify-content-between align-items-center">
			 	 				<div class="btn-group">
			 	 	<button type="button" href="views/cart.php" onclick="addToCart('<?=$row['id']?>','fruits')"
			 	 					     class="btn btn-sm btn-outline-secondary">
			 	 					     <a style="color:inherit;" href="views/cart.php">Buy</a>
			 	 					</button>   

			 	 					<button type="button" onclick="addToCart('<?=$row['id']?>','fruits')"
			 	 					     class="btn btn-sm btn-outline-secondary">
			 	 					     <a style="color:inherit;">Add to Cart</a>
			 	 					</button>    
			 	 			</div>
			 	 				<small class="texted-muted"><?=$row['shipping'];?></small>
			 	</div>
			 </div>
		</div>	
	</div>

<?php  }  ?>
	

</div>
		<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<,FRUITS DIV ENDED,>>>>>>>>>>>>>>>>>>>... -->




						<h2 id="juice">Juices</h2>
						<hr>

						<div class="row">


							<?php while ($row = mysqli_fetch_assoc($juice)) {
  # code...
 ?>


			<div class="col-md-4">
			 <div class="card mb-4 sm-shadow">

			<img style="height: 16rem;" class="card-img-top" src="http://localhost/organicstore/<?php echo '/Assets/product_images/'.$row['image'];?>">

			 	 <div class="card-body">
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 		<p class="card-text"><?=$row['name'];?></p>
			 	 		<p class="card-text">$<?=$row['price'];?></p>

			 	 			<div class="d-flex justify-content-between align-items-center">
			 	 				<div class="btn-group">
			 	 					<button type="button" onclick="addToCart('<?=$row['id']?>','juices')"
			 	 					     class="btn btn-sm btn-outline-secondary">
			 	 					     <a style="color:inherit;" href="#" >Buy</a>
			 	 					</button>   

			 	 					    
			 	 		<button type="button" onclick="addToCart('<?=$row['id']?>','juices')"
			 	 					class="btn btn-sm btn-outline-secondary">
			 	 					     <a style="color:inherit;">Add to Cart</a>
			 	 					</button>    
			 	 			</div>
			 	 				<small class="texted-muted"><?=$row['shipping'];?></small>
			 	 				
			 	</div>
			 </div>
		</div>
	</div>

<?php } ?>

</div>
					<!-- <<<<<<<<<<<<<<<<<<<<JUICE CATAGORIE ENDED>>>>>>>>>>>> -->






						<h2 id="salad">Salads</h2>
						<hr>

						<div class="row">


<?php while ($row = mysqli_fetch_assoc($salad)) {
  # code...
 ?>
							 <div class="col-md-4">
			 <div class="card mb-4 sm-shadow">					
			<img style="height: 16rem;" class="card-img-top" src="http://localhost/organicstore/<?php echo '/Assets/product_images/'.$row['image'];?>">


			 	 <div class="card-body">
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 	<i class="fa fa-star" style="color:orange;"></i>
			 	 		<p class="card-text"><?=$row['name'];?></p>
			 	 		<p class="card-text">$<?=$row['price'];?></p>

			 	 			<div class="d-flex justify-content-between align-items-center">
			 	 				<div class="btn-group">
			 	 					<button type="button" onclick="addToCart('<?=$row['id']?>','salads')"
			 	 					     class="btn btn-sm btn-outline-secondary">
			 	 					     <a style="color:inherit;" href="views/cart.php">Buy</a>
			 	 					</button>   

			 	 					<button type="button" onclick="addToCart('<?=$row['id']?>','salads')"
			 	 					     class="btn btn-sm btn-outline-secondary">
			 	 					     <a style="color:inherit;">Add to Cart</a>
			 	 					</button>    
			 	 			</div>
			 	 				<small class="texted-muted">$<?=$row['shipping'];?></small>
			 	</div>
			 </div>			 
		</div>
	</div>

<?php  }  ?>

</div>
                

                   <!-- <<<<<<<<<<<<<<<<<<<<<<<<SALADS CATAGORIES END>>>>>>>>>>>> -->


</div>
</form>

		<hr class="featurette-divider">



	</main>

