<html>
<body>
<div class="col-sm-8 text-left">
<h1 align="center">File Upload Form</h1>
<?php if (isset($error)) : ?>
<?php echo $error;?>
<?php endif ; ?>
<?php echo form_open_multipart('fileupload/upload');?>
<input type="file" name="userfile" size="20" /><br />
<input type="submit" value="Upload File!" />
</form>
<?php if (isset($success)) : ?>
<h2>Success</h2>
<p>The file was successfully uploaded, here's some
information about the file:</p>
<ul>
<?php foreach ($upload_data as $key => $value):?>
<li><?php echo $key . " : " . $value ;?></li>
<?php endforeach; ?>
</ul>
<?php endif ; ?>
</div>
</body>
</html>