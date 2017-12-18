<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<div>
    <!--    bootstrap-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
</div>
<?php echo validation_errors(); ?>
<br><br>
<div class="container">
    <?php if ($this->session->flashdata('user_logged_out')): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <p><?php echo $this->session->flashdata('user_logged_out'); ?></p>
        </div>
    <?php endif; ?>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="jumbotron">
                <h2 class="text-center">Please Login</h2><br>
                <?php echo form_open('login'); ?>
                <div class="form-group">
                    <select name="type" class="form-control">
                        <option value="1">Admin</option>
                        <option value="2">Student</option>
                        <option value="3">Teacher</option>
                        <option value="4">Parent</option>
                        <option value="5">Non Academic</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required=""
                           autofocus=""/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
                </div>
                <label class="checkbox">
                    <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

</html>