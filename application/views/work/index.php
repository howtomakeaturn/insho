<div class="row">

    <?php foreach($works as $work): ?>
      <div class="col-sm-3 work-box">
        <a href="/<?php echo $work->url ?>" class="">
            <?php 
                list($width, $height) = getimagesize('./upload/' . $work->image);
            ?>
            <div class='work-pic-box' style='width: <?php echo $width ?>px; height: <?php echo $height ?>px; background:url(/upload/<?php echo $work->image ?>) no-repeat; background-size: contain;'></div>

        </a>
      </div>
    <?php endforeach; ?>

</div>

<style>
    .work-pic-box{
        max-width: 100%;
        max-height: 600px;
    }
</style>
