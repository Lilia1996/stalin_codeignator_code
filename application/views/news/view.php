 <div class="col-sm-8 text-left"> 
      <h1>CodeIgnator tutorial Example</h1>
     
      
    <?php
		echo '<h2>'.ucfirst($news_item['title']).'</h2>';
		echo $news_item['text'];
		?>
		<div style="">
 			 <a href="<?php echo site_url('news/index/'); ?>" class="btn btn-success">Back</a></p>
 		</div>
    </div>
