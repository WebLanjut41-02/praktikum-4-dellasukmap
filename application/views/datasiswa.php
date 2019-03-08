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
        <a class="navbar-brand" href="#">Go Smart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/tentang_admin">Tentang Kami</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/artikel_admin">Artikel</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/bantuan_admin">Bantuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/tampildatasiswa">Data Siswa</a>
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

<body>
  <center><h1>Data Siswa</h1></center>
  <!-- <center><?php echo anchor('welcome/tampildatasiswa','Tambah Data'); ?></center> -->
  <table style="margin:20px auto;" border="1">
    <tr>
      <th>Id pendaftar</th>
      <th>Nama</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Alamat</th>
      <th>Asal Sekolah</th>
      <th>Alamat Sekolah</th>
      <th>Jurusan</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
    <?php 
    $id_daftar = 1;
    foreach($daftar as $d){ 
    ?>
    <tr>
      <td><?php echo $id_daftar++ ?></td>
      <td><?php echo $d->nama ?></td>
      <td><?php echo $d->tempat_lahir ?></td>
      <td><?php echo $d->tanggal_lahir ?></td>
      <td><?php echo $d->alamat ?></td>
      <td><?php echo $d->asal_sekolah ?></td>
      <td><?php echo $d->alamat_sekolah ?></td>
      <td><?php echo $d->jurusan ?></td>
      <td><?php echo $d->email ?></td>

      <td>
           
                              <?php echo anchor('welcome/hapusdatasiswa/'.$d->id_daftar,'Hapus'); ?>
      </td>
    </tr>
    <?php } ?>
  </table>
</body>
    