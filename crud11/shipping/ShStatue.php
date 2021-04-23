<?php
include '../shared/config.php';
include '../shared/nav.php';
include '../shared/function.php';
include '../adminAuthentication.php';
$oid="";

if (isset($_POST['update'])) {
  $id = $_POST['sid'];
  $statue = $_POST['ustatu'];
  $update = "UPDATE `orders` SET shippingStatus = '$statue' WHERE id= $id ";
  $r_upd = mysqli_query($conn, $update);
header('location:/crud11/orders/listOrder.php');
           /* TESTING
  testmeseage($r_upd, "update");*/
}
if(isset($_GET['update'])){
  $oid=$_GET['update'];
}

?>
<h1 class="text-center mt-3 text-secondary display-4">
  UPDATE SHIPPING STATUS
</h1>

<div class="container col-6  mt-5">
  <form method="POST">
    <div class="form-group">
      <input min="1" type="hidden" class="form-control" name="sid" value="<?php echo $oid;?>">

    </div>

    <div class="form-group">
      <label>Shiping status</label>
      <select name="ustatu" id="ustat">
        <option >
          ordered</option>

        <option >
          shipped and on the way </option>

        <option >
        delivered </option>
      </select>
    </div>

    <button class="btn btn-primary" name="update"> submit</button>

  </form>
</div>


<?php include '../shared/script.php';  
include '../shared/footer.php';?>
    