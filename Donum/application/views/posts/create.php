<h2 class="text-center"><?= $title; ?></h2>
<br>
<hr>
<br>
<br>
<div class="container">
    <?php echo validation_errors(); ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php echo form_open_multipart('posts/create'); ?>

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="Add Title" required>
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea id="editor1" class="form-control" name="body" placeholder="Add Body">
        </textarea>
            </div>
            <div class="form-group">
                <label>Upload Image</label>
                <input type="file" name="userfile" size="20">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php echo form_close(); ?>
            <br>

        </div>
    </div>