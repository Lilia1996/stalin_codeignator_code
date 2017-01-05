<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

header("location: http://localhost/login/index.php/user_authentication/user_login_process");
}
?>
<head>
<title>Login Form</title>

<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<style>



@import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
	.king{
		padding:50px !important;
	}
}

</style>

</head>
<body>
<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>
<div id="main">
<div id="login">
<h2>Login Form</h2>
<hr/>

<div class="wrapper">
   <?php $attributes = array('class' => 'form-signin', 'id' => 'myform');
      echo form_open('user/user_login_process',$attributes); ?>     
      <h2 class="form-signin-heading">Please login</h2>
	  <?php
	echo "<div class='error_msg'>";
if (isset($error_message)) {
		echo $error_message;
}
echo validation_errors();
echo "</div>";
?>
	<div class="form-group">
		<label for="name">First Name</label>
		<input type="text" class="form-control" name="fname" placeholder="fname" />
	 </div>
	 <div class="form-group">
	 <label for="name">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
     
       <div class="form-group king"> 
	  <input type="submit" value=" Login " name="submit"/>
	  <a href="<?php echo base_url() ?>user/register">To SignUp Click Here</a>
<?php echo form_close(); ?>
    </div>
  </div>


				





</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.2.4.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/tether.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>

