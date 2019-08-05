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
    <link href="<?php echo base_url(); ?>tema/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
          <h1 class="h3 mb-2 text-gray-800">Hasil</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <form class="user" action="<?php echo site_url('hasil/proses_tambah'); ?>" method="POST">
                    <!-- <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="obatHelp" placeholder="id hasil" name="i_id_hasil">
                    </div> -->
                    <div class="form-group">                    
                      <label for="i id pasien">ID Jadwal</label>
                      <select name="i_id_jadwal" class="form-control" id="jadwal">
                        <?php $no = 1; foreach ($p_semuajadwal as $key) { ?>
                          <option value="<?php echo $key->id_jadwal; ?>"><?php echo $no; echo " - "; echo $key->nama_pasien; echo " "; ?> | <?php echo $key->nama_dokter; ?> | Hari <?php echo $key->hari; ?> | Jam <?php echo $key->jam_mulai ?> | <?php echo $key->nama_layanan ?> </option>
                          <?php $no++;} ?>
                        </select>
                      </div>
                      <div class="form-group">                    
                      <label for="i id pasien">Jasa</label>
                      <select name="i_id_jasa" class="form-control" id="jasa">
                        
                      </select>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputText" aria-describedby="obatHelp" placeholder="keterangan hasil" name="i_keterangan_hasil">
                      </div>


                      <button style="background-color: purple; type="submit" class="btn btn-primary  btn-block">
                        Tambah
                      </button>

                    </form>
                  </div>
                  <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
                <script>
                  $(document).ready(function() {
                    getJasa();

                    $('#jadwal').change(function(){
                      getJasa();
                    });

                    function getJasa() {
                      var id = $('#jadwal').val();
                      $('#jasa').empty();
                      $.ajax({
                        url : "<?php echo base_url(); ?>index.php/hasil/getJasa/",
                        type : "POST",
                        dataType : "json",
                        data : {"id_jadwal" : id},
                        success : function(data) {
                          $.each(data, function(index) {
                              
                              $('#jasa').append('<option value="'+data[index].id_layanan+'">'+data[index].nama_jasa+'</option>');
                          });
                        },
                      })
                    }
                  })
                </script>
                <?php $this->load->view("template/footer");?>