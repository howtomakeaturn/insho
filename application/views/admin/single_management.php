<a href='/admin'>Back</a>
<hr/>
<form action='/admin/add_single' method='post' enctype="multipart/form-data">
    <p>連結網址<i>（請使用英文字母、數字、與減號）</i></p>
    <input type='text' name='ol_url' class='form-control' required />
    <br />
    <p>首頁單圖<i>（一次上傳一張。）</i></p>
    <input type="file" name='ol_photo' class='form-control' multiple />
    <p class='help-block'>圖片名稱請以英文、數字、減號、底線為主。不要有空白或是奇怪的符號。</p>
    <br/>
    <p><input type='submit' value='upload' /></p>
</form>

<hr />
    <?php foreach($singles as $single): ?>
        <strong><?php echo $single->url ?></strong>
        <br />
        <img src='/upload/<?php echo $single->photo ?>' />    
        <br />
        <?php button_to('btn btn-xs btn-danger', '/admin/delete_single', ['id'=>$single->id], 'delete') ?>        
        <br />
        <hr />
    <?php endforeach; ?>
