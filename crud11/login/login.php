<?php
include '../shared/nav.php';
include '../shared/config.php';

if (isset($_POST['send'])) {
  $pass = $_POST['pass'];
  $email = $_POST['email'];
  $qw = "SELECT * FROM `admin`WHERE `email`='$email' AND `pass`='$pass' ";
  $qq = mysqli_query($conn, $qw);
  $ew = mysqli_num_rows($qq);
  $ss=mysqli_fetch_array($qq);
  if ($ew > 0) {
  $idAdmin=$ss['id'];
  $_SESSION['adminId']=$idAdmin;
    header('location:/crud11/index.php');
  } else {
  
  
  $qw = "SELECT * FROM `customers`WHERE `email`='$email' AND `pass`='$pass' ";
  $qq = mysqli_query($conn, $qw);
  $ew = mysqli_num_rows($qq);
  $ss=mysqli_fetch_array($qq);
  if ($ew > 0) {
  $idCustomer=$ss['custId'];
  $_SESSION['customerId']=$idCustomer;
    header('location:/crud11/index.php');
  } else {?>
    <div class="alert alert-danger" role="alert">
  <?php  echo "Wrong Email or Password";?>
  
</div>
<?php 
  }
}
}
?>



<div class="container col-6 mt-5" style="background-color:#edf6f9;">
  <form method="POST">
  <blockquote class="blockquote text-center">
  <p class="h2 mb-0">WELCOME !!</p>
</blockquote>
    <div class="form-group">
      <label for="exampleInputPassword1">E-mail</label>
      <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="E-mail">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary btn-lg" name="send">login</button>
  </form>
</div>


</select>
</div>

<?php
include '../shared/footer.php';
include '../shared/script.php';
?>