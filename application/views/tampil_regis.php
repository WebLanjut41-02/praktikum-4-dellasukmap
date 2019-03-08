<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url();?>index.php/Welcome/index">Go Smart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/posting">Posting</a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/komen_user">Komentar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/logout">Keluar</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>


    <center>
    <h2>Selamat telah terdaftar menjadi Siswa Bimbingan Belajar Go Smart, konfirmasi email anda</h2>

    <?php  
    if(isset($pesan)){
      echo "Nama sudah ada";
    }
    ?>

    <tr>
      <td>Nama</td>
      <td> : </td>
      <td><?php echo $nama;?></td>
    </tr><br>

     <tr>
      <td>Tempat lahir</td>
      <td> : </td>
      <td><?php echo $tempat_lahir;?></td>
    </tr><br>

     <tr>
      <td>Tanggal lahir</td>
      <td> : </td>
      <td><?php echo $tgl_lahir;?></td>
    </tr><br>

     <tr>
      <td>Alamat</td>
      <td> : </td>
      <td><?php echo $alamat;?></td>
    </tr><br>

     <tr>
      <td>Asal sekolah</td>
      <td> : </td>
      <td><?php echo $asal_sekolah;?></td>
    </tr><br>

     <tr>
      <td>Alamat sekolah</td>
      <td> : </td>
      <td><?php echo $alamat_sekolah;?></td>
    </tr><br>

     <tr>
      <td>Kelas</td>
      <td> : </td>
      <td><?php echo $kelas;?></td>
    </tr><br>

     <tr>
      <td>Email</td>
      <td> : </td>
      <td><?php echo $email;?></td>
    </tr><br>
</center>
