<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />

<title>CodeIgniter View Example</title>

</head>
<body>
<div class="container">
  <h2>Vertical (basic) Form</h2>
<?php echo  form_open('email/send', 'class="email" id="myform"');?>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.2.4.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/tether.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>