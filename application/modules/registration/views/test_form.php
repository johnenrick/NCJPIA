<form  action="<?=  api_url("C_registration/do_upload_images")?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <input type="file"  name="images[]">
    <input type="file"  name="images[]">
    <button type="submit">Upload</button>
</form>