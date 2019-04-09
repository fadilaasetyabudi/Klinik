<!--   <link rel="stylesheet" href="<?php //echo base_url().'tema/vendor/bootstrap/css/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?php //echo base_url().'tema/vendor/font-awesome/css/font-awesome.min.css'?>">
  <link rel="stylesheet" href="<?php //echo base_url().'tema/vendor/datatables/dataTables.bootstrap4.css'?>">
  <link rel="stylesheet" href="<?php //echo base_url().'tema/css/sb-admin.css'?>"> -->


<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Klinik Dokter <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
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
      </li>


      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('dokter'); ?>">
          <i class="fas fa-fw fa-tag"></i>
          <span>Dokter</span></a>
      </li>

 <!-- Divider -->
      <!-- <hr class="sidebar-divider my-2"> -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('jadwal'); ?>">
          <i class="fas fa-fw fa-archive"></i>
          <span>Jadwal</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('piket'); ?>">
          <i class="fas fa-fw fa-archive"></i>
          <span>Piket</span></a>
      </li>

      <?php if ($this->session->userdata('level') == 'admin') { ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('layanan'); ?>">
          <i class="fas fa-fw fa-archive"></i>
          <span>Layanan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('obat'); ?>">
          <i class="fas fa-fw fa-archive"></i>
          <span>Obat</span></a>
      </li>
    

  <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('pasien'); ?>">
          <i class="fas fa-fw fa-archive"></i>
          <span>Pasien</span></a>
      </li>
       <!-- Nav Item - Dashboard -->
      
        <!-- Nav Item - Dashboard -->
      
        <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('penjualan'); ?>">
          <i class="fas fa-fw fa-archive"></i>
          <span>Penjualan</span></a>
      </li>
      <?php } ?>

   
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

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
