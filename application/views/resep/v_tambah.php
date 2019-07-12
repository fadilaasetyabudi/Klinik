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
          <h1 class="h3 mb-2 text-gray-800">Tambah Resep</h1>

          <form class="user" action="<?php echo site_url('resep/proses_tambah'); ?>" method="POST">
                    

                    <div class="form-group">
                      <select class="form-control" name="i_id_hasil">
                        <?php $no = 1;foreach ($p_hasil as $data) { ?>
                          <option value="<?php echo $data->id_hasil ?>"><?php echo $no; echo " - "; echo $data->nama_pasien." | ".$data->nama_dokter." | ".$data->hari." - ".$data->jam_mulai." - ".$data->jam_selesai." | ".$data->nama_layanan." | ".$data->nama_jasa." => ".$data->keterangan_hasil; ?></option>
                        <?php $no++;} ?>
                        <option></option>
                      </select>

                    </div>
                    <div id="obat">
                      <button type="button" id="add">+</button>
                     <div class="col-md-3">
                      <select name="i_id_obat1" id="obat1" class="form-control">
                        <?php foreach ($p_obat as $data) { ?>
                          <option value="<?php echo $data->id_obat ?>"><?php echo $data->nama_obat; ?></option>
                        <?php } ?>
                      </select>
                      <p id="satuan1"></p>
                      </div>
                      <div class="col-md-3">
                     <input type="text"  class="form-control" id="exampleInputText" aria-describedby="obatHelp" placeholder="jumlah obat" name="i_jumlah_obat1">
                     </div>
                      <br>
                      <br>
                    </div>
                    <input type="hidden" id="countObat" name="countObat">

                    <button style="background-color: purple;  type="submit" class="btn btn-primary btn-user btn-block">
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
          var i = 1;

          $('#countObat').attr("value" , i);
          addListener(i);
          $('#add').click(function(){
            i++;
            $('#obat').append('<div class="col-md-3"><select name="i_id_obat'+i+'" id="obat'+i+'" class="form-control"><?php foreach ($p_obat as $data) { ?> <option value="<?php echo $data->id_obat ?>"><?php echo $data->nama_obat; ?></option> <?php } ?> </select><p id="satuan'+i+'"></p></div><div class="col-md-3"> <input type="text"  class="form-control" id="exampleInputText" aria-describedby="obatHelp" placeholder="jumlah obat" name="i_jumlah_obat'+i+'"></div><br><br>');
            $('#countObat').attr("value", i);

            addListener(i);

          });

          function addListener(i) {
            setSatuanText(i);
            $('#obat'+i).change(function(){
              setSatuanText(i);
            });
          }

          function setSatuanText(i) {
            var base_url = "<?php echo base_url() ?>";
            var id = $('#obat'+i).val();
            $.ajax({
              url: base_url+'index.php/resep/getDataObat/'+id,
              type: "POST",
              dataType: 'text',
              success: function( response ) {
                var obj = $.parseJSON(response);
                

                
              }
              });
          }

        
          

        });

      </script>

     <?php $this->load->view("template/footer");?>