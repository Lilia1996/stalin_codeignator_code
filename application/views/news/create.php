<div class="col-sm-8 text-left"> 
    <h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
		<?php 
			echo form_open("news/create");?>
			
			<div class="form-group">
				<label for="title">Title</label>
				<input class="form-control" name="title" placeholder="Enter Title" type="text"  />
				
			</div>
			 <div class="form-group">
  				<label for="text">Comment:</label>
  					<textarea class="form-control" rows="5" id="comment" name="text"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Create news item" />
			</div>
		<?php echo form_close(); ?>
		<?php echo $this->session->flashdata('msg'); ?>
		</div>

</div>
</div>




