<h2 style="margin-left: 550px;">
    Register Student
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
        <h5>Student's Details</h5>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="First Name">
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
                <input type="text" class="form-control" name="last_name" placeholder="Last Name">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Date of Birth</label>
                <input type="date" class="form-control" name="dob" placeholder="Date of Birth">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Home Address</label>
                <textarea name="home_address" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="">Current Address</label>
                <textarea name="current_address" class="form-control" rows="3"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label for="">Previous School</label>
                <input type="text" class="form-control" name="previous_school" placeholder="Previous School">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="">Entering Class</label>
                <input type="text" class="form-control" name="entering_class" placeholder="Entering Class">
            </div>
            <div class="form-group col-md-9">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
        </div>

        <!--mother-->
        <br>
        <h5>Mother's Details</h5>
        <hr>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Mother's Name</label>
                <input type="text" class="form-control" name="mothers_name" placeholder="Mother's Name">
            </div>
            <div class="form-group col-md-6">
                <label for="">Mother's ID Number</label>
                <input type="text" class="form-control" name="mothers_id" placeholder="Mother's ID ">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Mother's Email</label>
                <input type="email" class="form-control" name="mothers_email" placeholder="Mother's Email">
            </div>
            <div class="form-group col-md-6">
                <label for="">Mother's Job</label>
                <input type="text" class="form-control" name="mothers_job" placeholder="Mother's Job">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Mother's Working Address</label>
                <textarea name="mothers_working_address" class="form-control" rows="3"></textarea>
            </div>
        </div>

        <!--father-->
        <br>
        <h5>Father's Details</h5>
        <hr>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Father's Name</label>
                <input type="text" class="form-control" name="fathers_name" placeholder="Father's Name">
            </div>
            <div class="form-group col-md-6">
                <label for="">Father's ID Number</label>
                <input type="text" class="form-control" name="fathers_id" placeholder="Father's ID ">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Father's Email</label>
                <input type="email" class="form-control" name="fathers_email" placeholder="Father's Email">
            </div>
            <div class="form-group col-md-6">
                <label for="">Father's Job</label>
                <input type="text" class="form-control" name="fathers_job" placeholder="Father's Job">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Father's Working Address</label>
                <textarea name="fathers_working_address" class="form-control" rows="3"></textarea>
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

<script type="text/javascript">
    // $('#error_model').modal('show');
</script>
