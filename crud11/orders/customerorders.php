<?php
include '../shared/nav.php';
include '../shared/config.php';

if(isset($_SESSION['customerId'])){

$c=$_SESSION['customerId'];

$select="SELECT orders.*,products.prodName,products.price FROM `orders` JOIN `products`ON orders.product_id=products.prodId and orders.customer_id=$c";
$srun= mysqli_query($conn,$select);}
           /* TESTING
             testmeseage ($srun,"show"); */
?>
<h1 class="text-center mt-3 text-secondary">
My Orders
</h1>

<div class="container col-10 mt-3"><table class="table table-bordered">
  <thead class="text-light"  >
    <tr  style="background-color:#489991;"> 
     <th colspan="4" class="text-center"> product</th>
     <th colspan="6" class="text-center" > Shipping</th>
    </tr>
    <tr style="background-color:#859987;">  
      <th scope="col"> Order Id</th>
      <th scope="col">Product Id</th>
      <th scope="col"> Name</th>
       <th scope="col"> Price</th>
      <th scope="col">Shipping To</th>
      <th scope="col" class="text-center" > Address</th>
      <th scope="col">Shipping Phone</th>
     <th scope="col">  Status</th>

    </tr>
  </thead>
  
  <tbody>
    <tr>
      <?php
        foreach($srun as $data){?>
      <td><?php echo $data['id'];?></td>
      <td><?php echo $data['product_id'];?></td>
      <td><?php echo $data['prodName'];?></td>
      <td><?php echo $data['price'];?></td>
      <td><?php echo $data['shippingTo'];?></td>
      <td><?php echo $data['shippingAddress'];?></td>
      <td><?php echo $data['shippingphone'];?></td>
      <td><?php echo $data['shippingStatus'];?></td>
      
    </tr>
    <?php }?>
    
  </tbody>
</table>


</div>





<?php include '../shared/script.php';?>