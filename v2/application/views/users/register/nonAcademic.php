<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
</head>
<body>

<h2 class="text-center">
    <?php echo $title; ?>
</h2>
<hr>

<br>
<div class="pull-right">
    <a class="btn btn-default" href="<?php echo site_url('users/register'); ?>">Back</a>
</div>
<?php echo validation_errors(); ?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php echo form_open_multipart('users/registerNonacademic'); ?>
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
                <input type="text" class="form-control" name="nid" placeholder="NIC" required>
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
                <textarea name="home_address" class="form-control" rows="3" placeholder="Home Address"
                          required></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="">Current Address</label>
                <textarea name="current_address" class="form-control" rows="3" placeholder="Current Address"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label for="">Position</label>
                <select name="position" class="form-control">
                    <?php foreach ($positions as $p): ?>
                        <option value="<?php echo $p['position_id'] ?>"><?php echo $p['position'] ?></option>
                    <?php endforeach; ?>
                </select>
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
