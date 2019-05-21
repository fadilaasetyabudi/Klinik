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
          <h1 class="h3 mb-2 text-gray-800">Form Tambah Data Pasien</h1>
          <br>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <form class="user" action="<?php echo site_url('pasien/proses_tambah'); ?>" method="POST">
                    <div class="form-group">
                       <label for="i id pasien">Nama Pasien</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder=" " name="i_nama_pasien">
                    </div>
                    <div class="form-group">
                       <label for="i id pasien">Jenis Kelamin</label>
                       <br>
                      <select name="i_jenis_kelamin" class="form-control-combobox">
                         <option value="L" selected>Laki-laki</option>
                         <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                       <label for="i id pasien">Email</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder=" " name="i_email_pasien">
                    </div>
                    <div class="form-group">
                       <label for="i id pasien">No.Hp</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder=" " name="i_kontak_pasien">
                    </div>
                    <div class="form-group">
                       <label for="i id pasien">Alamat</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder=" " name="i_alamat_pasien">
                    </div>
                     <div class="form-group">
                       <label for="i id pasien">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder=" " name="i_tanggal_lahir">
                    </div>
                    <div class="form-group">
                       <label for="i id pasien">Golongan Darah</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder=" " name="i_golongan_darah">
                    </div>
                     <div class="form-group">
                       <label for="i id pasien">Password</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder=" " name="i_password_pasien">
                    </div>
                    <div class="form-group">
                       <label for="i id pasien">Verifikasi Password</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder=" " name="i_kode_verivikasi">
                    </div>
                   
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Tambah
                 </button>
                  
                  </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     <?php $this->load->view("template/footer");?>