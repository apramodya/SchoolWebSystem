<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 10/17/17
 * Time: 1:11 PM
 */
?>

<html>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Admin Area</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right mr-auto mt-2 mt-lg-0">
                <?php if (!$this->session->userdata('logged_in')): ?>
                    <li><a class="btn" href="<?php echo site_url('users/login'); ?>">Login</a></li>
                <?php endif; ?>
                <?php if (($this->session->userdata('logged_in')) && ($this->session->userdata('type') != '1')): ?>
                    <li><a class="btn"><?php echo "Hello, " . $this->session->userdata('name'); ?></a></li>
                <?php endif; ?>
                <?php if ($this->session->userdata('type') == '1'): ?>
                    <li><a class="btn  " href="<?php echo site_url('users/newsFeed'); ?>">News Feed</a></li>
                    <li><a class="btn  " href="<?php echo site_url('users/postNews'); ?>">Post News</a></li>
                    <li><a class="btn  " href="<?php echo site_url('users/register'); ?>">Register</a></li>
                <?php endif; ?>
                <?php if ($this->session->userdata('type') == '1'): ?>

                <?php endif; ?>
                <?php if ($this->session->userdata('logged_in')): ?>
                    <li><a class="btn" href="<?php echo site_url('users/logout'); ?>">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container">
    <!-- flash message -->
    <?php if ($this->session->flashdata('login_failed')): ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <p><?php echo $this->session->flashdata('login_failed'); ?></p>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('user_logged_in')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <p><?php echo $this->session->flashdata('user_logged_in'); ?></p>
        </div>
    <?php endif; ?>
</div>
<script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
