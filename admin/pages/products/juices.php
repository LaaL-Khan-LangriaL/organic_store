<?php

include ('../../../Assets/configuiration/db.php');

$object = new MainClass();

$show = $object->Show_Data('juices');


if(isset($_GET['dell'])){

$object->Dell_data('juices','id',$_GET['dell']);
header('location:http://localhost/organicstore/admin/pages/products/juices.php');

}


include ('../header.php');

?>








<div class="container">
<div class="row mb-3">
    <div class="col-md-2 offset-10 col-sm-12 col-xs-12">
      <a class="btn btn-success" style="background-color: #2EB26E; color: white;"
                                             href="pages/products/add_juices.php">Add Juices +</a>
    </div>
  </div>
</div>





  
    <!-- Main content -->
    <section class="content" style="color:#2EB26E;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Juices Record . . . </b></h3>
              </div>




              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Juice Name</th>
                    <th>Price</th>
                    <th>Shipping</th>
                    <th>image</th>
                    <th class="text-center">Operations</th>
                  </tr>
                  </thead>
                  <tbody>


<?php while ($row = mysqli_fetch_assoc($show)) {
  # code...
 ?>
                  <tr>
                    <td><?=$row['name'];?></td>
                    <td><?=$row['price'];?> </td>
                    <td><?=$row['shipping'];?></td>
                    <td><img style="width:100px;height:80px;" src="<?php echo $base_url.'/product_images/'.$row['image'];?>"></td>
                    <td class="text-center">
                    <a class="btn btn-success" href="http://localhost/organicstore/admin/pages/products/update_juices.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" href="http://localhost/organicstore/admin/pages/products/juices.php?dell=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a></td>

                   
                  </tr>

<?php  }  ?>

                   
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

         
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 







<?php include ('../footer.php'); ?>
