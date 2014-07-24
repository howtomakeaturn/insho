    <img src='/upload/<?php echo $work->image ?>' />
    <br />
    <br />
    <?php foreach($work->ownPhotos as $photo): ?>
        <img src='/upload/<?php echo $photo->name ?>' />    
        <br />
        <br />
    <?php endforeach; ?>
