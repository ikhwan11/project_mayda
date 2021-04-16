<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $page; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/home') ?>/img/favicon.png" rel="icon">
  <link href="<?php echo base_url('assets/home') ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/home') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/home') ?>/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/home') ?>/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/home') ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/home') ?>/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/home') ?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/home') ?>/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/home') ?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.2.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="<?php echo base_url('/home/') ?>"><span>SEKOLAH Clarissa</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li <?php if ($page == "Home") echo "class='active'"; ?>><a href="<?php echo base_url('/home/') ?>">Home</a></li>
          <li><a href="#">Tentang kami</a></li>
          <li <?php if ($page == "Pendaftaran") echo "class='active'"; ?>><a href="<?php echo base_url('/home/form_pendaftaran/') ?>">Pendaftaran</a></li>
          <li <?php if ($page == "login") echo "class='active'"; ?>><a href="<?php echo base_url('auth/login') ?>">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->