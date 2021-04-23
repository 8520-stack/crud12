<?php
include 'shared/nav.php';
include 'shared/config.php';

if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $pass = $_POST['pass'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];


  $insert = "INSERT INTO `customers` VALUES (NULL , '$name' , '$pass' , '$address' ,'$email','$phone' )";
   mysqli_query($conn, $insert);
  header("location:/crud11/customers/listcustomers.php");
}
$update=false;

$name = "";
$pass = "";
$address = "";
$email = "";
$phone = "";

if (isset($_GET['update'])) {
  $update=true;
  $id = $_GET['update'];
  $_SESSION['custId']=$id;
  $select = "SELECT * FROM customers WHERE custId=$id";
  $s = mysqli_query($conn, $select);
  $row = mysqli_fetch_assoc($s);
  $name = $row['name'];
  $pass = $row['pass'];
  $address = $row['address'];
  $email = $row['email'];
  $phone = $row['phone'];
}

  if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $id=$_SESSION['custId'];
    $update1 = "UPDATE `customers` SET name='$name', pass='$pass' , address='$address' , email='$email', phone=$phone WHERE custId=$id ";
    $i = mysqli_query($conn, $update1);
if($i){
    header("location:/crud11/customers/listcustomers.php");
}else{
  echo"ERROR";
}
  }



?>

<div class="container col-6 mt-5">
  <form method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">
        <h5>Name</h5>
      </label>
      <input type="text" name="name" class="form-control" placeholder="Employee Name" value="<?php echo $name ?>">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">
        <h5>E-Mail</h5>
      </label>
      <input type="text" name="email" class="form-control" placeholder="E-Mail" value="<?php echo $email ?>">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">
        <h5>Password</h5>
      </label>
      <input type="password" name="pass" class="form-control" placeholder="Password" value="<?php echo $pass ?>">
      <br>
      <div class="form-group">
        <label for="exampleInputPassword1">
          <h5>Address</h5>
        </label>
        <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $address?>">
      </div>


      <div class="form-group">
        <label for="exampleInputEmail1">
          <h5>Phone Number</h5>
        </label>
        <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo $phone ?>">
      </div>

      <div>

        <?php if($update==true){?>
      <button type="input" name="update" class="btn btn-info btn-lg">Update</button>
<?php }else{ ?>
          <button type="input" name="send" class="btn btn-primary btn-lg">Sign Up</button>
      <?php } ?>
      </div>
    </div>
    <?php include 'shared/script.php';
?>