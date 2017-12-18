<div>
    <h2 class="text-center">Edit Teacher</h2>
    <br>
    <hr>
    <br>
</div>

<div class="container">
    <div class="pull-right">
        <a class="btn btn-default" href="<?php echo site_url('admin/panel'); ?>">Back</a>
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
    <?php  $sid = $teacher['nid'];?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php echo form_open_multipart('teacher/update/'.$sid); ?>
            <h5>Teacher's Details</h5>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="first_name" disabled value="<?= $teacher['first_name'];?>">
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
                    <input type="text" class="form-control" name="last_name" value="<?= $teacher['last_name'];?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" value="<?= $teacher['dob'];?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Email</label>
                    <input type="date" class="form-control" name="email" value="<?= $teacher['email'];?>" >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Home Address</label>
                    <textarea name="home_address" class="form-control" rows="3" required ></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Current Address</label>
                    <textarea name="current_address" class="form-control" rows="3" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Date Entered</label>
                    <input type="date" class="form-control" name="date_entered" value="<?= $teacher['date_entered'];?>" disabled>
                </div>
            </div>


            <hr>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
                <div class="col-md-6">
                    <button type="reset" class="btn btn-primary btn-block">Reset</button>
                </div>
            </div>
            <?php echo form_close(); ?>
            <br><br>
        </div>
    </div>
</div>


<script type="text/javascript">
    // $('#error_model').modal('show');
</script>
