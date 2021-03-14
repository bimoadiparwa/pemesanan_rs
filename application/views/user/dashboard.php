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

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">X-Malang Hospital</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#reservation">Reservation</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact Us</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal" data-target="#login" href="">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url(); ?>assets/img/profile.png" alt="">
        <h1 class="text-uppercase mb-0">X-Malang Hospital</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Care for everyone</h2>
      </div>
    </header>

    <!-- Reservation Grid Section -->
    <div class="reservation mb-3">
      <section id="reservation">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2>RESERVATION</h2><br>
              <img src="<?php echo base_url(); ?>assets/img/hr.png"><br><br>
              <h4 class="section-subheading text-muted">Pilih poliklinik</h4>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-sm-4 col-6 poliklinik-item">
              <a class="poliklinik-link" data-toggle="modal" href="<?php echo base_url('user/pemesanan/');?>">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/contoh.png" alt="" width="80%">
              </a>
              <div class="poliklinik-caption text-center">
                <h4>Anak</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <div class="col-sm-4 col-6 poliklinik-item">
              <a class="poliklinik-link" data-toggle="modal" href="#poliklinikModal2">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/contoh.png" alt="" width="80%">
              </a>
              <div class="poliklinik-caption text-center">
                <h4>Bedah</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <div class="col-sm-4 col-6 poliklinik-item">
              <a class="poliklinik-link" data-toggle="modal" href="#poliklinikModal3">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/contoh.png" alt="" width="80%">
              </a>
              <div class="poliklinik-caption text-center">
                <h4>Gigi</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <div class="col-sm-4 col-6 poliklinik-item">
              <a class="poliklinik-link" data-toggle="modal" href="#poliklinikModal4">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/contoh.png" alt="" width="80%">
              </a>
              <div class="poliklinik-caption text-center">
                <h4>Jantung</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <div class="col-sm-4 col-6 poliklinik-item">
              <a class="poliklinik-link" data-toggle="modal" href="#poliklinikModal5">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/contoh.png" alt="" width="80%">
              </a>
              <div class="poliklinik-caption text-center">
                <h4>Kulit</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <div class="col-sm-4 col-6 poliklinik-item">
              <a class="poliklinik-link" data-toggle="modal" href="#poliklinikModal6">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/contoh.png" alt="" width="80%">
              </a>
              <div class="poliklinik-caption text-center">
                <h4>Mata</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/1.jpg" alt="First slide" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/2.jpg" alt="Second slide" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/3.jpg" alt="Third slide" width="1100" height="500">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
 
    <div class="container" text-center>
      <div class="services pt-5" id="services">
       <div class="row mb-5">
         <div class="col">
           <img src="<?php echo base_url(); ?>assets/img/services.png" width="100%">
         </div>
       </div>
      </div>
    </div>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">PT Kelompok 5 IMK mendirikan RS X - Malang - Bekasi pada tahun 2018 sebagai rumah sakit pertamanya. Untuk menjangkau masyarakat yang lebih luas di Bekasi dan sekitarnya. <br><br>

            Semua rumah sakit X-Malang menerapkan pendekatan yang selalu berfokus pada pasien, baik dalam layanan maupun fasilitas kesehatan. Hal ini tak lain bertujuan untuk memberikan layanan yang lebih baik dengan senantiasa memegang prinsip Good Corporate Governance dan Good Clinical Governance.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">tempat visi misi</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>CONTACT US</h2><br>
            <img src="<?php echo base_url(); ?>assets/img/hr.png"><br><br>
          </div>
        </div>
      
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card text-white bg-primary mb-3">
              <div class="card-body text-center">
                <h5 class="card-title">Contact Us</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>

            <ul class="list-group mb-5">
              <li class="list-group-item"><h2>Location</h2></li>
              <li class="list-group-item">Office Center</li>
              <li class="list-group-item">Jl. KH. Noer Ali, Kalimalang, Bekasi Kota Bekasi 17147</li>
              <li class="list-group-item">Jawa Barat, Indonesia</li>
            </ul>
          </div> 
        
          <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Sent Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="poliklinikModal1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poliklinik Anak</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="doctor">List Doctor</label>
            <select class="form-control">
              <option>-- Choos Doctor --</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <label>Hari dan Waktu Praktek</label>
            <div class="row">
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Day --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Time --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <label for="doctor">Tanggal</label>
            <select class="form-control">
              <option>-- Choos Date --</option>
              <option>11/04/2018</option>
              <option>12/04/2018</option>
              <option>13/04/2018</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking-confirmation-modal">Reserve</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" id="poliklinikModal2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poliklinik Bedah</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="doctor">List Doctor</label>
            <select class="form-control">
              <option>-- Choos Doctor --</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <label>Hari dan Waktu Praktek</label>
            <div class="row">
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Day --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Time --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <label for="doctor">Tanggal</label>
            <select class="form-control">
              <option>-- Choos Date --</option>
              <option>11/04/2018</option>
              <option>12/04/2018</option>
              <option>13/04/2018</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking-confirmation-modal">Reserve</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="poliklinikModal3">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poliklinik Gigi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="doctor">List Doctor</label>
            <select class="form-control">
              <option>-- Choos Doctor --</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <label>Hari dan Waktu Praktek</label>
            <div class="row">
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Day --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Time --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <label for="doctor">Tanggal</label>
            <select class="form-control">
              <option>-- Choos Date --</option>
              <option>11/04/2018</option>
              <option>12/04/2018</option>
              <option>13/04/2018</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking-confirmation-modal">Reserve</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="poliklinikModal4">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poliklinik Jantung</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="doctor">List Doctor</label>
            <select class="form-control">
              <option>-- Choos Doctor --</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <label>Hari dan Waktu Praktek</label>
            <div class="row">
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Day --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Time --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <label for="doctor">Tanggal</label>
            <select class="form-control">
              <option>-- Choos Date --</option>
              <option>11/04/2018</option>
              <option>12/04/2018</option>
              <option>13/04/2018</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking-confirmation-modal">Reserve</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="poliklinikModal5">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poliklinik Kulit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="doctor">List Doctor</label>
            <select class="form-control">
              <option>-- Choos Doctor --</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <label>Hari dan Waktu Praktek</label>
            <div class="row">
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Day --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Time --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <label for="doctor">Tanggal</label>
            <select class="form-control">
              <option>-- Choos Date --</option>
              <option>11/04/2018</option>
              <option>12/04/2018</option>
              <option>13/04/2018</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking-confirmation-modal">Reserve</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="poliklinikModal6">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poliklinik Mata</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="doctor">List Doctor</label>
            <select class="form-control">
              <option>-- Choos Doctor --</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <label>Hari dan Waktu Praktek</label>
            <div class="row">
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Day --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Time --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <label for="doctor">Tanggal</label>
            <select class="form-control">
              <option>-- Choos Date --</option>
              <option>11/04/2018</option>
              <option>12/04/2018</option>
              <option>13/04/2018</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking-confirmation-modal">Reserve</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="booking-confirmation-modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Booking Confirmation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>ID Reservasi : </p>
            <p>Poliklinik   : </p>
            <p>Dokter       : </p>
            <p>ID Pasien    : </p>
            <p>Nama Pasien  : </p>
            <p>Tanggal      : </p>
            <p>Hari         : </p>
            <p>Jam          : </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-primary">Yes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="login">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
              </div>
              <p>Belum pernah sakit? <a href="register.html">Daftar Disini</a></p> 
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
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

  </body>

</html>