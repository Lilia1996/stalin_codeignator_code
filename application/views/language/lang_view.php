<!DOCTYPE html>
<html lang = "en">

<head>
<meta charset = "utf-8">
<title>CodeIgniter Internationalization Example</title>
</head>

<body>
<div class="col-sm-8 text-left">
<h1 align="center">CodeIgniter Internationalization Example</h1>
<?php
echo form_open('/lang');
?>
		<div class="form-group">
      <select class="form-control input-small " id="sel1" name = "language" onchange = "javascript:this.form.submit();">
       <optgroup label="Language">
         <?php
            $lang = array('english'=>"English",'french'=>"French",'german'=>"German");
				
            foreach($lang as $key=>$val) {
               if($key == $language)
               echo "<option value = '".$key."' selected>".$val."</option>";
               else
               echo "<option value = '".$key."'>".$val."</option>";
            }
				
         ?>
			</optgroup>
      </select>
      </div>
		
      <br>
		
      <?php
         form_close();
         echo $msg;
      ?>
		</div>
   </body>
	
</html>