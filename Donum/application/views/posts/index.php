<div class="container">
    <h2><?=$title?></h2>
    <?php foreach ($event_gallery as $post) : ?>
        <h3><?php echo $post['title']; ?></h3>
        <div class="row">
            <div class="col-md-3">
                <img class="post-thumb img-thumbnail" src="<?php echo site_url();?>/image/posts/<?php echo $post['post_image'];?>">
            </div>
            <div class="col-md-9">
                <small class="post_date">Posted on: <?php echo $post['created_time']; ?></small><br><br>
                <?php echo word_limiter($post['body'],100); ?>
                <br><br>
                <p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
            </div>
        </div>
    <?php endforeach; ?>

</div>