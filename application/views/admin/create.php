<a href='/admin'>Back</a>
<hr/>
<form action='/admin/inject' method='post' enctype="multipart/form-data">
    <p>連結網址<i>（請使用英文字母、數字、與減號）</i></p>
    <input type='text' name='ol_url' class='form-control' required />
    <p>連結名稱<i>（隨你打）</i></p>
    <input type='text' name='ol_name' class='form-control' required />
    <p>主圖</p>
    <input type="file" name='ol_image' class='form-control' required />
    <p>系列圖</p>
    <input type="file" name='ol_photos[]' class='form-control' multiple required />
    <hr/>
    <p><input type='submit' value='create' /></p>
</form>
