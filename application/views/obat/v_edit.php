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
          <h1 class="h3 mb-2 text-gray-800">Form Edit Data Obat</h1>

          <form class="user" action="<?php echo site_url('obat/proses_edit/'.$this->uri->segment(3)); ?>" method="POST">
                    <div class="form-group">
                      <label>Nama Obat</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="obatHelp" placeholder="Nama obat" name="i_nama_obat" value="<?php echo $p_obat->nama_obat; ?>">
                    </div>
                    <p>
                    <div class="form-group">
                    <label for="i kategori">Kategori</label>
                    <!-- <input type="text" name="i_jenis_kelamin"></input> -->
                    <select name="i_kategori" class="form-control">
                      <option value="Krim" <?php if ($p_obat->kategori == 'Krim') {
                        echo "selected";
                      } ?>>Krim</option>
                      <option value="Obat" <?php if ($p_obat->kategori == 'Obat') {
                        echo "selected";
                      } ?>>Obat</option>
                     
                    </select>
                  </p>
                  </div>
                 
                    <div class="form-group">
                      <label>Harga</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="obatHelp" placeholder="harga obat" name="i_harga_obat" value="<?php echo $p_obat->harga_obat; ?>">
                    </div>
                    <div class="form-group">
                      <label>Keterangan Obat</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="obatHelp" placeholder="keterangan obat obat" name="i_keterangan_obat" value="<?php echo $p_obat->keterangan_obat; ?>">
                    </div>
                    <button style="background-color: purple; type="submit" class="btn btn-primary btn-block">
                      Kirim
                 </button>
                  
                  </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     <?php $this->load->view("template/footer");?>