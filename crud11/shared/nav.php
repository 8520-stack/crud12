<?php
session_start();
ob_start();

include 'config.php';

?>

<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>


        .navbar-brand {
            justify-content: flex-start;
            margin-left: 20px;
            background-color: #006d77;
            color: white;
            margin-right: 25px;
            font-size: x-large;
        }

        .navbar-brand:hover {
            color: wheat;
            transform: scale(1.1);
            font-weight: bold;
        }

        .navbar-collapse {
            justify-content: flex-end;
            background-color: #006d77;
            color: white;
            margin-right: 20px;
        }

        .navbar {
            background-color: #006d77;
        }

        .nav-link {
            color: lightgrey;
            font-size: 18px;
            transition: transform .2s;
            padding: 0px;
        }

        .nav-link:hover {
            color: #e9c46a;
            transform: scale(1.1);
            font-weight: bold;
        }

        .navbar-toggler:hover {
            border-color: lightgray;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgb(211, 211, 211)' stroke-width='6' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .dropdown-item {
            transition: transform .2s;
            background-color: lightgrey;
        }

        .dropdown-item:hover {
            background-color: #006d77;
            color: #e9c46a;
            transform: scale(1.1);
            font-weight: bolder;
        }

        .dropdown-menu {
            background-color: lightgrey;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .hidetext { -webkit-text-security: disc; /* Default */ }

    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="/crud11/index.php">MobHub</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown ">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/crud11/products/product.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Phones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<?php
$select="SELECT * FROM `sections`";
$query=mysqli_query($conn,$select);
foreach($query as $data){
?>
                            <li><a class="dropdown-item" href="/crud11/products/product.php?type=<?php echo$data['id'] ?>"><?php echo$data['category']?></a></li>
<?php } 
if(isset($_SESSION['adminId'])){
?>
                            <li><a class="dropdown-item" href="/crud11/products/addproducts.php">Add Product </a></li>
                            <li><a class="dropdown-item" href="/crud11/products/listproducts.php">List Product </a></li>
<?php } ?>
                        </ul>
                    </li>
                    
                        <?php if(isset($_SESSION['adminId'])||isset($_SESSION['customerId'])){
 ?>
                    

                           
                      
                       


<?php } if(isset($_SESSION['adminId'])){
  ?>
  
  
 
                            <li class="nav-item"><a class="nav-link" href="/crud11/customers/listcustomers.php">List Customers</a></li>
<?php } ?>
                        
                    </li>
                   
                    <?php
                    if(isset($_SESSION['adminId'])){
                        ?>
                        <li class="nav-item">
                        <a class="nav-link" href="/crud11/orders/listOrder.php">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/crud11/shipping/listshipping.php">Shipping</a>
                    </li>

                    <?php
                    }
?>
                    
                 

 <?php  if(isset($_SESSION['customerId'])){
  ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/crud11/customers/customerprofile.php">My profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/crud11/orders/customerorders.php">My Orders</a>
                    </li>
                    <?php
                    }
?>



                </ul>
                <ul class="navbar-nav">
                    
          <?php
          
if(isset($_SESSION['customerId'])||isset($_SESSION['adminId'])){
          ?>
                        <li class="nav-item">
                        <a class="nav-link" href="/crud11/signout.php">Log Out</a>
                    </li>
<?php }else{
 ?>
 <li class="nav-item">
                        <a class="nav-link" href="/crud11/login/custsignup.php">Sign Up</a>
                    <li class="nav-item">
                        <a class="nav-link" href="/crud11/login/login.php">Log In</a>
                        <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    
