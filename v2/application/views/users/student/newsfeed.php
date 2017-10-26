<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 10/24/17
 * Time: 4:01 PM
 */
?>
<h2 class="text-center">News feed</h2>

<div class="container-fluid">
    <?php foreach ($news as $n): ?>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="container-fluid jumbotron">
                    <span style="font-size: large;"><?php echo $n['title']; ?></span><br>
                    <span style="font-size: small; font-style: italic"><?php echo "Posted by ".$n['posted_by']." on ".$n['timestamp']; ?></span>
                    <div class="row">
                        <div class="col-md-9">
                            <p class="para"><?php echo $n['news']; ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>