<html>
<head>
<title> CodeIgnator Example Page</title>

</head>
<body>
<div class="col-sm-8 text-left">

<div class="main">
<div id="content">
<h2 id="form_head">Convert CodeIgniter Query to Json & Insert Into Database</h2>
<div id="form_input">
<?php
echo form_open('Json_into_db/data_submitted');
echo form_label('Employee Name' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
$data_name = array(
		'name' => 'emp_name',
		'id' => 'emp_name_id',
		'class' => 'input_box',
		'placeholder' => 'Please Enter Name',
		'required' => 'required'
);
echo form_input($data_name);
echo form_label('Employee Email-ID');
$data_email = array(
		'type' => 'email',
		'name' => 'emp_email',
		'id' => 'e_email_id',
		'class' => 'input_box',
		'placeholder' => 'Please Enter Email',
		'required' => 'required'
);
echo form_input($data_email);
echo form_label('Gender');
$data_gender = array(
		'Male' => 'Male',
		'Female' => 'Female'
);
echo form_dropdown('select', $data_gender, 'Male', 'class="dropdown_box"');
echo form_label('Address');
echo "<div class='textarea_input'>";
$data_textarea = array(
		'name' => 'address',
		'rows' => 5,
		'cols' => 28,
		'placeholder' => 'Address...',
		'required' => 'required'
);
echo form_textarea($data_textarea);
echo "</div>";
?>
</div>
<div id="form_button">
<?php echo form_submit('submit', 'Submit', "class='submit'"); ?>
</div>
<?php echo form_close(); ?>
</div>
</div>
<?php
if (isset($result_msg)) {
echo "<div id='res_msg'>";
 if ($this->session->flashdata('category_success')) { ?>
        <div class="alert alert-success"> <?= $result_msg ?> </div>
    <?php } 
    else{?>
    	<div class="alert alert-success"> <?= $result_msg ?> </div>
    	
    	
   <?php  }
echo "</div>";
}
?>
</div>
</body>
</html>