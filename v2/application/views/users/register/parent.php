<h2 style="margin-left: 550px;">
    Register Parent
</h2>
<hr>
<form class="form-horizontal" style="margin-left: 50px; ">

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
            <?php echo form_open_multipart('users/registerParent'); ?>
            <h5>Parent's Details</h5>
            <hr>
            <div class="row">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Student ID</label>
                        <input type="text" class="form-control" name="student_id" placeholder="Student ID" required>
                    </div>
                </div>
                <!--register-->
                <!--no username because it is auto generated-->
                <hr>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password"
                           required>
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Confirm Password" required>
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
