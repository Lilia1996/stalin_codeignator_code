<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />

<title>CodeIgniter View Example</title>

</head>
<body>
<div class="container">
<h2>Multimenu </h2>
<?php echo $this->multi_menu->render(); ?> 

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.2.4.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/tether.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>