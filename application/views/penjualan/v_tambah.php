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
                      <input type="date" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder="Tanggal Penjualan" name="i_tanggal_penjualan" value="<?php echo date('Y-m-d'); ?>" readonly="readonly">
                    </div>
                     <div class="form-group">
                      <select name="i_id_resep" id="resep" class="form-control">
                        <?php foreach ($p_resep as $key) { ?>
                          <option value="<?php echo $key->id_resep ?>"><?php echo $key->nama_dokter." - ".$key->nama_pasien." - ".$key->keterangan_hasil ?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <table class="table table-bordered">
                      <thead>
                        <th>Obat</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                      </thead>
                      <tr id="tabelObat">
                        
                      </tr>
                        <tr id="jasa">
                        
                        </tr>
                    </table>

                    <div class="form-group">
                      <input type="text" class="form-control" id="total_harga" aria-describedby="emailHelp" placeholder="Total Harga" name="i_total_harga" readonly="readonly">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                      Tambah
                 </button>
                  
                  </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script>
        $(document).ready(function(){
          var base_url = "<?php echo base_url() ?>";
          var id = $('#resep').val();
          var hargaTotal = 0;
          getObat();
          getJasa();

          function getObat() {
            $.ajax({
              url: base_url+'index.php/penjualan/getDataObat/'+id,
              type: "GET",
              dataType: 'text',
              success: function( response ) {
                var obj = $.parseJSON(response);
                hargaTotal = 0;
                $('#tabelObat').empty();
                  $.each(obj, function(index) {
                      $('#tabelObat').after("<tr><td>"+obj[index]['nama_obat']+"</td><td>"+obj[index]['jumlah']+"</td><td align='right'>Rp. "+obj[index]['total']+"</td><tr>");

                      hargaTotal+=parseInt(obj[index]['total']);
                      
                  
                  });

              }
            });
          }

          function getJasa() {
            $.ajax({
              url: base_url+'index.php/penjualan/getJasa/'+id,
              type: "GET",
              dataType: 'text',
              success: function( response ) {
                var obj = $.parseJSON(response);
                    $('#jasa').empty();
                    $('#jasa').after("<td colspan='2'>"+obj['nama_jasa']+"</td><td align='right'>Rp. "+obj['harga']+"</td>");

                    hargaTotal+=parseInt(obj['harga']);
                    $('#total_harga').val(hargaTotal);
              }
            });
          }
            

          $('#resep').change(function(){
            var id = $('#resep').val();
            //hargaTotal = 0;
            getObat();
            

          });

          function setTotal(increment) {
            hargaTotal += increment;
          }

        
          

        });

      </script>

     <?php $this->load->view("template/footer");?>