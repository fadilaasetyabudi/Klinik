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

  <title>v_pasien edit</title>

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
          <h1 class="h3 mb-2 text-gray-800">Form Data Penjualan</h1>
          <p class="mb-4"><a target="_blank" href="https://datatables.net"></a></p>
          <form class="user" action="<?php echo site_url('penjualan/proses_edit/'.$this->uri->segment(3)); ?>" method="POST">   
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="id Penjualan" name="i_id_penjualan" value="<?php echo $p_penjualan->id_penjualan; ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                      <input type="date" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="Tanggal Penjualan" name="i_tanggal_penjualan" value="<?php echo $p_penjualan->tanggal_penjualan; ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="Jumlah Pembelian" name="i_jumlah_pembelian" value="<?php echo $p_penjualan->jumlah_pembelian; ?>">
                    </div>
                     <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="Total Harga" name="i_total_harga" value="<?php echo $p_penjualan->total_harga; ?>">
                    </div>
                     <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="id Obat" name="i_id_obat" value="<?php echo $p_penjualan->id_obat; ?>">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="id Pasien" name="i_id_pasien" value="<?php echo $p_penjualan->id_pasien; ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="id Resep" name="i_id_resep" value="<?php echo $p_penjualan->id_resep; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Kirim
                 </button>
                  
                  </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     <?php $this->load->view("template/footer");?>