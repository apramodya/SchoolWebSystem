<br><?php echo $title; ?>
<div class="pull-right">
    <a class="btn btn-default" href="<?php echo site_url('register'); ?>">Back</a>
</div>
<br><br><br>
<?php //echo validation_errors(); ?>

<?php //echo form_open('register/student'); ?>
<div class="container">
    <form action="">
        <div class="form-group">
            <label for="">Student ID</label>
            <input type="text" class="form-control" name="student_id" placeholder="First Name">
        </div>

        <!--register-->
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-default">Register</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>

<?php //echo form_close(); ?>
