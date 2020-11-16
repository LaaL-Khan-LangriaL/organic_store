<?php

include ('../../../Assets/configuiration/db.php');
$object = new MainClass();

if(isset($_POST['name'])){


	$object->Update_Menu_Data($_POST);
}

if (isset($_GET['id'])) {

  $data=$object->getRow('menu','id',$_GET['id']);

}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Update Menu</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	
	
</head>

<body>

<div class="container">

	<div class="row mt-5">
		<div class="col-md-12">
			<a href="http://localhost/organicstore/admin/pages/menus/site_menus.php" 
			                             class="btn btn-success" style="background-color: #2EB26E;">
			 Cancel&nbsp; <i class="fa fa-window-close"></i></a>
			
		</div>
	</div>
	<form method="POST">
	<input type="hidden" name="id"  value="<?=$_GET['id']?>">

		<div class="card mt-3" style="color: #2EB26E;">
			<div class="card-header text-center" style="background-color:#2EB26E; color: white;">
	<i class="fab fa-pagelines animate flash"></i> Organic Store</span></div>
				<div class="card-body">


					<div class="row mt-4">
						<div class="col-md-6">
							<label><b>Menu Name</b></label>
							<input type="text" name="name" value="<?=$data['name']?>" 
							     class="form-control">
						</div>

						<div class="col-md-6">
							<label><b>Menu Title</b></label>
					<input type="text" name="title" value="<?=$data['title']?>" class="form-control">
						</div>
					</div>


					<div class="row mt-4">
						<div class="col-md-6">
							<label><b>Kewords</b></label>
							<input type="text" name="keywords" value="<?=$data['keywords']?>"
							class="form-control">
						</div>
						<div class="col-md-6">
							<label><b>Menu Position</b></label>
						<select class="form-control" name="position"value="<?=$data['position']?>">
								<option>Navbar</option>
								<option>Other</option>
								<option>Footer</option>
							</select>
						</div>
					</div>

					<div class="row mt-4">
						<div class="col-md-12">
							<label><b>Menu Description</b></label>
							<textarea class="form-control" value="<?=$data['description']?>" 
								name="description"></textarea>
						</div>
					</div>


					<div class="row mt-5">
						<div class="col-md-2 offset-10 ">
		<button type="submit" name="submit" class="btn btn-success" style="background-color:#2EB26E;">
							Update Menu &nbsp; <i class="fa fa-save" aria-hidden="true"></i></button>

						</div>
					</div>

				</div>
			</div>
		</form>



	</div>
</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


</html>