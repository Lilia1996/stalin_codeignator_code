<div class="col-sm-8 text-left">
<h1 align="center">Right</h1>
<?php foreach ($article_list->result() as $list_row) : ?>
<?php echo anchor('#', $list_row->article_title) ;
?><br />
<?php endforeach ; ?>
</div>