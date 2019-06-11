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

<body class="bg-gradient-primary">

  <div class="container" align="center">
    <div class="col-lg-3"></div>
    <div class="col-lg-7">

    <div class="card o-hidden border-0 shadow-lg my-3" >
      <div class="card-body p-0" >
        <!-- Nested Row within Card Body -->
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <?php echo form_open('registrasi/create'); ?>
              <?php echo validation_errors(); ?>
              <div class="form-group">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama_pasien"  name="nama_pasien" placeholder="Nama Pasien">
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
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email_pasien"  name="email_pasien" placeholder="email Pasien">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="kontak_pasien"  name="kontak_pasien" placeholder="Kontak Pasien">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="alamat_pasien"  name="alamat_pasien" placeholder="Alamat Pasien">
                </div>
                <div class="form-group">
                  <input type="date" class="form-control form-control-user" id="tanggal_lahir"  name="tanggal_lahir" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="golongan_darah"  name="golongan_darah" placeholder="Golongan Darah">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="password_pasien" name="password_pasien" placeholder="Kata Sandi">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="kode_verivikasi" name="kode_verivikasi" placeholder="Kode Verivikasi">
                  </div>
                </div>
              </div>
              <button type="submit"   class="btn btn-primary btn-user btn-block">Register Account</button>

          
               
             <?php echo form_close(); ?>


              </div>
            </div>
          </div>
        </div>
          

        </div>

        </body>

        </html>