
<h2 class="text-center"><?php echo $title; ?></h2>
<br>
<hr>
<br>
<div class="row">
    <div class="col-md-4 col-md-offset-4">

        <div class="row">
            <a class="btn btn-primary btn-block" href="<?php echo site_url('users/registerStudent'); ?>">Student</a><br>
        </div>
        <div class="row">
            <a class="btn btn-primary btn-block" href="<?php echo site_url('users/registerTeacher'); ?>">Teacher</a><br>
        </div>
        <div class="row">
            <a class="btn btn-primary btn-block" href="<?php echo site_url('users/registerParent'); ?>">Parent</a><br>
        </div>
        <div class="row">
            <a class="btn btn-primary btn-block" href="<?php echo site_url('users/registerNonacademic'); ?>">Non-Academic</a>
        </div>
    </div>
</div>
