<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Students Example</title>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
</head>
<body>
<div style="margin-left:100px">
<a href="<?php echo base_url(); ?>index.php/stud/add_view">Add</a>
 <table class="table " border="1">
<?php
$i=1;
echo "<thead class='thead-inverse'>";
echo "<tr>";
echo "<th>Sr#</td>";
echo "<th>Roll No.</td>";
echo "<th>Name</td>";
echo "<th>Edit</td>";
echo "<th>Delete</td>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach($records as $r){
	echo "<tr>";
	echo "<td>".$i++."</td>";
	echo "<td>".$r->roll_no."</td>";
	echo "<td>".$r->name."</td>";echo "<td><a href='".base_url()."index.php/stud/edit/".$r->roll_no."'>Edit</a></td>";
echo "<td><a href='".base_url()."index.php/stud/delete/".$r->roll_no."'>Delete</a></td>";
echo "<tr>";
}
?>
<tbody>
</table>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.2.4.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/tether.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>