<div class="container">
    <h2><?php echo $post['title']; ?></h2><br>
    <small class="post_date">Posted on: <?php echo $post['created_time']; ?></small><br><br>
    <img src="<?php echo site_url(); ?>image/posts/<?php echo $post['post_image']; ?>">
    <br><br>
    <div class="post-body" style="text-align: justify">
        <?php echo $post['body']; ?>
    </div>

    <hr>
    <?php if ($this->session->userdata('username') == 'admin'): ?>
        <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'] ?>">Edit</a>
        <?php echo form_open('/posts/delete/' . $post['id']); ?>
        <input type="submit" value="Delete" class="btn btn-danger">
        <?php echo form_close(); ?>
    <?php endif; ?>

    <br>


</div>