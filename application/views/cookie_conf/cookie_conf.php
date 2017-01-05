<html> 
    <head> 
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
        <?php if (isset($display_cookie_conf) && ($display_cookie_conf == TRUE)) : ?> 
            <script type="text/javascript"> 
                $(document).ready(function() { 
                    // User has agreed 
                    $('#agree').click(function(answer){ 
                        $.ajax({ 
                            type: "GET", 
                            url: "http://localhost:8080/stalin_projects/stalin_codeig_blog/cookie_conf/agree", 
                            success: function(data) { 
                                // If they have agreed then remove the cookie-conf-container from their browser 
                                $('#cookie-conf-container').slideUp(500); 
                            }, 
                            error: function(){alert('error in agree response 1');} 
                        }); 
                    }); 

                    // User has disagreed 
                    $('#disagree').click(function(answer) { 
                        $.ajax({ 
                            type: "GET", 
                            url: "http://localhost:8080/stalin_projects/stalin_codeig_blog/cookie_conf/disagree", 
                            success: function(data){ 
                                // They've not approved - we can display an error if we want 
                                $('#response').html(data); 
                            }, 
                            error: function(){alert('error in disagree response 2');} 
                        }); 
                    }); 
                }); 

            </script> 
        <?php endif; ?> 
    </head> 
    <body> 
    <div class="col-sm-8 text-left">
<h1 align="center">CodeIgniter Cookie Conference</h1>
        <?php if (isset($display_cookie_conf) && ($display_cookie_conf == TRUE)) : ?> 
            <span id="cookie-conf-container"> 
                <p>This is a message to the user regarding cookies - obviously replace it with the text appropriate to your site. </p> 
                <span id='agree'>Agree</span> 
                <span id='disagree'>Disagree</span> 
                <div id='response'></div> 
            </span> 
        <?php endif; ?> 
</div>
    </body> 
</html>
