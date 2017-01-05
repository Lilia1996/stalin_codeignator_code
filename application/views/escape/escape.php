<p>Please enter your first and last names.</p>
<?php echo form_open('escape/escape_post') ; ?>
<p>First Name</p>
<?php echo form_input(array('name' => 'firstname',
'id' => 'firstname', 'value' => set_value(
'firstname', ''))); ?>
<p>Last Name</p>
<?php echo form_input(array('name' => 'lastname',
'id' => 'lastname', 'value' => set_value(
'lastname', ''))); ?>
<br />
<?php echo form_submit('submit', 'Submit'); ?>
<?php echo form_close(); ?>