<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title><?= $page; ?></title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('assets/admin') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin') ?>/css/sticky_footer.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url('assets/admin') ?>/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url('assets/admin') ?>/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin') ?>/css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="<?php echo base_url('assets/admin') ?>/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin') ?>/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo base_url('assets/admin') ?>/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin') ?>/css/owl.carousel.css" type="text/css">
    <link href="<?php echo base_url('assets/admin') ?>/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin') ?>/css/fullcalendar.css">
    <link href="<?php echo base_url('assets/admin') ?>/css/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin') ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin') ?>/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin') ?>/css/xcharts.min.css" rel=" stylesheet">
    <link href="<?php echo base_url('assets/admin') ?>/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
    <!-- container section start -->
    <section id="container" class="">


        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="<?= base_url('/admin/'); ?>" class="logo">Sistem informasi <span class="lite">Kelola data calon siswa</span></a>
            <!--logo end-->


            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">


                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <span class="username"><?php echo $this->session->userdata('nama') ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li>
                                <a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-arrow-left"></i> Log Out</a>
                            </li>

                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </header>
        <!--header end-->