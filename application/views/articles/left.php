<div class="col-sm-8 text-left">
<h1 align="center">Left</h1>
<?php foreach ($main_article->result() as $main_row) : ?>
<h2><?php echo $main_row->article_title ; ?></h2>
<p><?php echo $main_row->article_body ; ?></p>
<?php endforeach ; ?>
</div>
