<div class="container">
    <h2><?= $title; ?></h2>

    <?php echo validation_errors();?>

    <?php echo form_open_multipart('Home/create');?>


    <div class="form-group">
        <label>Body</label>
        <textarea id="editor1" class="form-control" name="body" placeholder="Add Body">
        </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
</div>