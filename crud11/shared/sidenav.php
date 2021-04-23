<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .sidenav {
    height: 100%;
    width: 180px;
    z-index: 10;
    top: 0;
    left: 0;
    background-color: #edf6f9;
    overflow-x: hidden;
    padding-top: 20px;
  
  }
  
  .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
  }
  
  .sidenav a:hover {
    color: #f1f1f1;
  }
  
  </style>
</head>
<body>
  
</body>
</html>

<div class="sidenav"  ;>
 
<?php  
include 'config.php';
$select="SELECT * FROM `sections`";
$query=mysqli_query($conn,$select);
foreach($query as $data){
?>
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active text-body" href="/crud11/products/product.php?type=<?php echo$data['id'] ?>"><?php echo$data['category']; ?></a>
  </li>
<?php } ?>
</div>
</div>