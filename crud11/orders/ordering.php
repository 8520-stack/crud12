<?php
include '../shared/config.php';
include '../shared/nav.php';
if(isset($_SESSION['customerId'])||isset($_SESSION['adminId'])){

$custName=$custAdd=$custPhone='';
if (isset($_GET['buy'])) {
  $id = $_GET['buy'];
$_SESSION['prodId']=$id;
  $select = "SELECT * FROM `products` WHERE prodId=$id";
  $query = mysqli_query($conn, $select);
  $array = mysqli_fetch_array($query);
  $price = $array['price'];
  $_SESSION['price']=$price;
  if(isset($_SESSION['customerId'])){
  $custId = $_SESSION['customerId'];
  $s = "SELECT * FROM `customers` WHERE custId='$custId' ";
  $que = mysqli_query($conn, $s);
  $row = mysqli_fetch_array($que);
  $custName = $row['name'];
  $custAdd = $row['address'];
  $custPhone = $row['phone'];
  }
}

if (isset($_POST['order'])) {
  $price=$_SESSION['price'];
  $custId = $_SESSION['customerId'];
$prodId=$_SESSION['prodId'];
$buyer=$_POST['buyer'];
$sadd=$_POST['sadd'];
$sphone=$_POST['sphone'];
  $query123 = "INSERT INTO `orders` VALUES (NULL,'$price',default,'$custId','$prodId','$buyer','$sadd',default,'$sphone')";
  $result = mysqli_query($conn, $query123);
  if ($result) {
    echo "<div class='alert alert-success'>
    your order has been submitted successfully 
  </div>" ;

  } else {
    echo "<div class='alert alert-danger'>
   sorry your order has not been submitted, please try again 
  </div>" ;
  }
}
?>

<div class="container-fluid" >
    <div class="row">
        <div class="col-5">
            <h2 class="text-center mt-2 text-secondary display-8">
                SHIPPING DETAILS
            </h2>
            <form method="POST">
                <div class="form-group">
                    <label> Name</label>
                    <input type="text" value="<?php echo $custName; ?>" class="form-control " name="buyer">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" value="<?php echo $custAdd; ?>" class="form-control" name="sadd">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" value="<?php echo $custPhone; ?>" name="sphone">
                </div>
                <?php   if(isset($_SESSION['customerId'])){
 ?>
                <button type="submit" class="btn btn-primary btn-lg" name="order">order</button>
                <?php } ?>
            </form>
        </div>
        <div class="col-1"> </div>

        <div class="col-6">
            <h2 class="text-center mt-2 text-secondary display-8">
                ORDER
            </h2>
            <table class="table table-borderless" style="background-color:#edf6f9;">
                <thead>
                    <tr>
                        <th scope="col-3"></th>
                        <th scope="col-3"></th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        <tr>
                            <td><?php echo $array['prodName']; ?></td>
                            <td> <img   width="150" height="100" src="../up_img/<?php echo $array['image']; ?>" height=200px></td>
                        </tr>
                        <tr>
                    </div>

                    <td> PRICE </td>
                    <td><?php echo $array['price']; ?></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>







    <?php
  include '../shared/footer.php';
  include '../shared/script.php';
                }else{
                  header("location:/crud11/signUp.php");
                }
  ?>