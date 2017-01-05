<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Students Example</title>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
<style>
 .bs-example{
    	margin: 20px;
    }
	/* Fix alignment issue of label on extra small devices in Bootstrap 3.2 */
    .form-horizontal .control-label{
        padding-top: 7px;
    }
</style>
</head>
<body>
<div class="bs-example">
<?php
$attributes = array("class" => "form-horizontal");
echo form_open('Stud_controller/add_student',$attributes);

?>
<div class="form-group">
<?php 
$attributes = array("class" => "control-label col-xs-2");

echo form_label('Roll No.','',$attributes);
echo form_input(array('id'=>'roll_no','name'=>'roll_no'));?>
</div>


<div class="form-group">
<?php
$attributes = array("class" => "control-label col-xs-2");
echo form_label('Name','',$attributes);
echo form_input(array('id'=>'name','name'=>'name'))?>
</div>
 <div class="col-xs-10">
<?php echo form_submit(array('id'=>'submit','value'=>'Add'));
echo "</div>";
echo form_close();
?>
</form>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.2.4.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/tether.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>