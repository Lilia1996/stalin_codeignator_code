<html>
<head> 
  <title> Ajax Exmaples! </title>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script type="text/javascript">

  $( document ).ready(function () {
      // set an on click on the button
      $("#button").click(function () {
        // get the time if clicked via an ajax get queury
        // see the code in the controller time.php
        var url ="<?php echo site_url();?>Ajaxexample/getTime/";
        $.get(url, function (time) {
          // update the textarea with the time
          $("#text").html("Time on the server is:" + time);
        });
      });
    });

  </script>
  </head>
  <body onload='process()'>
  
  
  <div class="col-sm-8 text-left">
<h1 align="center">Ajax Example</h1>

   <div class="form-group">
  		<label for="comment">Comment:</label>
  		<textarea class="form-control" rows="5" id="text" readonly></textarea>
	</div>
  
  

  <button id="button">
    Get Time from Server
  </button>
   Server wants to know your name:
<input type="text" id="myName" />
	<div id="divMessage" />
</div>
  
  
</div>
  
  
  </body>
  </html>


