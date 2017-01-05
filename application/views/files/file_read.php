<div class="col-sm-8 text-left">
<h1 align="center">Reading File</h1>
<?php
$myfile = fopen($filename, "r") or die("Unable to open file!");
echo fread($myfile,filesize($filename));
fclose($myfile);
?>
<div style="">
 			 <a href="<?php echo site_url('file/index/'); ?>" class="btn btn-success">Back</a></p>
 </div>
</div>