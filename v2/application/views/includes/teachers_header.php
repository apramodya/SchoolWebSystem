<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 10/17/17
 * Time: 1:11 PM
 */
?>

<html>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a href="<?php echo site_url(); ?>" class="navbar-brand">Teacher's Section</a>
        </div>
        <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo site_url('teacher/newsFeed'); ?>/">News Feed</a></li>
                <li><a href="<?php echo site_url('teacher/myClass'); ?>/">My Class</a></li>
                <li><a href="<?php echo site_url('teacher/profile'); ?>/">My Profile</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (!$this->session->userdata('logged_in')): ?>
                    <li><a class="btn" href="<?php echo site_url('users/login'); ?>">Login</a></li>
                <?php endif; ?>
                <?php if ($this->session->userdata('logged_in')): ?>
                <li><a class="btn"><?php echo "Hello, ".$this->session->userdata('name'); ?></a></li>
                <?php endif; ?>
                <?php if ($this->session->userdata('logged_in')): ?>
                    <li><a class="btn  " href="<?php echo site_url('teacher/newsFeed'); ?>">News Feed</a></li>
                    <li><a class="btn  " href="<?php echo site_url('teacher/postNews'); ?>">Post News</a></li>
                <?php endif; ?>
                <?php if ($this->session->userdata('logged_in')): ?>
                    <li><a class="btn" href="<?php echo site_url('users/logout'); ?>">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <!-- flash message -->
    <?php if ($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class = "alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('user_logged_in')): ?>
        <?php echo '<p class = "alert alert-success">' . $this->session->flashdata('user_logged_in') . '</p>'; ?>
    <?php endif; ?>
</div>

