
    <div class="col-sm-8 text-left"> 
      <h1>CodeIgnator tutorial Example</h1>
      <p><?=$title?></p>
      <?php 
     foreach ($results as $news_item): ?>

        <h3><?php echo ucfirst($news_item->title); ?></h3>
        <div class="main">
                <?php echo $news_item->text; ?>
        </div>
        <p><a href="<?php echo site_url('cust/newsview/'.$news_item->slug); ?>">View article</a></p>

<?php endforeach; ?>

<p><?php echo $links; ?></p>
    </div>
   