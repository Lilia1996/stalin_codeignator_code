<div class="col-sm-8 text-left"> 
    <h2><?php echo "DB1:". $db1;?></h2>
<?php
foreach ($records1 as $row1) {
	echo $row1->title . ' ' . $row1->body;
	echo '<br />';
}

?>
    <h2><?php echo "DB2:".$db2;?></h2>
<?php foreach ($records2 as $row2) {
	echo $row2->t1_first_name . ' ' . $row2->t1_last_name;
	echo '<br />';
}
?>
</div>



