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
          <h1 class="h3 mb-2 text-gray-800">Data Obat</h1>
          <br>
          <form class="user" action="<?php echo site_url('obat/proses_tambah'); ?>" method="POST">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="obatHelp" placeholder="Nama obat" name="i_nama_obat" required="required">
                    </div>
                    <div class="form-group">
                    <!--   <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="obatHelp" placeholder="Satuan" name="i_satuan"> -->
                    <p>
                    <label for="i bentuk">bentuk</label>
                    <!-- <input type="text" name="i_jenis_kelamin"></input> -->
                    <select name="i_bentuk" class="form-control" required="required">
                      <option value="botol">Botol</option>
                      <option value="strip">Strip</option>
                      <option value="tube">Tube</option>
                    </select>
                  </p>
                  </div>
                  <div class="form-group">
                      <label>Ukuran</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="obatHelp" placeholder="Ukuran" name="i_ukuran" required="required">
                    </div>
                    <div class="form-group">
                    <label for="i satuaan">satuaan</label>
                    <!-- <input type="text" name="i_jenis_kelamin"></input> -->
                    <select name="i_satuan" class="form-control" required="required">
                      <option value="ML">ML</option>
                      <option value="tablet">Tablet</option>
                      <option value="kapsul">Kapsul</option>
                      <option value="kaplet">Kaplet</option>
                    </select>
                  </p>
                  </div>
                    <div class="form-group">
                      <label>Harga</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="obatHelp" placeholder="harga obat" name="i_harga_obat" required="required">
                    </div>
                     <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="obatHelp" placeholder="keterangan obat" name="i_keterangan_obat" required="required">
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