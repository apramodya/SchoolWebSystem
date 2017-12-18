<html>
<head>
    <meta charset="utf-8">
    <title>Student</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<div>
    <!--    bootstrap-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">

    <!-- The styles -->
    <link href="<?php echo base_url() ?>assets/charisma/css/charisma-app.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/charisma/bower_components/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

</div>

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

            <a href="<?php echo site_url('Home/'); ?>" class="navbar-brand">Home</a>
        </div>

        <?php $sid = $this->session->userdata('username') ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right mr-auto mt-2 mt-lg-0">
                <?php if ($this->session->userdata('logged_in')): ?>
                    <li><a class="btn  " href="<?php echo site_url('student/profile/'.$sid); ?>">Profile</a></li>
                    <li><a class="btn  " href="<?php echo site_url('news/feed'); ?>">News Feed</a></li>
                    <li><a class="btn  " href="<?php echo site_url('logout'); ?>">Logout</a></li>
                <?php else: ?>
                    <li><a class="btn  " href="<?php echo site_url('login'); ?>">Login</a></li>
                <?php endif; ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container">
    <!-- flash messages -->

    <!--    login failed-->
    <?php if ($this->session->flashdata('login_failed')): ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <p><?php echo $this->session->flashdata('login_failed'); ?></p>
        </div>
    <?php endif; ?>
    <!--    login success-->
    <?php if ($this->session->flashdata('user_logged_in')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <p><?php echo $this->session->flashdata('user_logged_in'); ?></p>
        </div>
    <?php endif; ?>
    <!--    teacher registration success-->
    <?php if ($this->session->flashdata('teacher_registration_success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <p><?php echo $this->session->flashdata('teacher_registration_success'); ?></p>
        </div>
    <?php endif; ?>
    <!--    teacher registration failed-->
    <?php if ($this->session->flashdata('teacher_registration_failed')): ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <p><?php echo $this->session->flashdata('teacher_registration_failed'); ?></p>
        </div>
    <?php endif; ?>
    <!--    student registration success-->
    <?php if ($this->session->flashdata('student_registration_success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <p><?php echo $this->session->flashdata('student_registration_success'); ?></p>
        </div>
    <?php endif; ?>
    <!--    student registration failed-->
    <?php if ($this->session->flashdata('student_registration_failed')): ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <p><?php echo $this->session->flashdata('student_registration_failed'); ?></p>
        </div>
    <?php endif; ?>

</div>

