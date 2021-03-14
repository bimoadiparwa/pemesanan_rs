
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Histori</title>

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

    <style>
.kaki {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
}
</style>

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
                <?= $this->session->userdata('nama_pasien'); ?>
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
    

    <div class="container mt-5 mb-5 pb-5 pb-5">
        <div class="row">
            <div class="col">
                <div class="card">
                  <h5 class="card-header">HISTORI</h5>
                  <div class="card-body">
                  	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="pills-belum-tab" data-toggle="pill" href="#pills-belum" role="tab" aria-controls="pills-belum" aria-selected="true" style="border-radius: 32px;">Belum</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-sudah-tab" data-toggle="pill" href="#pills-sudah" role="tab" aria-controls="pills-sudah" aria-selected="false" style="border-radius: 32px;">Sudah</a>
                          </li>
                    </ul>
                    <br>
                        <div class="tab-content" id="pills-tabContent">
                        <!-- Ini TAB BELUM -->
                          <div class="tab-pane show active" id="pills-belum" role="tabpanel" aria-labelledby="pills-belum-tab">
                          	 <?php foreach($pemesanan as $indeks => $row)
                                    {
                                      
                                      if (strtotime($row->tanggal) > strtotime('now')) {
                                     ?>
                          	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse<?=$indeks?>" aria-expanded="false" aria-controls="collapseExample">
			                    <?=$row->tanggal?>
			                     </button>
                             <div class="collapse fade" id="collapse<?=$indeks?>">
                          <div class="card card-body">
                            <table class="table table-user-information">
                            <tbody>
                              <tr>
                                <td>Name</td>
                                <td><?=$row->nama_pasien ?></td>
                              </tr>
                              <tr>
                                <td>Poliklinik</td>
                                <td><?=$row->nama_poli?></td>
                              </tr>
                              <tr>
                                <td>Dokter</td>
                                <td><?=$row->nama_dokter?></td>
                              </tr>
                              <tr>
                                <td>Tanggal</td>
                                <td><?=$row->tanggal?></td>
                              </tr>
                              <tr>
                                <td>Waktu</td>
                                <td><?=$row->waktu?></td>
                              </tr>                             
                            </tbody>
                          </table>
                          </div>
                        </div>

			                 <?php } //end for if
                     } //end for loop ?>
  			              
                          </div>

                          <!-- TAB SUDAH -->
                          <div class="tab-pane fade" id="pills-sudah" role="tabpanel" aria-labelledby="pills-sudah-tab">	
                             <?php foreach($pemesanan as $row)
                                    { 
                                         if (strtotime($row->tanggal) < strtotime('now')) {
                                     ?>
                          	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapshmm<?=$indeks?>" aria-expanded="false" aria-controls="collapseExample">
			                    <?=$row->tanggal?>
			                     </button>
                             <div class="collapse fade" id="collapshmm<?=$indeks?>">
                          <div class="card card-body">
                            <table class="table table-user-information">
                            <tbody>
                              <tr>
                                <td>Name</td>
                                <td><?=$row->nama_pasien ?></td>
                              </tr>
                              <tr>
                                <td>Poliklinik</td>
                                <td><?=$row->nama_poli?></td>
                              </tr>
                              <tr>
                                <td>Dokter</td>
                                <td><?=$row->nama_dokter?></td>
                              </tr>
                              <tr>
                                <td>Tanggal</td>
                                <td><?=$row->tanggal?></td>
                              </tr>
                              <tr>
                                <td>Waktu</td>
                                <td><?=$row->waktu?></td>
                              </tr>  
                             
                            </tbody>
                          </table>
                          </div>
                        </div>

			                 <?php } //end for if
                        ?>
			                <?php } ?>
                  </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="container">
        <div class="row mt-5">
            <h1> </h1>
        </div>
        <div class="row mt-5">
            <h1> </h1>
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
