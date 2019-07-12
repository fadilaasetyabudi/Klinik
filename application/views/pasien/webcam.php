<?php
defined('BASEPATH') or exit('No direct script');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">
        <meta charset="UTF-8">
        <title>WebCodeCamJS</title>
        <!-- Custom fonts for this template -->
          <link href="<?php echo base_url(); ?>tema/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
          <!-- Custom styles for this template -->
           <link href="<?php echo base_url(); ?>tema/admin/css/sb-admin-2.min.css" rel="stylesheet">
          <!-- Custom styles for this page -->
        <!--   <link href="<?php base_url()?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
        <link href="<?php base_url()?>tema/webcam/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php base_url()?>tema/webcam/css/style.css" rel="stylesheet">
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
            <div class="text-center">
             <h4>Scan Barqode disini</h4>
             <br>
                    </div>
                    <div class="navbar-form navbar-right">
                        <select class="form-control" id="camera-select"></select>
                        <div class="form-group">
                            <input id="image-url" type="text" class="form-control" placeholder="Image url">
                            <button title="Decode Image" class="btn btn-default btn-sm" id="decode-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-upload"></span></button>
                            <button title="Image shoot" class="btn btn-info btn-sm disabled" id="grab-img" type="button" data-toggle="tooltip"><span class="fas fa-image"></span></button>
                            <button title="Play" class="btn btn-success btn-sm" id="play" type="button" data-toggle="tooltip"><span class="fas fa-play"></span></button>
                            <button title="Pause" class="btn btn-warning btn-sm" id="pause" type="button" data-toggle="tooltip"><span class="fas fa-pause"></span></button>
                            <button title="Stop streams" class="btn btn-danger btn-sm" id="stop" type="button" data-toggle="tooltip"><span class="fas fa-stop"></span></button>
                         </div>
                    </div>
                </div>
                <div class="panel-body text-center">
                    <div class="col-md-12">
                        <div class="well" style="position: relative;display: inline-block;">
                            <canvas width="320" height="240" id="webcodecam-canvas"></canvas>
                            <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                        </div>
                        <!-- <div class="well" style="width: 100%;">
                            <label id="zoom-value" width="100">Zoom: 2</label>
                            <input id="zoom" onchange="Page.changeZoom();" type="range" min="10" max="30" value="20">
                            <label id="brightness-value" width="100">Brightness: 0</label>
                            <input id="brightness" onchange="Page.changeBrightness();" type="range" min="0" max="128" value="0">
                            <label id="contrast-value" width="100">Contrast: 0</label>
                            <input id="contrast" onchange="Page.changeContrast();" type="range" min="0" max="64" value="0">
                            <label id="threshold-value" width="100">Threshold: 0</label>
                            <input id="threshold" onchange="Page.changeThreshold();" type="range" min="0" max="512" value="0">
                            <label id="sharpness-value" width="100">Sharpness: off</label>
                            <input id="sharpness" onchange="Page.changeSharpness();" type="checkbox">
                            <label id="grayscale-value" width="100">grayscale: off</label>
                            <input id="grayscale" onchange="Page.changeGrayscale();" type="checkbox">
                            <br>
                            <label id="flipVertical-value" width="100">Flip Vertical: off</label>
                            <input id="flipVertical" onchange="Page.changeVertical();" type="checkbox">
                            <label id="flipHorizontal-value" width="100">Flip Horizontal: off</label>
                            <input id="flipHorizontal" onchange="Page.changeHorizontal();" type="checkbox">
                        </div> -->
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="thumbnail" id="result">
                            <div class="well" style="overflow: hidden;">
                                <img width="320" height="240" id="scanned-img" src="">
                            </div>
                            <div class="caption">
                                <h3>Scanned result</h3>
                                <p id="scanned-QR"></p>
                                <a id="link-QR"></p>
                            </div>
                        </div> -->
                    </div>
                </div>
                </div>

        <!-- <script type="text/javascript" src="js/filereader.js"></script> -->
        <!-- Using jquery version: -->
            <script type="text/javascript">
                var base_url = <?php echo base_url(); ?>
            </script>
            <script type="text/javascript" src="<?=base_url()?>tema/webcam/js/jquery.js"></script>
            <script type="text/javascript" src="<?=base_url()?>tema/webcam/js/qrcodelib.js"></script>
            <script type="text/javascript" src="<?=base_url()?>tema/webcam/js/webcodecamjquery.js"></script>
            <script type="text/javascript" src="<?=base_url()?>tema/webcam/js/mainjquery.js"></script>
        <!-- <script type="text/javascript" src="js/qrcodelib.js"></script> -->
        <!-- <script type="text/javascript" src="js/webcodecamjs.js"></script> -->
        <!-- <script type="text/javascript" src="js/main.js"></script> -->
    </body>
     
</html>

