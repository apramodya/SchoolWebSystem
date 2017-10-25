<div class="pull-right">
    <a class="btn btn-default" href="<?php echo site_url('users/index'); ?>">Back</a>
</div>
<h2 class="text-center">Post News</h2>
<br>
<hr>
<br>

<br>

<?php echo validation_errors(); ?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php echo form_open('teacher/postNews'); ?>

        <div class="row">
            <div class="form-group ">
                <label for="">Type</label>
                <select name="type" class="form-control">
                    <option value="1">Teacher</option>
                    <option value="2">Student</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group ">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group ">
                <label for="">News</label>
                <textarea name="news" class="form-control" rows="5" required></textarea>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary btn-block">Post</button>
            </div>
            <div class="col-md-6">
                <button type="reset" class="btn btn-primary btn-block">Reset</button>
            </div>
        </div>
        </form>
    </div>
</div>


