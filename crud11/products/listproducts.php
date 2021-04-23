<?php
include '../shared/nav.php';
include '../shared/config.php';
include '../shared/function.php';
include '../adminAuthentication.php';
// $select="SELECT * FROM `products`";
$select = "SELECT  products.*,sections.category AS sectionCat , sections.*
            FROM (products
            INNER JOIN sections ON products.section_id=sections.id)";
 $s=mysqli_query($conn,$select);
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $delete = "DELETE FROM `products` WHERE prodId = $id ";
  $q = mysqli_query($conn, $delete); 
         /* TESTING
     testmeseage($q,"delet");*/
  header("location: listproducts.php");
 
}
   
?>
<div class="container col-8 mt-5">


<table class="table table-hover table-striped">
  <thead class="text-light" style="background-color:#489991;">
    <tr>
 
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr> <?php  foreach($s as $data){

?>
      <th scope="row"><?php echo $data['prodId'];?></th>
      <td>  <?php  echo $data['prodName']; ?>  </td>
       <td>  <?php  echo $data['description']; ?> </td>


      
      
      <td><img width="150" height="100" src="../up_img/<?php echo $data['image']; ?>"></td>
      
     
     <td> <?php echo $data['status']; ?></td>
     <td> <?php echo $data['price']; ?></td>
      <td> <?php echo $data['sectionCat']; ?></td>
      <td> <a href="addproducts.php?update=<?php echo $data['prodId'] ;?>" class="btn btn-info">Update</a>
      <a href="listproducts.php?delete=<?php echo $data['prodId'] ;?>" class="btn btn-danger"> Delete</a></td>
    </tr>
    
    <?php }?>
   
  </tbody>
</table>
</div>
<?php 
include '../shared/script.php';
include '../shared/footer.php';
?>