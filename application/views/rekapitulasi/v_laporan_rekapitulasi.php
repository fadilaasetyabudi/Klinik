<?php
  defined('BASEPATH') or exit('No direct script access allowed');

  $type_user = $this->session->userdata('type_user');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Pasien Klinik</title>

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url(); ?>tema/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>tema/admin/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url(); ?>tema/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php
      if($type_user == 'admin') {
        $this->load->view('template/sidebar'); 
      }
    ?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php $this->load->view('template/topbar'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Transaksi Pengeluaran Stok Benih Offline</h1>
      
          <?php if ($this->session->flashdata('fd_pesan')) { ?>

          <!-- Basic Card Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Notifikasi</h6>
              </div>
              <div class="card-body">
                <?php echo $this->session->flashdata('fd_pesan'); ?>
              </div>
            </div>
          <?php } ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-body">

              <form action="<?php echo site_url('rekapitulasi/print_download/'); ?>" method="POST">

              
              <h4>Pilih Waktu Bulan Laporan</h4>
              Tanggal :
                <input type="date" name="i_tanggal" class="form form-control">
                <br>
                Sampai:
                <input type="date" name="i_sampai" class="form form-control">
                <br>
                Layanan:
                <select name="i_layanan" class="form form-control">
                  <option value="semua">SEMUA</option>
                  <?php foreach ($p_layanan as $key) { ?>
                    <option value="<?php echo $key->id_layanan ?>"><?php echo $key->nama_layanan; ?></option>
                  <?php } ?>
                </select>
                <br>
              
                <br>
                <br>
                <button type="submit" class="btn btn-success">Download</button>
                </form>
              </div>
            </div>
          </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $this->load->view('template/footer'); ?>