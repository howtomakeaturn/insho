<a href='/admin'>Back</a>
<hr/>
<form action='/admin/update' method='post' enctype="multipart/form-data">
    <?php hidden('id', $work->id) ?>
    <p>連結網址<i>（請使用英文字母、數字、與減號）</i></p>
    <input type='text' name='ol_url' value='<?php echo $work->url ?>' class='form-control' required />
    <p>連結名稱<i>（隨你打）</i></p>
    <input type='text' name='ol_name' value='<?php echo $work->name ?>' class='form-control' required />
    <p>主圖</p>
    <input type="file" name='ol_image' class='form-control' />
    <p class='help-block'>圖片名稱請以英文、數字、減號、底線為主。不要有空白或是奇怪的符號。</p>
    <img src='/upload/<?php echo $work->image ?>' />
    <br />
    <br />
    <p>系列圖<i>（可多選。但若要指定順序就一張一張上傳。）</i></p>
    <input type="file" name='ol_photos[]' class='form-control' multiple />
    <p class='help-block'>圖片名稱請以英文、數字、減號、底線為主。不要有空白或是奇怪的符號。</p>
    <hr/>
    <p><input type='submit' value='update' /></p>
</form>

    <?php foreach($work->ownPhotos as $photo): ?>
        <img src='/upload/<?php echo $photo->name ?>' />    
        <br />
        <?php button_to('btn btn-xs btn-danger', '/admin/delete_photo', ['id'=>$photo->id], 'delete') ?>        
        <br />
        <br />
    <?php endforeach; ?>
