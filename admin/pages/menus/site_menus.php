<?php

include ('../../../Assets/configuiration/db.php');

$object = new MainClass();

$show = $object->Show_Data('menu');


if(isset($_GET['dell'])){

$object->Dell_data('menu','id',$_GET['dell']);
header('location:http://localhost/organicstore/admin/pages/menus/site_menus.php');

}


include ('../header.php');

?>










<div class="container">
<div class="row mb-3">
    <div class="col-md-2 offset-10 col-sm-12 col-xs-12">
      <a class="btn btn-success" style="background-color: #2EB26E; color: white;"
                                                   href="pages/menus/add_menu.php"> Add Menu +</a>
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
                <h3 class="card-title"><b>Menu Record . . . </b></h3>
              </div>




              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Menu Name</th>
                    <th>Position</th>
                    <th>Description</th>
                    <th class="text-center">Operations</th>
                  </tr>
                  </thead>
                  <tbody>

<?php while ($row = mysqli_fetch_assoc($show)) {
  # code...
 ?>
                  <tr>
                    <td><?=$row['name'];?></td>
                    <td><?=$row['position'];?> </td>
                    <td><?=$row['description'];?></td>
                    <td class="text-center">
                    <a class="btn btn-success" href="http://localhost/organicstore/admin/pages/menus/update_menu.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" href="http://localhost/organicstore/admin/pages/menus/site_menus.php?dell=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a></td>

                   
                  </tr>


                  <?php } ?>

                   
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
