<a href='/admin/create'>New</a>
<a href='/admin/logout' class='pull-right'>Logout</a>
<hr/>
<p><a href='/contact' target='_blank'>Contact</a></p>
<?php button_to('', '/admin/edit_contact', [], 'edit') ?>
<hr/>
<?php foreach($works as $work): ?>
    <p><a href='/<?php echo $work->url ?>' target='_blank'><?php echo $work->name ?></a></p>
    <?php button_to('', '/admin/edit', ['id'=>$work->id], 'edit') ?>
    <?php button_to('', '/admin/delete', ['id'=>$work->id], 'delete') ?>
    <hr/>
<?php endforeach; ?>

