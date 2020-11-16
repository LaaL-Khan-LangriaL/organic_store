<?php

include ('../../../Assets/configuiration/db.php');

$object = new MainClass();

if(isset($_POST['submit'])){
$data=$_POST;

// $data['brand']=$_POST['brand'];

if(isset($_FILES['image'])){
  
$data['image']=$object->Fruit_Images();


}else  {$data['image']=''; }

$data['slug']=$_POST['name'];
unset($data['submit']);

 $object->Insert_Data('fruits',['name','keywords','price','shipping','description','image','slug'],$data);

header('location:http://localhost/organicstore/admin/pages/products/fruits.php');

}

?>






<!DOCTYPE html>
<html>
<head>
  <title>Add | Fruits</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  
  
</head>

<body>

<div class="container">

  <div class="row mt-5">
    <div class="col-md-12">
      <a href="http://localhost/organicstore/admin/pages/products/fruits.php" 
                                   class="btn btn-success" style="background-color: #2EB26E;">
       Cancel&nbsp; <i class="fa fa-window-close"></i></a>
    </div>
  </div>

  <form method="POST" enctype="multipart/form-data">

    <div class="card mt-3" style="color: #2EB26E;">
      <div class="card-header text-center" style="background-color:#2EB26E; color: white;">
  <i class="fab fa-pagelines animate flash"></i> Organic Store</span></div>
        <div class="card-body">


          <div class="row mt-4">
            <div class="col-md-6">
              <label><b>Fruit Name</b></label>
              <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="col-md-6">
              <label><b>Keywords</b></label>
          <input type="text" name="title" class="form-control" placeholder="Enter keywords">
            </div>
          </div>


          <div class="row mt-4">
            <div class="col-md-6">
              <label><b>Price</b></label>
              <input type="text" name="keywords" class="form-control" placeholder="Enter price">
            </div>
            <div class="col-md-6">
              <label><b>Shipping</b></label>
              <input type="text" name="shipping" class="form-control" placeholder="Free/Charges">
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-12">
              <label><b>Fruit Description</b></label>
              <textarea class="form-control" name="description" placeholder="Write here . . ."></textarea>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-6">
              <label><b>Upload Image</b></label>
              <input type="file" name="image" class="form-control">
            </div>

            <div class="col-md-2 offset-4 mt-5">
    <button type="submit" name="submit" class="btn btn-success" style="background-color:#2EB26E;">
              Save Fruit &nbsp; <i class="fa fa-save" aria-hidden="true"></i></button>

            </div>
          </div>

        </div>
      </div>
    </form>



  </div>
</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


</html>