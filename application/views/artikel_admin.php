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
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/logout">Keluar</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">Welcome My Blog :)</h1>
          <h2 class="masthead-subheading mb-0">Martya Almira</h2>
        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header> -->
     <form action="<?php echo base_url(); ?>index.php/welcome/proses_artikel_admin" method="POST">
        <body><br><br><br><br>
          <br>
          <h2>Posting Artikel</h2>
          <br>
   
      <form method="post" action="<?php echo base_url()?>index.php/Welcome/proses_artikel_admin">
         <div class="form-group">
         <label for="nama">Judul artikel</label>
              <input type="text" name="judul_artikel_admin" class="form-control" id="jadwal" aria-describedby="judul_artikel_admin" placeholder="" name="judul_artikel_admin" required="">
              </div>

              <div class="form-group">
              <label for="nama">Artikel</label>
              <input type="text" class="form-control" id="artikel_admin" aria-describedby="artikel_admin" placeholder="" name="artikel_admin" required="">
              </div>

              <div class="form-group">
              
              <input type="submit" class="form-control" id="komen" aria-describedby="komen" placeholder="" name="submit" required="">
              </div>

      </form>
             

     <br>
    <br>
    <br>
    <br>
    
  </body>

</html>
