        <?php 
            list($width, $height) = getimagesize('./upload/' . $work->image);
        ?>
        <div class='work-pic-box' style='width: <?php echo $width ?>px; height: <?php echo $height ?>px; background:url(/upload/<?php echo $work->image ?>) no-repeat; background-size: contain;'></div>
        <br />
        <br />
    <?php foreach($work->ownPhotos as $photo): ?>
        <?php 
            list($width, $height) = getimagesize('./upload/' . $photo->name);
        ?>
        <div class='work-pic-box' style='width: <?php echo $width ?>px; height: <?php echo $height ?>px; background:url(/upload/<?php echo $photo->name ?>) no-repeat; background-size: contain;'></div>
        <br />
        <br />
    <?php endforeach; ?>

<style>
    .work-pic-box{
        max-width: 100%;
        max-height: 600px;
    }
</style>
