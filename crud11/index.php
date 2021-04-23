<?php
include 'shared/config.php';
include 'shared/nav.php';
$select = "SELECT * FROM `sections`";
$query = mysqli_query($conn, $select);

?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
   
    <div class="container mt-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="1650">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./up_img/apple1.jpg" height="600" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./up_img/h2.jpg" height="600" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./up_img/samsung2.jpeg" height="600" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    <?php
  include 'shared/script.php';
  include 'shared/footer.php';
  ?>