<?php
include '../shared/config.php';
include '../shared/nav.php';
include '../shared/function.php';
/*include '../adminAuthentication.php';*/


$select="SELECT* FROM `orders`";
$srun= mysqli_query($conn,$select);
           /* testint select 
             testmeseage($srun,"show");*/
?>
<h1 class="text-center mt-3 text-info diplay-2">
Orders
</h1>

<div class="container col-6 mt-3"><table class="table" >
  <thead class="text-light"  style="background-color:#489991;" >
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Customer id</th>
      <th scope="col">product id</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
     <th scope="col">Status</th>
     <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
        foreach($srun as $data){?>
      <td><?php echo $data['id'];?></td>
      <td><?php echo $data['customer_id'];?></td>
      <td><?php echo $data['product_id'];?></td>
      <td><?php echo $data['quantity'];?></td>
      <td><?php echo $data['price'];?></td>
      <td><?php echo $data['shippingStatus'];?></td>
      <td> <a href="/crud11/shipping/ShStatue.php?update=<?php echo $data['id'] ;?>" class="btn btn-info">Update</a> 
      
    </tr>
    <?php }?>
    
  </tbody>
</table>


</div>





<?php include '../shared/script.php';?>