<!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- <button style="background-color: purple; "type="submit" class="btn btn-primary" >
                      Tambah
                 </button> -->
          <!-- Sidebar Toggle (Topbar) -->
          <?php if ($this->session->userdata('level') == 'admin') { ?>
             <a href="<?php echo base_url('index.php/pasien/scan_pasien') ?>">

             <img src="<?php echo base_url('image/QR.png') ?>" width="70" height="70"/>

             </a>
            <?php } ?>


         
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

           
            <!-- Nav Item - User Information -->
            <li class="nav-item">
              <a class="dropdown-item" href="<?php echo site_url('login/logout')?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-800"></i>
                  Logout
                </a>
              
              
            </li>

          </ul>

        </nav>
        <!-- End of Topbar