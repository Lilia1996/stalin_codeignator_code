<div class="col-sm-8 text-left"> 
<h2><?php echo "Cart"; ?></h2>
    <table class="table">
     <thead class="thead-inverse">
    <tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Product Description</th>
    </tr>
  </thead>
   <tbody>
    <?php foreach ($query->result() as $row) : ?> 
   
        <tr>
	        <th scope="row"><?php echo $row->product_id ; ?></th>
	        <td><?php echo $row->product_name ; ?></td>
	        <td><?php echo $row->product_description ; ?></td>
	        <td><?php echo anchor('shop/add/'.$row->product_id, 'Add to cart') ; ?></td>
        </tr>
    <?php endforeach ; ?> 
    </tbody>
    </table>
    </div>

