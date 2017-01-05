function process(){
	
	      // set an on click on the button
	     
	        // get the time if clicked via an ajax get queury
	        // see the code in the controller time.php
	        var url ="quickstart/";
	        $.get(url, function (time) {
	        	var name =$("#myName").val();
	          // update the textarea with the time
	          $("#divMessage").html("My name:" + name);
	        });
	     
	   
}
