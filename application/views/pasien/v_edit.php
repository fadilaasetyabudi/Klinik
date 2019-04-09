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
          <h1 class="h3 mb-2 text-gray-800">Form Edit  Data Pasien</h1>
          <p class="mb-4"><a target="_blank" href="https://datatables.net"></a></p>
          <form class="user" action="<?php echo site_url('pasien/proses_edit/'.$this->uri->segment(3)); ?>" method="POST">   
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="Nama pasien" name="i_nama_pasien" value="<?php echo $p_pasien->nama_pasien; ?>">
                    </div>
                    <div class="form-group">
                      <select name="i_jenis_kelamin" class="form-control form-control-user">
                          <option value="L" <?php echo ($p_pasien->jenis_kelamin == 'L' ? 'selected="selected"' : ''); ?>>Laki-laki</option>
                         <option value="P" <?php echo ($p_pasien->jenis_kelamin == 'P' ? 'selected="selected"' : ''); ?>>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="Kontak pasien" name="i_kontak_pasien" value="<?php echo $p_pasien->kontak_pasien; ?>">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="Alamat Pasien" name="i_alamat_pasien" value="<?php echo $p_pasien->alamat_pasien; ?>">
                    </div>
                     <div class="form-group">
                      <input type="date" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="Tanggal lahir" name="i_tanggal_lahir" value="<?php echo $p_pasien->tanggal_lahir; ?>">
                    </div>
                    <div class="form-group">
                      <select name="i_golongan_darah" class="form-control form-control-user">
                          <option value="A" <?php echo ($p_pasien->golongan_darah == 'A' ? 'selected="selected"' : ''); ?>>A</option>
                         <option value="B" <?php echo ($p_pasien->golongan_darah == 'B' ? 'selected="selected"' : ''); ?>>B</option>
                         <option value="AB" <?php echo ($p_pasien->golongan_darah == 'AB' ? 'selected="selected"' : ''); ?>>AB</option>
                         <option value="O" <?php echo ($p_pasien->golongan_darah == 'O' ? 'selected="selected"' : ''); ?>>O</option>
                      </select>
                    </div>
                     <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="Kata Sandi" name="i_password_pasien" value="<?php echo $p_pasien->password_pasien; ?>">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputText" aria-describedby="emailHelp" placeholder="Kode Verivikasi" name="i_kode_verivikasi" value="<?php echo $p_pasien->kode_verivikasi; ?>">
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