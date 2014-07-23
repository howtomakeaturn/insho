<a href='/admin'>Back</a>
<hr/>
<form action='/admin/update_contact' method='post'>
    <p>Name</p>
    <input type='text' name='ol_name' value='<?php echo $site->name ?>' class='form-control' required />
    <p>Contact</p>
    <textarea class='form-control' name='ol_contact' rows=20 required><?php echo $site->contact ?></textarea>
    <hr/>
    <p><input type='submit' value='update' /></p>
</form>
