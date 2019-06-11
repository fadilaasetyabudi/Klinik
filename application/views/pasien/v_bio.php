
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
          <h1 class="h3 mb-2 text-gray-800">Pasien</h1>
          <br>

          <?php  if($this->session->flashdata('fd_pesan')){}?>

            <h2><?php echo $p_pasien->nama_pasien; ?></h2>
            <h2><?php echo $p_pasien->jenis_kelamin; ?></h2>
            <h2><?php echo $p_pasien->email_pasien; ?></h2>
            <h2><?php echo $p_pasien->kontak_pasien; ?></h2>
            <h2><?php echo $p_pasien->alamat_pasien; ?></h2>
            <h2><?php echo $p_pasien->tanggal_lahir; ?></h2>
            <h2><?php echo $p_pasien->golongan_darah; ?></h2>
            <h2><?php echo $p_pasien->nama_pasien; ?></h2>
        </div>
        <!-- /.container-fluid -->
        <div class="text-center"><a style="background-color: purple; "href="<?php echo site_url('jadwal/tambah2/'.$p_pasien->id_pasien); ?>" class="btn btn-primary">
                    <span class="icon text-white-50">
                    </span>
                    <span class="text">Layanan</span>
                  </a>
          </div>
      </div>
      <!-- End of Main Content -->

     <?php $this->load->view("template/footer");?>