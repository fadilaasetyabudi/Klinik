<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>tema/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>tema/admin/css/sb-admin-2.min.css" rel="stylesheet" >

</head>

<!-- <body class="bg-gradient-primary"  > -->

  <div class="bg-container-primary" style="background-color: green;">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-8 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
             <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="<?php echo base_url() ?>image/logo1.jpg">
                  </div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h3 style="color: green;  class="h3 text-gray-900 mb-4>Klinik Kecantikan Dokter Lia</h3>
                  </div>
                  <br>
                  <form method="POST" action="<?php echo site_url('login/proses_login');?>" class="user">
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputtext" aria-describedby="emailHelp" placeholder="Email" name="i_email" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="i_password">
                    </div>
                   
                    </div>
                    <div class="text-center"><button style="background-color: purple; "type="submit" class="btn btn-primary">
                      Login
                  </button></div>
                   <br><br>
          <center>
          <a  href="<?php echo base_url('index.php/registrasi/create/') ?>">
              Create new account           
            </a>
         
            </center>

                    
                    <hr>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>tema/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>tema/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>tema/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>tema/admin/js/sb-admin-2.min.js"></script>

</body>

</html>
