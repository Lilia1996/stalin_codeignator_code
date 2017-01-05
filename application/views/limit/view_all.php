<div class="col-sm-8 text-left">
<h1 align="center">Limit</h1>
<table class="table">
	<tr>
		<td><b>Title</b></td>
		<td><b>Preview</b></td>
		<td><b>Created At</b></td>
	</tr>
	<?php foreach ($query->result() as $row) : ?>
		<tr>
			<td><?php echo $row->title ; ?></td>
			<td><?php echo word_limiter($row->body, 20) ; ?></td>
			<td><?php echo $row->created_at ; ?></td>
		</tr>
	<?php endforeach ; ?>

</table>
</div>