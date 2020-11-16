<?php

include ('../../../Assets/configuiration/db.php');

$object = new MainClass();

$show = $object->Show_Data('user_info');



include ('../header.php');

?>


<div class="container">



    <div class="row mt-3">  
		<div class="col-md-12 col-sm-12">
			<a href="http://localhost/organicstore/admin/index.php" 
                                   class="btn btn-success" style="background-color: #2EB26E;">
       <i class="fa fa-arrow-left"></i>&nbsp; Back</a>

            </div>
      </div>




<div class="row mt-3">

	<?php while ($row = mysqli_fetch_assoc($show)) {
		# code...
	 ?>

	<div class="col-md-4 col-sm-12">
		<div class="card">
			<div class="card-header text-center" style="background-color:#2EB26E; color:white;">
			                                                         <b>Pending/Active</b></div>
			<div class="card-body">

				<b>Name:</b> <?=$row['first_name'];?> <?=$row['last_name'];?><br>
				<b>Email:</b> <?=$row['email'];?><br>
				<b>Phone:</b> <?=$row['phone'];?><br>
				<b>Placed at:</b> <?=$row['date'];?>
				

				<a class="btn btn-block" href="http://localhost/organicstore/admin/pages/home/detail.php?id=<?php echo $row['id']; ?>" style="background-color:yellow;color:#2EB26E;"><b>Check Detail</b>
				   </a>
			</div>
		</div>
	</div>

<?php } ?>

</div>







</div>


<?php


include ('../footer.php');

?>