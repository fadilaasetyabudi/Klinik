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
          <h1 class="h3 mb-2 text-gray-800">Tambah Data Layanan</h1>
          <br>
          <form class="user" action="<?php echo site_url('jadwal/proses_tambah'); ?>" method="POST">
            <div class="form-group">                    
              <label for="i id pasien">Nama Pasien</label>
              <input type="hidden" name="i_id_pasien" value="<?php echo $p_pasien->id_pasien ?>">
              <input type="text" class="form-control" value="<?php echo $p_pasien->nama_pasien ?>" readonly="readonly">
            </div>
            <div class="form-group">                    
              <label for="i id pasien">Piket</label>
              <select name="i_id_piket" class="form-control">
                <?php foreach ($p_semuapiket as $key) { ?>
                <option value="<?php echo $key->id_piket; ?>"><?php echo $key->nama_dokter; ?> Hari <?php echo $key->hari; ?> Jam <?php echo $key->jam_mulai ?> - <?php echo $key->jam_selesai; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">                    
              <label for="i id pasien">Layanan</label>
              <select name="i_id_layanan" class="form-control">
                <?php foreach ($p_semualayanan as $key) { ?>
                <option value="<?php echo $key->id_layanan; ?>"><?php echo $key->nama_layanan; ?></option>
                <?php } ?>
              </select>
            </div>
              <!-- <div class="form-group">                    
              <label for="i id pasien">Jasa Layanan</label>
              <select name="i_id_jasa" class="form-control">
                <?php foreach ($p_semuajasa as $key) { ?>
                <option value="<?php echo $key->id_layanan; ?>"><?php echo $key->nama_jasa; ?></option>
                <?php } ?>
              </select>
            </div> -->
           
            <div class="form-group">
            <label for="i id pasien">Tanggal Daftar</label>
              <input type="date" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder="Tanggal Daftar " name="i_tanggal_daftar" value="<?php echo date('Y-m-d') ?>" readonly>
            </div>
            <div class="form-group">
              <button style="background-color: purple;  type="submit class="btn btn-primary btn-block">
                Tambah
              </button>

            </form>
          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php $this->load->view("template/footer");?>