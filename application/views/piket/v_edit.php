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
          <h1 class="h3 mb-2 text-gray-800">Form Edit Piket</h1>
          <p class="mb-4"><a target="_blank" href="https://datatables.net"></a></p>
          <form class="user" action="<?php echo site_url('piket/proses_edit/'.$this->uri->segment(3)); ?>" method="POST">   
                   <div class="form-group">
                      <label>Nama Dokter</label>
                       <select name="i_id_dokter" class="form-control form-control-combobox">
                         <?php foreach ($p_dokter as $key) { ?>
                           <option value="<?php echo $key->id_dokter ?>" <?php if ($key->id_dokter == $p_piket->id_dokter): ?>
                             selected
                           <?php endif ?>><?php echo $key->nama_dokter; ?></option>
                         <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Hari</label>
                      <br>
                      <select name="i_hari" class="form-control">
                      <option value="senin" <?php echo ($p_piket->hari == 'senin' ? 'selected="selected"' : ''); ?>>Senin</option>
                      <option value="selasa" <?php echo ($p_piket->hari == 'selasa' ? 'selected="selected"' : ''); ?>>Selasa</option>
                      <option value="rabo" <?php echo ($p_piket->hari == 'rabo' ? 'selected="selected"' : ''); ?>>Rabo</option>
                      <option value="kamis" <?php echo ($p_piket->hari == 'kamis' ? 'selected="selected"' : ''); ?>>Kamis</option>
                      <option value="jumat" <?php echo ($p_piket->hari == 'jumat' ? 'selected="selected"' : ''); ?>>Jumat</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label>Jam Mulai</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder="jam mulai" name="i_jam_mulai" value="<?php echo $p_piket->jam_mulai; ?>">
                    </div>
                    <div class="form-group">
                      <label>Jam Selesai</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder="jam selesai" name="i_jam_selesai" value="<?php echo $p_piket->jam_selesai; ?>">
                    </div>
                    <button style="background-color: purple; "type="submit" class="btn btn-primary">
                      Kirim
                 </button>
                  
                  </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     <?php $this->load->view("template/footer");?>