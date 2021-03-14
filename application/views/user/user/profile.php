<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profil</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/freelancer.min.css" rel="stylesheet">

  </head>

  <body>

      <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url(); ?>hal_user">X-Malang Hospital</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $this->session->userdata('nama_pasien'); ?>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo base_url(); ?>profile">Profil</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>history">Histori</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item btn btn-danger" href="<?php echo base_url(); ?>login_pasien/logout">Keluar</a>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container">
        <div class="row mt-5">
            <h1> </h1>
        </div>
        <div class="row mt-5">
            <h1> </h1>
        </div>
    </div>
    

    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <img src="<?php echo base_url(); ?>images/<?= $this->session->userdata('gambar')?>" width="300" class="mt-5 pt-5 rounded-circle">
                <h1 class="display-4"><?php echo $this->session->userdata('nama_pasien'); ?></h1>
                
            </div>

            <div class="col">
                <div class="card">
                  <h5 class="card-header">PROFIL</h5>
                  <div class="card-body">
                    <table class="table table-user-information">
                            <tbody>
                              <tr>
                                <td>Nama</td>
                                <td><?php echo $this->session->userdata('nama_pasien'); ?></td>
                              </tr>
                              <tr>
                                <td>Tanggal Lahir</td>
                                <td><?php echo $this->session->userdata('ttl_pasien'); ?></td>
                              </tr>
                              <tr>
                                <td>Jenis Kelamin</td>
                                <td><?php echo $this->session->userdata('jk_pasien'); ?></td>
                              </tr>
                              <tr>
                                <td>No. Telp</td>
                                <td><?php echo $this->session->userdata('no_telp'); ?></td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td><?php echo $this->session->userdata('alamat'); ?></td>
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td><?php echo $this->session->userdata('email'); ?></td>
                              </tr>
                             
                            </tbody>
                          </table>
                          <div class=" button text-center">  
                              <a href="<?php echo base_url('profile/update/');?>"class='btn btn-outline-info'><i class="">UBAH</i></a>
                         
                          </div>
                    
                  </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="copyright text-white">
      <div class="container">
        <div class="row pt-3 mt-5">
          <div class="col text-center">
            <img src="<?php echo base_url(); ?>assets/img/copyright.svg" width="3%">
            <p>Copyright 2019 PT Kelompok 5 IMK</p>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>assets/js/freelancer.min.js"></script>

  </body>

</html>
