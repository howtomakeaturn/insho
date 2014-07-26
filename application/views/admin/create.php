<a href='/admin'>Back</a>
<hr/>
<form action='/admin/inject' method='post' enctype="multipart/form-data">
    <p>連結網址<i>（請使用英文字母、數字、與減號）</i></p>
    <input type='text' name='ol_url' class='form-control' required />
    <p>連結名稱<i>（隨你打）</i></p>
    <input type='text' name='ol_name' class='form-control' required />
    <p>主圖</p>
    <input type="file" name='ol_image' class='form-control' required />
    <p class='help-block'>圖片名稱請以英文、數字、減號、底線為主。不要有空白或是奇怪的符號。</p>
    <hr/>
    <p><input type='submit' value='下一步，上傳系列圖' /></p>
</form>
