<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />

<title>CodeIgniter View Example</title>

</head>
<body>
<div class="container">
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>




<?php if ($query->num_rows() > 0 ) : ?> 
<div class="container">
<table border="0" class="table" >
  <tr>
      <td>ID</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Created Date</td>
      <td>Is Active</td>
      <td colspan="2">Actions</td>
  </tr> 
  <?php foreach ($query->result() as $row) : ?>
  <tr>
      <td><?php echo $row->id; ?></td>
      <td><?php echo $row->first_name; ?></td>
      <td><?php echo $row->last_name; ?></td>
      <td><?php echo date("d-m-Y", $row->created_date); ?></td>
      <td><?php echo ($row->is_active ? 'Yes' : 'No'); ?></td>
      <td><?php echo anchor('users/edit_user/'.$row->id, 'Edit') ; ?></td>
      <td><?php echo anchor('users/delete_user/'.$row->id, 'Delete') ; ?></td>
  </tr>           
  <?php endforeach ; ?>
</table>
</div>
<?php endif ; ?>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.2.4.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/tether.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
