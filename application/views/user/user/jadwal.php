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
          
            
        <form class="form-inline my-2 my-lg-0" action="<?= base_url()?>jadwal" method="post">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari Dokter" name="keyword" aria-label="Search" id="keyword">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
          </form>
        &ensp;
        
             <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
    

    <div class="container mt-5" style="margin-bottom: 10rem;">
        <div class="row">
            

            <div class="col">
                <div class="card">
                  <h5 class="card-header">JADWAL DOKTER</h5>
                  <div class="content table-responsive table-full-width">
						<table id="tabel" class="table table-striped">

							<thead>
								<tr>
									<th>No.</th>
                  <th>Nama Dokter</th>
                  <th>Spesialis</th>
									<th>Hari</th>
									<th>Jam</th>
								</tr>
							</thead>
							<tbody>
								<?php
                
                                        $no=1;
                                    ?>
								<?php foreach($jadwal as $row)
                                    {
                
                                      ?>
								<tr>
									<td>
										<?php echo $no++;?>
									</td>
									<td>
										<?php echo $row->nama_dokter; ?>
                  </td>
                  <td>
										<?php echo $row->spesialis; ?>
									</td>
									<td>
										<?php echo $row->hari; ?>
									</td>
									<td>
										<?php echo $row->jam; ?>
									</td>

								</tr>
								<?php } 
              ?>
							</tbody>
						</table>

					</div>
                </div>
            </div>
        </div>
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
    
    <div class="kaki fixed-bottom">
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
  </body>

</html>
