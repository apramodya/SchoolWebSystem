<?php
/**
 * Created by PhpStorm.
 * Register: apramodya
 * Date: 10/6/17
 * Time: 12:46 PM
 */?>
<style>
    .wrapper {
        margin-left: 80px;
        margin-right: 80px;
        margin-top: 80px;
        margin-bottom: 80px;
    }
</style>

<h2 class="wrapper"><?php echo $title; ?></h2>

<div class="wrapper">
    <a class="btn btn-default" href="<?php echo site_url('/register/registerStudent'); ?>">Register Student</a>
    <br>
    <a class="btn btn-default" href="<?php echo site_url('/register/registerTeacher'); ?>">Register Teacher</a>
    <br>
    <a class="btn btn-default" href="<?php echo site_url('/register/registerParent'); ?>">Register Parent</a>
</div>

