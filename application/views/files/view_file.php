<html>
<head>
<title>Viewing Files</title>
</head>
<body>
<div class="col-sm-8 text-left">
<h1 align="center">View File</h1>
    <ul class="nav nav-pills">
      <li ><?php echo anchor('file/create_file', 'Create File'); ?></li>
      <li><?php echo anchor('file/read_file', 'Read File'); ?></li>
      <li class="active"><?php echo anchor('file/view_all_files', 'View Files'); ?></li>
    </ul>

<table class="table">
<tr>
<td><b>Filename</b></td>
<td><b>Size</b></td>
<td><b>Created</b></td>
<td colspan="3">Actions</td>
</tr>
<?php foreach ($files as $file) : ?>
<tr>
<td>
<?php if (is_dir($file['server_path'])) :
?>
<b><?php echo $file['name']; ?></b>
<?php else : ?>
<?php echo $file['name']; ?>
<?php endif; ?>
</td>
<td>
<?php echo $file['size']; ?>
</td>
<td>
<?php echo date("d/m/Y H:i:s",$file['date']); ?>
</td>
<td>
<?php echo anchor('file/edit_file/' .$file['name'], 'Edit'); ?>&nbsp;
<?php echo anchor('file/delete_file/' .$file['name'], 'Delete'); ?>&nbsp;
<?php echo anchor('file/view_file/' .$file['name'], 'View'); ?>
</td>
</tr>
<?php endforeach; ?>
</table>
</div>
</body>
</html>