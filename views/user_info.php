<?php

include ('../Assets/configuiration/db.php');

$object = new MainClass();



$cart = $object->getCart();

$Total = $object->getTotal();




if(isset($_POST['submit']) && (isset($_SESSION['cart']))){

$data=$_POST;

unset($data['submit']);

$user=array(
'first_name'=>$data['first_name'],
'last_name'=>$data['last_name'],
'email'=>$data['email'],
'phone'=>$data['phone'],
);

$last_Uid=$object->InsertLastId('user_info',['first_name','last_name','email','phone'],$user);

$order=array(
'user_id'=>$last_Uid,
'company'=>$data['company'],
'zip'=>$data['zip'],	
'address'=>$data['address'],
'address_2'=>$data['address_2'],
'country'=>$data['country'],
'province'=>$data['province'],
'order_notes'=>$data['order_notes'],
);

$last_id=$object->InsertLastId('e_order',['user_id','company','zip','address','address_2','country','province','order_notes'],$order);

// header('location:http://localhost/organicstore/views/thanku.php');





foreach ($cart as $row) {
	# code...


$item=array(

'order_id'=>$last_id,
'name'=>$row['name'],
'quantity'=>$row['qty'],
'price'=>$row['price'],
'image'=>$row['image'],  
);


$object->Insert_Data('items',['order_id','name','quantity','price','image'],$item);

}


}


?>






<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

     <base href="http://localhost/organicstore/">
	
</head>


<body>

<div class="row container mt-4">


	<div class="col-md-6">
		<div class="card">
			<div class="card-header text-center" style="color: #2EB26E;"><b>Complete Your Address</b></div>
				<div class="card-body">

<form method="POST">




					<div class="row mt-3">
						<div class="col-md-6">
							<label>First Name</label>
							<input type="text" name="first_name" class="form-control" placeholder="first name">
						</div>
						<div class="col-md-6">
							<label>Last Name</label>
							<input type="text" name="last_name" class="form-control" placeholder="last name">
						</div>
					</div>


					<div class="row mt-3">
						<div class="col-md-6">
							<label>Email</label>
							<input type="text" name="email" class="form-control" placeholder="email">
						</div>
						<div class="col-md-6">
							<label>Phone.</label>
							<input type="text" name="phone" class="form-control" placeholder="phone">
						</div>
					</div>


					<div class="row mt-3">
						<div class="col-md-6">
							<label>Company Name</label>
							<input type="text" name="company" class="form-control" placeholder="company name">
						</div>
						<div class="col-md-6">
							<label>Posta / Zip</label>
							<input type="text" name="zip" class="form-control" placeholder="postal / zip">
						</div>
					</div>


					<div class="row mt-3">
						<div class="col-md-6">
							<label>Address</label>
							<input type="text" name="address" class="form-control" placeholder="street address">
						</div>

						<div class="col-md-6">
							<label>(optional)</label>
							<input type="text" name="address_2" class="form-control" placeholder="Apartment,suit,unit etc">
						</div>
					</div>


					<div class="row mt-3">
						<div class="col-md-6">
							<label>State / Country</label>
							<input type="text" name="country" class="form-control" placeholder="state / country">
						</div>
						<div class="col-md-6">
							<label>Province</label>
							<input type="text" name="province" class="form-control" placeholder="province">
						</div>
					</div>


					<div class="row mt-4">
						<div class="col-md-12">
							<label>Order notes</label>
							<textarea name="order_notes" class="form-control" placeholder="Write your notes here..."></textarea>
						</div>
					</div>
							<div class="row mt-3">
								<div class="col-md-12">
							<button type="submit" name="submit" class="btn btn-primary">submit</button>
								</div>
							</div>

</form>
				</div>
			</div>
		</div>



<div class="col-md-6">

	<div class="card">
		<div class="crad-header text-center"  style="color: #2EB26E;"><b>Your cart summary</b></div>
			<div class="card-body">

				<div class="row text-center">
                	<div class="col-12 table-responsive">
                  	<table class="table table-striped">
                    <thead>
                    <tr style="color: #2EB26E;">
                      <th>Sr.No</th>
                      <th>Product</th>
                      <th>Qty</th>
                      <th>Shipping</th>
                      <th>SubTotal</th>
                    </tr>
                    </thead>
                    <tbody>


            <?php foreach($cart as $row) {
              # code... 

            ?>
                    <tr>
                      <td><?=$row['id'];?></td>

                      <td><img style="width:100px;height:80px;" src="<?php echo $base_url.'/product_images/'.$row['image'];?>">                  <?=$row['name'];?></td>

                      <td><?=$row['qty'];?></td>
                      <td><?=$row['shipping'];?></td>
                      <td>$<?=$row['price']*$row['qty'];?></td>
                    </tr>
                   
                   <?php  } ?>


                    </tbody>
                  </table>
                </div>

                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead" style="color: #2EB26E;"><b>Payment Methods:</b></p>
                  <img src="Assets/images/visa.png" alt="Visa" style="height: 70px; width: 70px;">
                  <img src="Assets/images/master.png" alt="Mastercard" style="height: 70px; width: 70px;">
                  <img src="Assets/images/paypal.png" alt="Paypal" style="height: 70px; width: 70px;">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    
                    <select class="form-control" name="method">
                    	<option>Cash on delivery</option>
                    	<option>Paypal</option>
                    	<option>Master Card</option>
                    	<option>Visa Card</option>
                    </select>
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead" style="color: #2EB26E;"><b>Due Date:</b></p>

                  <div class="table-responsive">
                    <table class="table">

                     

                     
                      <tr>
                        <th>Shipping:</th>
                        <td>Free</td>
                      </tr>
                      <tr>
                        <th>GrandTotal:</th>
                        <td>$<?php echo $Total; ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row">
                <div class="col-sm-2 offset-10">
                  
                
                 
                </div>
              </div>
            </div>

        </div>
    </div>


                            <!-- /.invoice -->
</div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</html>