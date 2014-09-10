        <?php 
            list($width, $height) = getimagesize('./upload/' . $single->photo);
        ?>
        <div class='work-pic-box' style='width: <?php echo $width ?>px; height: <?php echo $height ?>px; background:url(/upload/<?php echo $single->photo ?>) no-repeat; background-size: contain;'></div>
        <br />
        <br />

<style>
    .work-pic-box{
        max-width: 100%;
        max-height: 600px;
    }
</style>
