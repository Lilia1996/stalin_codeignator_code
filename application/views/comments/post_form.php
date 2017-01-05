<div class="col-sm-8 text-left">
<h1 align="center">Comments Form</h1>
<div class="col-md-4 col-md-offset-4 well">
<?php echo form_open() ; ?>
	<?php echo validation_errors() ; ?>
	<?php if (isset($errors)) { echo $errors ; }  ?>
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text"   name="name" class="form-control" id="usr" value="<?php echo set_value('name') ; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" name="email"  class="form-control" id="pwd" value="<?php echo set_value('email') ; ?>">
    </div>
     <div class="form-group">
  		<label for="comment">Message:</label>
  		<textarea name="message"  class="form-control" rows="5" id="comment"><?php echo set_value('message') ; ?></textarea>
	</div>
	<div class="form-group">
      <label for="captcha">Please enter the string you see below</label>
      <input type="text"   name="captcha" class="form-control" id="captcha" value="">
      
    </div>
    <div class="form-group">
     
      <?php echo $img ; ?>
    </div>
    
    
     <div class="form-group">
    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit" />
    </div>
    
 <?php echo form_close() ; ?>
</div>
</div>


