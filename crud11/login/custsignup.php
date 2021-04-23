<?php
include '../shared/nav.php';
include '../shared/config.php';

if (isset($_POST['send'])) {
  $name =  $_POST['name'];
  $pass = $_POST['pass'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $insert = "INSERT INTO `customers` VALUES (NULL , '$name' , '$pass' , '$address','$email', '$phone' )";
  $i = mysqli_query($conn, $insert);
  if ($i) {
    header('location:/crud11/login/login.php');
  } else {
  }
}
/*if(isset($_POST['login'])){
        $name=  $_POST['name'];
        $pass= $_POST['pass'];
        $address= $_POST['address'];
        $email =$_POST['email'];
        $phone= $_POST['phone'];
        $select="SELECT * FROM customers where  name='$name' ,pass=$pass , address='$address',email='$email', phone=$phone";
        $s=mysqli_query($conn,$select);
        $row=mysqli_num_rows($s);
        if($row>0){
            echo "true";
        }else{
            echo"false";
        }
    }*/

?>


<div class="container col-6 mt-5" style="background-color:#edf6f9;">
    <form method="POST" >
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="address" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">E-mail</label>
            <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Phone">
        </div>
        <button type="submit" class="btn btn-primary btn-lg" name="send">Signup</button>
    </form>
</div>


</select>
</div>

<?php
include '../shared/footer.php';
include '../shared/script.php';
?>