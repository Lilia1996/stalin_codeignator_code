<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
		<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $title; ?></title>

</head>
<body>

 	 <?php $this->load->view('templates/header');?>
 <div class="col-sm-8 text-left">
  	<h1 align="center"><?php echo $heading;?></h1>
 		 <?php $this->load->view($main);?>
 </div>	 
    <?php $this->load->view('templates/footer');?>


</body>
</html>
