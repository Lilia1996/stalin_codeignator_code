<div class="col-sm-8 text-left">
<?php 
echo "<table class='table'><tr><th>Name</th><th>Email</th><th>Address</th></tr>";
foreach ($results->result_array() as $row){
	
	echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td></tr>";
	

		
	}
	echo "</table>";
	?>
</div>
<?php 
/*$sql = “select a.name, a.id, b.groupname
from persons a, groups b
where a.group_id = b.id
group by b.groupname, a.name”;
$Q = $this- > db- > query($sql);
foreach ($Q- > result() as $row){
	echo $row- > name;
	echo $row- > id;
	echo $row- > groupname;
}
//here’s the alternative approach, with result_array
foreach ($Q- > result_array() as $row){
	echo $row[‘name’];
	echo $row[‘id’];
	echo $row[‘groupname’];
}




?>