<br><?php echo $title; ?>
<div class="pull-right">
    <a class="btn btn-default" href="<?php echo site_url('register'); ?>">Back</a>
</div>
<br><br><br>
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

<?php echo form_open_multipart('register/student'); ?>
<div class="container">
    <form>
        <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="">Middle Name</label>
            <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">
        </div>
        <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="">DoB</label>
            <input type="text" class="form-control" name="dob" placeholder="DoB">
        </div>
        <div class="form-group">
            <label for="">Home Address</label>
            <textarea name="home_address" class="form-control" cols="30" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="">Current Address</label>
            <textarea name="current_address" class="form-control" cols="30" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="">Previous School</label>
            <input type="text" class="form-control" name="previous_school" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Entering Class</label>
            <input type="text" class="form-control" name="entering_class" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <!--mother-->
        <div class="form-group">
            <label for="">Mother's Name</label>
            <input type="text" class="form-control" name="mothers_name" placeholder=" Name">
        </div>
        <div class="form-group">
            <label for="">Mother's ID Number</label>
            <input type="text" class="form-control" name="mothers_id" placeholder=" ">
        </div>
        <div class="form-group">
            <label for="">Mother's Job</label>
            <input type="text" class="form-control" name="mothers_job" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Mother's Working Address</label>
            <textarea name="mothers_working_address" class="form-control" cols="30" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="">Mother's Email</label>
            <input type="email" class="form-control" name="mothers_email" placeholder="Email">
        </div>
        <!--father-->
        <div class="form-group">
            <label for="">Father's Name</label>
            <input type="text" class="form-control" name="fathers_name" placeholder=" Name">
        </div>
        <div class="form-group">
            <label for="">Father's ID Number</label>
            <input type="text" class="form-control" name="fathers_id" placeholder=" ">
        </div>
        <div class="form-group">
            <label for="">Father's Job</label>
            <input type="text" class="form-control" name="fathers_job" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Father's Working Address</label>
            <textarea name="fathers_working_address" class="form-control" cols="30" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="">Father's Email</label>
            <input type="email" class="form-control" name="fathers_email" placeholder="Email">
        </div>
        <!--register-->
        <!--no user name becaue it is auto generated-->
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

<?php echo form_close(); ?>

<script type="text/javascript">
   // $('#error_model').modal('show');
</script>
