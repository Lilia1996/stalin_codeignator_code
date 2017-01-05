<div class="col-sm-8 text-left">
<h1 align="center">Censor</h1>
<?php echo validation_errors() ; ?>
<?php echo form_open('censor/create');?>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Value</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="name" size="20"  placeholder="Enter Value" value="<?php echo set_value('body') ; ?>" />
      </div>
    </div>
	 <div class="form-group">
  		<label for="comment">Comment:</label>
  			<textarea name="body" class="form-control" rows="5" id="comment"><?php echo set_value('body') ; ?></textarea>
	</div>
<?php echo form_submit('submit','Submit!') ; ?>
<?php echo form_close() ; ?>
</div>
