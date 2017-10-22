<br><?php echo $title; ?>
<div class="pull-right">
    <a class="btn btn-default" href="<?php echo site_url('users/register'); ?>">Back</a>
</div>
<br><br><br>
<div class="alert-danger"><?php echo validation_errors(); ?></div>


<?php echo form_open_multipart('users/registerNonAcademic'); ?>
<div class="container">
    <form action="">
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
            <label for="">ID Number</label>
            <input type="text" class="form-control" name="nid" placeholder=" ">
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
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="">Position</label>
            <select name="position" class="form-control">
                <?php foreach ($positions as $p): ?>
                    <option value="<?php echo $p->position_id; ?>"><?php echo $p->position; ?></option>
                <?php endforeach; ?>
            </select>
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

<?php echo form_close(); ?>
