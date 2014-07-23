<div class="row">

    <?php foreach($works as $work): ?>
      <div class="col-sm-3 work-box">
        <a href="/<?php echo $work->url ?>" class="">
            <img src='/upload/<?php echo $work->image ?>' />
        </a>
      </div>
    <?php endforeach; ?>

</div>
