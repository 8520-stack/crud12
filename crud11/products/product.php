<?php
include '../shared/nav.php';
include '../shared/config.php';
// include '../shared/sidenav.php'; 
if(isset($_GET['type'])){
$id = $_GET['type'];
$select = "SELECT * FROM `products`  where section_id=$id ";
$show = mysqli_query($conn, $select);
}else{
    $select = "SELECT * FROM `products` ";
$show = mysqli_query($conn, $select);
}

?>

<body>

    <div class="mt-5" style="margin-left:15%">
    <div class="row row-cols-md-5" >
            <?php
            foreach ($show as $data) {
            ?>
                <div class="card m-2" style=" background-color:#edf6f9;">
                    <img   width="240" height="300" src="../up_img/<?php echo $data['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['prodName'] ?></h5>
                        <p class="card-text "><?php echo $data['price'] ?></p>
                        <p class="card-text"><?php echo $data['description'] ?></p>
                        <hr>
                        <p class="card-text">
                            <a href="../orders/ordering.php?buy=<?php echo $data['prodId']; ?>" class="btn btn-info btn-lg">Buy</a>
                        </p>
                    </div>
                </div>

            <?php } ?>
        </div>
    
    </div>
<?php
include '../shared/footer.php';
include '../shared/script.php';
?>
</body>
