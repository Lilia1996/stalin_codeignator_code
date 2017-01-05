<html>
<head>
<title> Ajax Exmaples! </title>
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}
</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">

$( document ).ready(function () {
	
	 //$('.dropdown').click(function(){
       //  $('.dropdown.drop').removeClass('drop');
         //$(this).addClass('open');
     //});
	//
	$(".submit").click(function(event) {
		event.preventDefault();
		var user_name = $("input#name").val();
		var password = $("input#pwd").val();
		jQuery.ajax({
		type: "POST",
		url: "<?php echo base_url(); ?>" + "/Ajaxexample/user_data_submit",
		dataType: 'json',
		data: {name: user_name, pwd: password},
		success: function(res) {
		if (res)
		{
			jQuery(".pop").hide();
		// Show Entered Value
		jQuery("div#result").show();
		jQuery("div#value").html(res.username);
		jQuery("div#value_pwd").html(res.pwd);
		jQuery("div.loginmodal-container").hide();
		jQuery(".modal-backdrop").removeClass("modal-backdrop fade in");
		
		}
		}
		});
		});
});
	</script>
	</head>
	<body>


	<div class="col-sm-8 text-left">
		<h2 id="form_head">Codelgniter Ajax Post</h2><br/>
					  
		
		
		
		<a href="#" data-toggle="modal" data-target="#login-modal" class="pop">Ajax Post</a>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Ajax Post</h1><br>
					<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
				  <form method="post">
					<input type="text" name="name" id="name"  placeholder="Username">
					<input type="password" name="pwd" id="pwd" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit submit" value="Login">
				  </form>
					
				 
				</div>
			</div>
			
		  </div>
	<?php

// Display Result Using Ajax
echo "<div id='result' style='display: none'>";
echo "<div id='content_result'>";
echo "<h3 id='result_id'>You have submitted these values</h3><br/><hr>";
echo "<div id='result_show'>";
echo "<label class='label_output'>Entered Name :<div id='value'> </div></label>";
echo "<br>";
echo "<br>";
echo "<label class='label_output'>Entered Password :<div id='value_pwd'> </div></label>";
echo "</div>";
echo "</div>";
echo "</div>";
?>
	
	  
	
	</div>
	


	</body>
	</html>
	
