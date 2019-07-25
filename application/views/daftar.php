<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('tema/admin/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>
<!-- <body class="bg-gradient-primary" > -->
  <div class="bg-container-primary" align="center" style="background-color: green;">
    <div class="col-lg-3"></div>
    <div class="col-lg-7">

    <div class="card o-hidden border-0 shadow-lg my-3" >
      <div class="card-body p-0" >
        <!-- Nested Row within Card Body -->
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Silahkan Isi Form Registrasi</h1>
              </div>
              <?php echo form_open('registrasi/create'); ?>
              <?php echo validation_errors(); ?>
              <div class="form-group">
                <div class="form-group" align="left">
                  <label>Nama</label>
                  <input type="text" class="form-control form-control-user" id="nama_pasien"  name="nama_pasien" placeholder=" "required="required">
                </div>
              </div>
              <div class="form-group" align="left">
                    <label for="id pasien">Jenis Kelamin</label>
                       <br>
                      <select name="jenis_kelamin" class="form form-control">
                         <option value="L" selected>Laki-laki</option>
                         <option value="P">Perempuan</option>
                      </select>
              </div>
                <div class="form-group" align="left">
                  <label>Email</label>
                  <input type="text" class="form-control form-control-user" id="email_pasien"  name="email_pasien" placeholder=" " required="required">
                </div>
               <div class="form-group" align="left">
                  <label>No.Hp</label>
                  <input type="text" class="form-control form-control-user" id="kontak_pasien"  name="kontak_pasien" placeholder=" " required="required">
                </div>
                <div class="form-group" align="left">
                  <label>Alamat</label>
                  <input type="text" class="form-control form-control-user" id="alamat_pasien"  name="alamat_pasien" placeholder=" " required="required">
                </div>
                <div class="form-group" align="left">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control form-control-user" id="tanggal_lahir"  name="tanggal_lahir" placeholder=" " required="required">
                </div>
                <div class="form-group" align="left">
                    <label for="id pasien">Golongan Darah</label>
                       <br>
                      <select name="golongan_darah" class="form form-control">
                         <option value="A" selected>A</option>
                         <option value="B">B</option>
                         <option value="AB">AB</option>
                         <option value="O">O</option>
                      </select>
                      <br>
                    </div>
                <div class="form-group row" align="left">
                  <div class="col-sm-6">
                    <label>Kata Sandi</label>
                    <input type="text" class="form-control form-control-user" id="password_pasien" name="password_pasien" placeholder=" " required="required">
                  </div>
                  <div class="col-sm-6">
                    <label>Kode Verifikasi</label>
                    <input type="text" class="form-control form-control-user" id="kode_verivikasi" name="kode_verivikasi" placeholder=" " required="required">
                  </div>
                </div>
              </div>
              <button style="background-color: purple; "type="submit"  required="required" class="btn btn-primary btn-user btn-block">Daftar</button>

              <br>

              <a href="<?php echo base_url('index.php/login') ?>">
              Sudah memiliki akun? Kembali ke halaman Login!         
              </a>
          
               
             <?php echo form_close(); ?>


              </div>
            </div>
          </div>
        </div>
          

        </div>

        </body>

        </html>