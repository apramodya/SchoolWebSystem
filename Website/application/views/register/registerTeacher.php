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

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('user/registerTeacher'); ?>
<div class="wrapper">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="">National ID</label>
        <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="">Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
    </div>
    <button type="submit" class="btn btn-default"></button>
</div>
<?php echo form_close(); ?>
