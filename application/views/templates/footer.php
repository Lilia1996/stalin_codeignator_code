 <div class="col-sm-2 sidenav">
 
 <!-- Nav Start -->
 <div class="nav-side-menu">
  
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content1"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content1" class="menu-content collapse out">
                
                

                <li  data-toggle="collapse" data-target="#products_new" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Codeignator Tuts<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products_new">
                    <li class="active"><a href="<?php echo site_url('App_cal/index/'); ?>">App Calendor View</a></li>
                    <li><a href="<?php echo site_url('App_cal_db/index/'); ?>">App Calendor</a></li>
                    <li><a href="<?php echo site_url('Registerdob/index/'); ?>">Find Dob</a></li>
					<li><a href="<?php echo site_url('Fuzzy_date/index/'); ?>">Fuzzy Date</a></li>			
					
                    <li><a href="<?php echo site_url('call_lib/index/'); ?>">Creating Libraryfetching db</a></li>
                    <li><a href="<?php echo site_url('comments/index/'); ?>">Comments Form Captcha</a></li>
                    <li><a href="<?php echo site_url('upload_crop/index/'); ?>">Upload Crop</a></li>
                    
                </ul>
                
                <li data-toggle="collapse" data-target="#db" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Databases Functions<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="db">
                  	<li><a href="<?php echo site_url('multi_database/index/'); ?>">MultiDatabase</a></li>
 					<li><a href="<?php echo site_url('database/index/'); ?>">Active Record</a></li>
 					 <li><a href="<?php echo site_url('Dbrecords/index/'); ?>">DbRecords</a></li>
 					 
 					 
 					<li><a href="<?php echo site_url('csvexport/index/'); ?>">CSVExport</a></li>
					 <li><a href="<?php echo site_url('csvfilewriteexport/index/'); ?>">CSVFileWriteExport</a></li>
					 <li><a href="<?php echo site_url('xmlexport/index/'); ?>">Xml Export</a></li>
                </ul>
                
                 <li data-toggle="collapse" data-target="#security" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Security<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="security">
                  	<li><a href="<?php echo site_url('csrf/index/'); ?>">CSRF</a></li>
 					<li><a href="<?php echo site_url('escape/index/'); ?>">Escape</a></li>
 					<li><a href="<?php echo site_url('with_https/index/'); ?>">HTTPS</a></li>
                </ul>
                 <li data-toggle="collapse" data-target="#ajaxexample" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i>Ajax<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="ajaxexample">
                  	<li><a href="<?php echo site_url('Ajaxexample/index/'); ?>">Ajax Example</a></li>
                    <li><a href="<?php echo site_url('Ajaxexample/postview/'); ?>">Ajax Post Example</a></li>
                    <li><a href="<?php echo site_url('Curl_controller/index/'); ?>">Curl Example</a></li>
                    <li><a href="<?php echo site_url('Third_party_controller/index/'); ?>">ThirdParty Lib</a></li>
                    <li><a href="<?php echo site_url('Encryption_Tutorial/index/'); ?>">Encryption</a></li>
                    <li><a href="<?php echo site_url('Json_into_db/index/'); ?>">Json into Db</a></li>
                    <li><a href="<?php echo site_url('Googlemaps_eg/index/'); ?>">Googlemaps</a></li>
                    <li><a href="<?php echo site_url('Gmap_controller/index/'); ?>">Gmap</a></li>
                </ul>
                
                
                
                
                 
            </ul>
     </div>
</div>
 
 <!-- Nav End --> 
    
    </div>
  </div>
</div>
<div style="text-align: center">
<footer class="container-fluid" >
<p>copy rights by stalin thomas</p>
</footer>
</div>>

 <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.2.4.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/quickstart.js"); ?>"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/tether.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap_form_helper/js/bootstrap-formhelpers.js"); ?>"></script>
 <script type="text/javascript" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> 
 <script type="text/javascript" src="<?php echo base_url("assets/js/ajax.js"); ?>"></script>
 <link type="text/css" rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>



<?php if(isset($headerjs)) echo $headerjs;?>
<?php if(isset($headermap)) echo $headermap;?>
<?php if(isset($onload)) echo  $onload;?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAujVuc34gbYSScpM71OujRCatOV06PQ8g"></script>

		
</body>
</html>