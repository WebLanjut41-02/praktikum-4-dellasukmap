<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="tf-8">
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
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/tentang">Tentang Kami</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/artikel">Artikel</a>
            </li>

          <!--   <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/produk">Ikuti Bimbel</a>
            </li> -->

             <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/komen">Komentar</a>
            </li>

           <!--  <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/bantuan">Bantuan</a>
            </li> -->

            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/log_in">Masuk</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/register">Daftar</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">Welcome Go Smart</h1>
          <h2 class="masthead-subheading mb-0">Bimbingan Belajar</h2>
        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header>
 -->
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            
          </div>
          <div class="col-lg-6 order-lg-1">
            <br>
    <br>
    <br>
    
            <div class="p-5">
              <h2 class="display-4"><u>Masuk</u></h2>
              <p>

                <form method="POST" action="<?php echo base_url()?>index.php/Welcome/ceklogin"> 

              <div class="form-group">
              <label for="username">Username</label>

              <input type="text" class="form-control" id="nisn" aria-describedby="username" placeholder="Masukkan Username anda" name="username" required="">

<!--               <small id="username" class="form-text text-muted">Username anda</small> -->
              </div>

              <!-- <div class="form-group">
              <label for="email">Email</label>

              <input type="text" class="form-control" id="email" aria-describedby="email" placeholder="Email" name="email">

              <small id="email" class="form-text text-muted">Email anda, wajib di isi</small>
              </div> -->


              <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="Password" placeholder="Masukkan Password Anda " name="password" required=""><br>
              <!-- <small id="nama" class="form-text text-muted"> Nama harus sesuai </small>
              </div> -->


              <!-- <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
              </div> -->
              <button type="submit" class="btn btn-primary" name="submit">Login</button><br><br>
              <p>Tidak Memiliki Akun ?

              <a href="<?php echo base_url();?>index.php/Welcome/register" style="text-decoration: none;">Daftar Akun</a></p>
          </form>
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy;2019 - Bimbel Go Smart</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
