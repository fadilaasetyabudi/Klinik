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
  <link href="<?php echo base_url(); ?>tema/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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

          <div class="card shadow mb-4">

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>#</th>
                     <th>Nama Dokter</th>
                     <th>Hari</th>
                     <th>Jam Mulai</th>
                     <th>Jam Selesai</th>
                   </tr>
                 </thead>
                 <tfoot>
                  <tr>
                   <th>#</th>
                   <th>Nama Dokter</th>
                   <th>Hari</th>
                     <th>Jam Mulai</th>
                     <th>Jam Selesai</th>
                 </tr>
               </tfoot>
               <tbody>
                 <?php if(count($p_semuapiket) > 0) { ?>
                  <?php $no = 1; ?>
                  <?php foreach ($p_semuapiket as $data) { ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data->nama_dokter; ?></td>
                      <td><?php echo $data->hari; ?></td>
                      <td><?php echo $data->jam_mulai; ?></td>
                      <td><?php echo $data->jam_selesai; ?></td>
                  </tr>
                <?php } ?>
              <?php } else { ?>
                <tr>
                  <td colspan="4">Tidak ada jadwal piket</td>
                </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php $this->load->view("template/footer");?>