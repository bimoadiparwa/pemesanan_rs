<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Dashboard Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/css/dataTables.bootstrap4.min.css');?>" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css"/>
    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet"/>

    <link href="<?php echo base_url('assets/css/paper-dashboard.css');?>" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

    <link href="<?php echo base_url('assets/css/themify-icons.css');?>" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php base_url() ?>" class="simple-text">
                    RS. Xmalang <br>
                    Data Control
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url('/'); ?>">
                        <i class="ti-panel"></i>
                        <p>Lihat Website</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('pasien/'); ?> ">
                        <i class="fa fa-users"></i>
                        <p>Pasien</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('dokter/'); ?>">
                        <i class="fa fa-user-md"></i>
                        <p>Dokter</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('poli/'); ?>">
                        <i class="fa fa-bed"></i>
                        <p>Poli</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('waktu/'); ?>">
                        <i class="fa fa-clock-o"></i>
                        <p>Waktu</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('jadwal/tampil/'); ?>">
                        <i class="fa fa-clock-o"></i>
                        <p>Jadwal</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('pemesanan/'); ?>">
                        <i class="fa fa-list"></i>
                        <p>Reservasi</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('kontak/'); ?>">
                        <i class="fa fa-envelope"></i>
                        <p>Message</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('reservasi/'); ?>">
                        <i class="fa fa-clock-o"></i>
                        <p>History Reservasi</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-settings"></i>
                                <p><?php echo $this->session->userdata('nama'); ?></p>                
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>login_admin/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>