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

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url(); ?>tema/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
   <link href="<?php echo base_url(); ?>tema/admin/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    
    <?php  $this->load->view("template/sidebar");?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php $this->load->view("template/topbar");?>


        

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tambah Jasa Layanan</h1>
          <form class="user" action="<?php echo site_url('jasa_layanan/proses_tambah'); ?>" method="POST">
                    <div class="form-group">
                      <label>Nama Layanan</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="layananHelp" placeholder="Nama Jasa layanan" name="i_nama_jasa_layanan" required="required">
                    </div>

                    <div class="form-group">
                     <label>Kategori</label>
                      <select class="form form-control" name="i_layanan" required="required">
                        <?php foreach ($p_layanan as $key) { ?>
                          <option value="<?php echo $key->id_layanan ?>"><?php echo $key->nama_layanan; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Harga</label>
                      <input type="text" class="form-control " id="exampleInputText" aria-describedby="layananHelp" placeholder="Harga " name="i_harga" required="required">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                      Tambah
                 </button>
                  
                  </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     <?php $this->load->view("template/footer");?>