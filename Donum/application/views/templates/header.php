<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php base_url() ?>assets/css/full-slider.css" rel="stylesheet">
    <link href="<?php base_url() ?>assets/css/shop-homepage.css" rel="stylesheet">
    <link href="<?php base_url() ?>assets/css/agency.min.css" rel="stylesheet">

</head>

<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">
            <img src="<?php echo site_url('') ?>image/logo.jpg" width="65" height="65">
            <a class="navbar-brand white" href="<?php echo base_url(); ?>">DONUM DEI Institute-International School</a>

        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>" class="white">HOME</a></li>

            <li class="dropdown">
                <a href="<?php echo base_url(); ?>about" class="dropdown-toggle white" data-toggle="dropdown"
                   role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('pages/history'); ?>">HISTORY</a></li>
                    <li><a href="<?php echo site_url('pages/anthem'); ?>">SCHOOL ANTHEM</a></li>
                    <li><a href="<?php echo site_url('pages/rules'); ?>">RULES & REGULATIONS</a></li>
                    <li><a href="<?php echo site_url('pages/facilities'); ?>">FACILITIES</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle white" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">THE SCHOOL</a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('pages/pre'); ?>">PRE SCHOOL</a></li>
                    <li><a href="<?php echo site_url('pages/primary'); ?>">PRIMARY SCHOOL</a></li>
                    <li><a href="<?php echo site_url('pages/secondary'); ?>">SECONDARY SCHOOL</a></li>
                    <li><a href="<?php echo site_url('pages/admission'); ?>">NEW ADMISSION</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle white" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">EVENT & GALLERY</a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('pages/calendar'); ?>">EVENT CALENDAR</a></li>
                    <li><a href="<?php echo site_url('posts'); ?>">PREVIOUS EVENTS</a></li>
                    <li><a href="<?php echo site_url('pages/gallery'); ?>">GALLERY</a></li>
                </ul>
            </li>

            <li><a href="<?php echo site_url('pages/contactus'); ?>" class="white">CONTACT US</a></li>
            <?php if ($this->session->userdata('logged_in')): ?>
                <li><a href="<?php echo site_url('login/portal'); ?>" class="white">PORTAL</a></li>
            <?php endif; ?>
            <?php if (!$this->session->userdata('logged_in')): ?>
                <li><a href="<?php echo site_url('login'); ?>" class="white">LOGIN</a></li>
            <?php endif; ?>
            <?php if ($this->session->userdata('logged_in')): ?>
                <li><a href="<?php echo site_url('logout'); ?>" class="white">LOGOUT</a></li>
            <?php endif; ?>

        </ul>
    </div>
</nav>