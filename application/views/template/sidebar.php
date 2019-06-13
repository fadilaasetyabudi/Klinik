<!-- <?php 
  // var_dump($this->session->userdata());
  // die();
 ?> -->
<!--   <link rel="stylesheet" href="<?php //echo base_url().'tema/vendor/bootstrap/css/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?php //echo base_url().'tema/vendor/font-awesome/css/font-awesome.min.css'?>">
  <link rel="stylesheet" href="<?php //echo base_url().'tema/vendor/datatables/dataTables.bootstrap4.css'?>">
  <link rel="stylesheet" href="<?php //echo base_url().'tema/css/sb-admin.css'?>"> -->


<!-- Sidebar -->
    <ul  class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: green;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
          <img src="<?php echo base_url() ?>image/logo.jpg">
        </div>
<!--         <div class="sidebar-brand-text mx-3">Admin Klinik Dokter <sup>Lia</sup></div> -->
      </a>

      <!-- Divider -->
      <br>
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li> -->

      <?php if ($this->session->userdata('level') == 'admin') { ?>
        <hr class="sidebar-divider my-0">
         <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('pasien/scan_pasien'); ?>">
            <span>Qr-Scanner</span></a>
        </li>
        
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if($this->uri->segment(1) == 'dokter') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('dokter'); ?>">
            <!-- <i class="fas fa-fw fa-tag"></i> -->
            <span>Data Dokter</span></a>
        </li>
    
        <hr class="sidebar-divider my-0">
         <li class="nav-item <?php if($this->uri->segment(1) == 'piket') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('piket'); ?>">
            <span>Piket Dokter</span></a>
        </li>
    
        <hr class="sidebar-divider my-0">
         <li class="nav-item <?php if($this->uri->segment(1) == 'pasien') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('pasien'); ?>">
            <span>Pasien</span></a>
        </li>
        
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if($this->uri->segment(1) == 'hasil') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('hasil'); ?>">
            <span>Hasil</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if($this->uri->segment(1) == 'resep') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('resep'); ?>">
            <span>Resep</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if($this->uri->segment(1) == 'layanan') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('layanan'); ?>">
            <span>Fasilittas</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if($this->uri->segment(1) == 'obat') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('obat'); ?>">
            <span>Data Obat</span></a>
        </li>
     <hr class="sidebar-divider my-0">
      <li class="nav-item <?php if($this->uri->segment(1) == 'jadwal') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('jadwal'); ?>">
            <span>Layanan Pasien</span></a>
        </li>
        <hr class="sidebar-divider my-0">
          <li class="nav-item <?php if($this->uri->segment(1) == 'penjualan') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('penjualan'); ?>">
            <span>Penjualan</span></a>
        </li>      
      <?php } ?>

      <?php if ($this->session->userdata('level') == 'dokter') { ?>
        <li class="nav-item <?php if($this->uri->segment(1) == 'profil') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('profil'); ?>">
            <!-- <i class="fas fa-fw fa-tag"></i> -->
            <span>Data Dokter</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if($this->uri->segment(1) == 'jadwal') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('jadwal'); ?>">
            <span>Layanan Pasien</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if($this->uri->segment(1) == 'hasil') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('hasil'); ?>">
            <span>Hasil</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if($this->uri->segment(1) == 'resep') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('resep'); ?>">
            <span>Resep</span></a>
        </li>
      <?php } ?>

      <?php if ($this->session->userdata('level') == 'pasien') { ?>
        <li class="nav-item <?php if($this->uri->segment(1) == 'profil_pasien') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('profil_pasien'); ?>">
            <!-- <i class="fas fa-fw fa-tag"></i> -->
            <span>Data Pasien</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if($this->uri->segment(1) == 'hasil') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('hasil'); ?>">
            <span>Hasil</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if($this->uri->segment(1) == 'layanan') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('layanan'); ?>">
            <span>Layanan</span></a>
        </li>
         <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if($this->uri->segment(1) == 'resep') { echo "active"; } ?>">
          <a class="nav-link" href="<?php echo site_url('resep'); ?>">
            <span>Resep</span></a>
        </li>
      <?php } ?>


        <hr class="sidebar-divider my-0">

   
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>
    <!-- End of Sidebar -->


<!-- //
    <script src="<?php //echo base_url().'tema/vendor/jquery/jquery.min.js'?>"></script>
    <script src="<?php //echo base_url().'tema/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
    <script src="<?php //echo base_url().'tema/vendor/jquery-easing/jquery.easing.min.js'?>"></script>
    <script src="<?php //echo base_url().'tema/vendor/datatables/jquery.dataTables.js'?>"></script>
    <script src="<?php //echo base_url().'tema/vendor/datatables/dataTables.bootstrap4.js'?>"></script>
    <script src="<?php //echo base_url().'tema/js/sb-admin.min.js'?>"></script>
    <script src="<?php //echo base_url().'tema/js/sb-admin-datatables.min.js'?>"></script>
    <script src="<?php //echo base_url().'tema/js/dataTables.responsive.js'?>"></script>
    <script src="<?php //echo base_url().'tema/js/custom.js'?>"></script> -->
