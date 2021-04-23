<?php
include '../shared/nav.php';
include '../shared/config.php';
include '../adminAuthentication.php';

$select="SELECT * FROM customers";
$s=mysqli_query($conn,$select);

if(isset($_GET['delete'])){
 $id=$_GET['delete'];
$delete="DELETE FROM `customers` WHERE custId=$id";
$query=mysqli_query($conn,$delete);
if($query){
  header("location:/crud11/customers/listcustomers.php");
}

}

  
?>

<div class="container col-8 mt-5" >


<table class="table table-hover table-striped "style="background-color:#edf6f9;">
 <thead  class="text-light"  style="background-color:#489991;">
   <tr >

     <th scope="col" >ID</th>
     <th scope="col">Name</th>
     <th scope="col">Address</th>
     <th scope="col">Email</th>
     <th scope="col">Phone</th>
     <th scope="col">Action</th>

   </tr>
 </thead>
 <tbody>
    <?php  foreach($s as $data){?>
      <tr>
     <th scope="row"><?php echo $data['custId'];?></th>
     <td>  <?php  echo $data['name']; ?>  </td>
      <td>  <?php  echo $data['address']; ?> </td>
      <td>  <?php  echo $data['email']; ?> </td>
      <td>  <?php  echo $data['phone']; ?> </td>

    
      <td> <a href="listcustomers.php?delete=<?php echo $data['custId'] ;?>" class="btn btn-danger"> delete</a></td>
     

   </tr>
   <?php }?>
 
  
 </tbody>
</table>
</div>
<?php
include '../shared/footer.php ';
include '../shared/script.php ';
?>