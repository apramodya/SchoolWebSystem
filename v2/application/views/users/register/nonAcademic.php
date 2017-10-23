<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Non Academic</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<h2 style="margin-left: 550px;">
    Register Non Academic
</h2>
<hr>

    <br>
    <div class="pull-right">
        <a class="btn btn-default" href="<?php echo site_url('users/register'); ?>">Back</a>
    </div>
    <?php echo validation_errors(); ?>
    <!--model-->
    <div class="modal fade" id="error_model">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo validation_errors(); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php echo form_open_multipart('users/registerStudent'); ?>
            <h5>Non Academic's Details</h5>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Middle Name</label>
                        <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">NIC</label>
                    <input type="text" class="form-control" name="NIC" placeholder="NIC" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" placeholder="Date of Birth" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Home Address</label>
                    <textarea name="home_address" class="form-control" rows="3" placeholder="Home Address" required></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Current Address</label>
                    <textarea name="current_address" class="form-control" rows="3" placeholder="Current Ad"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Position</label>
                    <input type="text" class="form-control" name="Position" placeholder="Position" >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Previous School</label>
                    <input type="text" class="form-control" name="previous_school" placeholder="Previous School">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
            </div>






            <!--register-->
            <!--no username because it is auto generated-->
            <hr>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <div class="col-md-6">
                    <button type="reset" class="btn btn-primary btn-block">Reset</button>
                </div>
            </div>
</form>
<br><br>
</div>
</div>

<?php echo form_close(); ?>
</body>
</html>



<script type="text/javascript">
    // $('#error_model').modal('show');
</script>
