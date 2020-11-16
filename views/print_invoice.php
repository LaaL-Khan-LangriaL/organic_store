
<?php

include ('../Assets/configuiration/db.php');
$object = new MainClass();


$data=$object->getRow('user_info','id',$_GET['id']);

$cart = $object->getCart();

$Total = $object->getTotal();



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

  <div class="container mt-3">
    <div class="card">
      <div class="card-body">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

 

    <form method="POST">
  <input type="hidden" name="id"  value="<?=$_GET['id']?>">



    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">


          <div class="col-sm-6">
            <h2 style="color: #2EB26E;">Invoice</h2>
          </div>
          <div class="col-sm-6 justify-content-end">
         <small class="float-right"><b style="color: #2EB26E;"><?=$data['date']?></b></small>

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          

            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4 style="color: #2EB26E;">
                    <i class="fab fa-pagelines animate flash"></i> Organic Store.
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <address><br>
                    <b>From:</b><br>
                    Sector F-5, Blue Area 44000<br>
                    Islamabad Pakistan, Pk 92344<br>
                    Phone: +92 344 427 767 7<br>
                    Email: info@organicstore.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <address><br>
                    <strong>To:</strong><br>
                    <?=$data['first_name']?> <?=$data['last_name']?><br>
                    <?=$data['address_2']?> <?=$data['zip']?><br>
                    <?=$data['address']?> <?=$data['country']?><br>
                    <?=$data['phone']?><br>
                    <?=$data['email']?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col"><br>
                  <br><b>Invoice #007612</b><br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div><br>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr style="color: #2EB26E;">
                      <th>Serial #</th>
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
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead" style="color: #2EB26E;"><b><?=$data['date']?></b></p>

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
              <div class="row no-print">
                <div class="col-sm-4 offset-8">
                  <a href="views/print_invoice.php" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                 
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </form>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<hr>
<footer class="container ">
  
  <div class="row">
    <div class="col-sm-12">
    Towards | organic . Terms . Privacy

  </div>
</footer>

</div>
</div>
</div>
</body>



<!-- <<<<<<<<<<<JQUERY C.D.N>>>>>>>>>>> -->
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>


</html>

