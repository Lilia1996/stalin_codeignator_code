<html>
<head>
<title> CodeIgnator Example Page</title>
<link href="<?php echo base_url("assets/css/nav.css"); ?>" rel="stylesheet" type="text/css" />

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="<?php echo base_url("assets/js/bootstrap_form_helper/css/bootstrap-formhelpers.css"); ?>" rel="stylesheet" type="text/css" />

<style>

/* Remove the navbar's default margin-bottom and rounded borders */
.navbar {
	margin-bottom: 0;
	border-radius: 0;
}

/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
.row.content {height: 450px}

/* Set gray background color and 100% height */
.sidenav {
	padding-top: 20px;
	background-color: #f1f1f1;
	height: 100%;
}

/* Set black background color, white text and some padding */
footer {
	background-color: #555;
	color: white;
	padding: 15px;
}

/* On small screens, set height to 'auto' for sidenav and grid */
@media screen and (max-width: 767px) {
	.sidenav {
		height: auto;
		padding: 15px;
	}
	.row.content {height:auto;}
}
</style>
<script type="text/javascript" src="<?php echo base_url("assets/js/google_chart.js"); ?>"></script>
<script type="text/javascript">
google.load("visualization", "1.1", {packages: ["bar"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
	var data = google.visualization.arrayToDataTable([
			['Year', 'Sales', 'Expenses', 'Profit'],
			<?php
			foreach (@$chart_data as $data) {
				echo '[' . @$data->performance_year . ',' . @$data->performance_sales . ',' . @$data->performance_expense . ',' . @$data->performance_profit . '],';
			}
			?>
                ]);

                var options = {
                    chart: {
                        title: 'Company Performance',
                        subtitle: 'Sales, Expenses, and Profit: <?php echo @$min_year.'-'.@$max_year;?>',
                    }
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                chart.draw(data, options);
            }




 </script>
</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapsescs" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Logo</a>
</div>
<div class="collapse123 navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li class="active"><a href="<?php echo site_url('news/index/'); ?>">Home</a></li>

<li><a href="#">Contact</a></li>

<li><a href="<?php echo site_url('cart/index/'); ?>">Shopping Cart</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<?php if ($this->session->userdata('login')){ ?>

<li><p class="navbar-text">Hello <?php echo $this->session->userdata('uname'); ?></p></li>
				<li><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>
				<?php } else { ?>
<li><a href="<?php echo site_url('login'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
<li><a href="<?php echo site_url('signup'); ?>"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
<?php } ?>
</ul>
</div>
</div>
</nav>

<div class="container-fluid text-center">
<div class="row content">
<div class="col-sm-2 sidenav">
<!-- Nav Start -->
 <div class="nav-side-menu">
    <div class="brand">Codeignator stalin blog</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="<?php echo site_url('news/index/'); ?>">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>
                <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> Profile
                  </a>
                  </li>
   <!-- Blue Print Start -->
                 <li  data-toggle="collapse" data-target="#blueprints" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Ci Blue Prints<span class="arrow"></span></a>
      </li>
	  <ul class="sub-menu collapse" id="blueprints">
                <li class="active"><a href="<?php echo site_url('blueprints/create/index'); ?>">Url Create</a></li>
                    <li><a href="<?php echo site_url('blueprints/go/index'); ?>">Url go</a></li>
                     <li><a href="<?php echo site_url('blueprints/admin/index/'); ?>">Admin</a></li>
                    <li><a href="<?php echo site_url('blueprints/comments/index/'); ?>">BP create</a></li>
                    <li><a href="<?php echo site_url('limit/index/'); ?>">5</a></li>
					<li><a href="<?php echo site_url('articles/index/'); ?>">6</a></li>			
					
                    <li><a href="<?php echo site_url('file/index/'); ?>">7</a></li>
                    <li><a href="<?php echo site_url('zip/index/'); ?>">8</a></li>
                    <li><a href="<?php echo site_url('fileupload/index/'); ?>">9</a></li>
                    <li><a href="<?php echo site_url('Lang_controller/index/'); ?>">10</a></li>
                    <li><a href="<?php echo site_url('cookie_conf/index/'); ?>">11</a></li>
      </ul>
      <!-- Blue Print End -->

                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Codeignator Tuts<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                <li class="active"><a href="<?php echo site_url('table/index/'); ?>">Html Table From DB</a></li>
                    <li><a href="<?php echo site_url('table/withoutDb/'); ?>">HTML table Without DB</a></li>
                     <li><a href="<?php echo site_url('Welcomepage/index/'); ?>">Shopping Cart</a></li>
                    
                    
                    
                    
                    <li><a href="<?php echo site_url('censor/index/'); ?>">Censor</a></li>
                    <li><a href="<?php echo site_url('limit/index/'); ?>">Limit</a></li>
					<li><a href="<?php echo site_url('articles/index/'); ?>">Articles</a></li>			
					
                    <li><a href="<?php echo site_url('file/index/'); ?>">View Read</a></li>
                    <li><a href="<?php echo site_url('zip/index/'); ?>">Zip Creation</a></li>
                    <li><a href="<?php echo site_url('fileupload/index/'); ?>">File Upload</a></li>
                    <li><a href="<?php echo site_url('Lang_controller/index/'); ?>">Language||International</a></li>
                    <li><a href="<?php echo site_url('cookie_conf/index/'); ?>">Cookie Conference</a></li>
                </ul>
                
                
                
                 <li  data-toggle="collapse" data-target="#pgm_with_mvc" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i>Program With Mvc<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="pgm_with_mvc">
                <li class="active"><a href="<?php echo site_url('mvc/Contact/index/'); ?>">Contact Form</a></li>
                    <li><a href="<?php echo site_url('mvc/Example/more/a/b/c'); ?>">Example</a></li>
                     <li><a href="<?php echo site_url('mvc/Flickr_recent/index/'); ?>">Flickr</a></li>
                    
                    
                    
                    
                    <li><a href="<?php echo site_url('ci_professional/welcome/'); ?>">Welcome Page</a></li>
                    <li><a href="<?php echo site_url('start/hello/stalin'); ?>">start</a></li>
					
					<li><a href="<?php echo site_url('start/index/'); ?>">Basicview</a></li>			
					
                    <li><a href="<?php echo site_url('startup/index'); ?>">Start up</a></li>
                    <li><a href="<?php echo site_url('Chartcontroller/index/'); ?>">Google Chart</a></li>
                    
                    
                <li><a href="<?php echo site_url('Datatablecontroller/index/'); ?>">Data Table Crud</a></li>  
                    <li><a href="<?php echo site_url('Lang_controller/index/'); ?>">Language||International</a></li>
                    <li><a href="<?php echo site_url('cookie_conf/index/'); ?>">Cookie Conference</a></li>
                </ul>
                
                
                
                
                
                
                 
            </ul>
     </div>
</div>
 
 <!-- Nav End -->
</div>