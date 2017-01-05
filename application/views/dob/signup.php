<div class="col-sm-8 text-left">



<h1 align="center">Sign up Form For Dob</h1>

<div class="bfh-datepicker"  data-format="y-m-d" data-date="today">
</div>

<button onclick="$('#countries1').bfhcountries({country: 'US'})" class="btn">Load Countries</button>
<br><br>
<select id="countries1" class="form-control"></select>

<?php echo form_open() ; ?>
<?php echo validation_errors() ; ?>
Day <input type="text" name="day" size="5" value="<?php echo
set_value('day') ; ?>"/>
Month <input type="text" name="month" size="5" value="<?php echo
set_value('month') ; ?>"/>
Year <input type="text" name="year" size="5" value="<?php echo
set_value('year') ; ?>"/>
<input type="submit" value="go" />
<?php echo form_close() ; ?>
</div>