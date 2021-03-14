<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?></title>

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
                  <?php echo form_open_multipart('profile/update_data');?>
                <img src="<?php echo base_url(); ?>images/<?= $this->session->userdata('gambar')?>" width="300" class="rounded-circle">
                <input type="file" name="gambar" class="mt-5 btn btn-secondary" src="<?php echo base_url(); ?>images/<?= $this->session->userdata('gambar')?>">
            </div>

            <div class="col">
                <div class="card">
                  <h5 class="card-header"><?php echo $title; ?></h5>
                  <div class="card-body">
                    <table class="table table-user-information">
                             <tbody>
                              <tr>
                                <td>Nama</td>
                                <td><input type="text" name="nama_pasien" value="<?php echo ($this->input->post('nama_pasien') ? $this->input->post('nama_pasien') : $this->session->userdata('nama_pasien')); ?>" class="form-control" /></td>
                              </tr>
                              <tr>
                                <td>Tanggal Lahir</td>
                                <td><input type="date" name="ttl_pasien" value="<?php echo ($this->input->post('ttl_pasien') ? $this->input->post('ttl_pasien') : $this->session->userdata('ttl_pasien')); ?>" class="form-control" /></td>
                              </tr>
                              <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                      <input type="radio" name="jk_pasien" value="L">
                                      <label>L</label>
                                    
                                      <input type="radio" name="jk_pasien" value="P">
                                      <label>P</label>                              
                                </td>
                              </tr>
                              <tr>
                                <td>No. Telp</td>
                                <td><input type="text" name="no_telp" value="<?php echo ($this->input->post('no_telp') ? $this->input->post('no_telp') : $this->session->userdata('no_telp')); ?>" class="form-control" /></td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $this->session->userdata('alamat')); ?>" class="form-control" /></td>
                              </tr>
                              <tr>
                                <td>E-Mail</td>
                                <td><input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $this->session->userdata('email')); ?>" class="form-control" /></td>
                              </tr>
                              <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" class="form-control" placeholder="Masukkan Password" value="<?= md5($this->session->userdata('password'))?>" />
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <div class=" button text-center">
                              <button type="submit" class="btn btn-outline-primary" value="Simpan"><i class="fa fa-save"></i></button>
                          </div>
                    <?php echo form_close(); ?>
                  </div>
                </div>
            </div>
        </div>
    </div>


    <div class="kaki">
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
    </div>


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
