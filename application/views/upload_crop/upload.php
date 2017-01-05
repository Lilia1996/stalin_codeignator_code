<div class="col-sm-8 text-left">
<h1>Upload Crop</h1>
<?php if ($error) : ?>
<?php echo $error ; ?>
<?php endif ; ?>

<?php echo form_open_multipart('upload_crop/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

<?php echo form_close() ; ?>
</div>
