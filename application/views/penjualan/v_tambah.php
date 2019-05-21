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
          <h1 class="h3 mb-2 text-gray-800">Form Tambah Data Penjualan</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <form class="user" action="<?php echo site_url('penjualan/proses_tambah'); ?>" method="POST">
                    <div class="form-group">
                      <input type="date" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="Tanggal Penjualan" name="i_tanggal_penjualan">
                    </div>
                     <div class="form-group">
                      <select name="i_id_obat" class="form-control form-control-user" onchange="getHarga()">
                        <?php for($i = 0; $i<count($p_obat); $i++) { ?>
                          <option value="<?php echo $p_obat[$i]->id_obat ?>"><?php echo $p_obat[$i]->nama_obat ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="Jumlah Pembelian" name="i_jumlah_pembelian">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="Total Harga" name="i_total_harga">
                    </div>
                    <div class="form-group">
                      <select name="i_id_pasien" class="form-control form-control-user">
                        <?php foreach ($p_pasien as $key) { ?>
                          <option value="<?php echo $key->id_pasien ?>"><?php echo $key->nama_pasien ?></option>
                        <?php } ?>
                      </select>
                    </div>
                     <div class="form-group">
                      <select name="i_id_resep" class="form-control form-control-user">
                        <?php foreach ($p_resep as $key) { ?>
                          <option value="<?php echo $key->id_resep ?>"><?php echo $key->id_resep ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Tambah
                 </button>
                  
                  </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <script type="text/javascript">
        function getHarga() {
          
        }
      </script>

     <?php $this->load->view("template/footer");?>