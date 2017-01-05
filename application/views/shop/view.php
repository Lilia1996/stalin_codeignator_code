
    <div class="col-sm-8 text-left"> 
      <h1>CodeIgnator tutorial Example</h1>
      <p><a href="<?php echo site_url('cust/newsindex/'); ?>">Home Page</a></p>
      </br>
    <?php
		echo '<h2>'.ucfirst($news_item['title']).'</h2>';
		echo $news_item['text'];
		?>
 
    </div>
    
   
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>


