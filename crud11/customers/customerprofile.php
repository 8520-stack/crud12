<?php
include '../shared/nav.php';
include '../shared/config.php';

if(isset($_SESSION['adminId'])||isset($_SESSION['customerId'])){



$select="SELECT * FROM customers";
$s=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($s);
if(isset($_SESSION['customerId'])){
$id=$_SESSION['customerId'];
$update="SELECT * FROM `customers` where custId=$id";
$s=mysqli_query($conn, $update);
}elseif(isset($_SESSION['adminId'])){
  $update="SELECT * FROM `customers`";
  $s=mysqli_query($conn, $update);
}
  
?>

<div class="container col-8 mt-5">


<table class="table table-hover table-striped " style="background-color:#edf6f9;">
 <thead>
   <tr>

     <th scope="col">ID</th>
     <th scope="col">Name</th>
     <th scope="col">Password</th>
     <th scope="col">Address</th>
     <th scope="col">E-mail</th>
     <th scope="col">Phone</th>
     <th scope="col">Action</th>

   </tr>
 </thead>
 <tbody>
   <tr>
    <?php  
   
    foreach($s as $data){

?>
     <th scope="row"><?php echo $data['custId'];?></th>
     <td>  <?php  echo $data['name']; ?>  </td>
      <td class="hidetext">  <?php  echo $data['pass']; ?> </td>
      <td>  <?php  echo $data['address']; ?> </td>
      <td>  <?php  echo $data['email']; ?> </td>
      <td>  <?php  echo $data['phone']; ?> </td>

    
     <td><a href="../signUp.php?update=<?php echo $data['custId'] ;?>" class="btn btn-info " >Edit</a></td>
     

   </tr>
 
   <?php }?>
  
 </tbody>
</table>
</div>
<?php
include '../shared/footer.php ';
include '../shared/script.php ';
    }else{
      header("location:/crud11/index.php");
    }
?>