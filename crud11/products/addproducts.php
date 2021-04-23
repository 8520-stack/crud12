
<?php
include '../shared/config.php';
include '../shared/nav.php';
include '../adminAuthentication.php';
include '../shared/function.php';
$prodName='';
$price='';
$description='';
$image='';
$status='';
$update= false;
if(isset($_GET['update'])){
	$update= true;
	$id=$_GET['update'];
  $select="SELECT * FROM products WHERE prodId=$id";
  
  $s=mysqli_query($conn, $select);
  $row= mysqli_fetch_assoc($s);
   $prodName=$row['prodName'];
   $status=$row['status'];
  
   $price=$row['price'];
   $image=$row['image'];
   $description=$row['description'];
  }

if (isset($_POST['send'])) {

	$prodName = $_POST['prodName'];
	$description = $_POST['description'];
	$status = $_POST['status'];
	$price = $_POST['price'];
	$section_id = $_POST['section_id'];

	$image = $_FILES['image'];
	$imagename = $_FILES['image']['name'];
	$imagetype = $_FILES['image']['type'];
	$image_tmp_name = $_FILES['image']['tmp_name'];
	$imagesize = $_FILES['image']['size'];
	$folder = "../up_img/" . $imagename;
	/*if (move_uploaded_file($image_tmp_name, $folder)) {
		echo "Image uploaded successfully";
	} else {
		echo "Failed to upload image";
	}*/


	$insert = "INSERT INTO `products` VALUES ( NULL ,'$prodName','$description','$imagename','$status',$section_id , $price)";
	$i = mysqli_query($conn, $insert);
	//testmeseage($i,"insert");

	header("location: ../products/listproducts.php");
}



 
    if(isset ($_POST['update'])){
        $prodName = $_POST['prodName'];
        $status = $_POST['status'];
        $price= $_POST['price'];
		$description=$_POST['description'];
		
		
    
        $update = "UPDATE  products set prodName='$prodName', status='$status' , price=$price, description='$description' WHERE prodId=$id ";
       $i= mysqli_query($conn, $update);
	   
	  // testmeseage($i,"update");
    
    
	   header("location: ../products/listproducts.php");


    }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<style> 
	
		.form-style-10 {
			width: 450px;
			padding: 30px;
			margin: 40px auto;
			background: #f9f9f9;
			border-radius: 10px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
			-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
			-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
		}

		.form-style-10 .inner-wrap {
			padding: 30px;
			background: #066d77;
			border-radius: 6px;
			margin-bottom: 15px;
		}

		.form-style-10 h1 {
			background: #066d77;
			padding: 20px 30px 15px 30px;
			margin: -30px -30px 30px -30px;
			border-radius: 10px 10px 0 0;
			-webkit-border-radius: 10px 10px 0 0;
			-moz-border-radius: 10px 10px 0 0;
			color: #fff;
			text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
			font: normal 30px 'Bitter', serif;
			-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
			-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
			box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
			border: 1px solid #066d77;
		}

		.form-style-10 h1>span {
			display: block;
			margin-top: 2px;
			font: 13px Arial, Helvetica, sans-serif;
		}

		.form-style-10 label {
			display: block;
			font: 13px Arial, Helvetica, sans-serif;
			color: #f9f9f9;
			margin-bottom: 15px;
		}

		.form-style-10 input[type="text"],
		.form-style-10 input[type="number"],
		.form-style-10 input[type="email"],
		.form-style-10 textarea,
		.form-style-10 select {
			display: block;
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			width: 100%;
			padding: 8px;
			border-radius: 6px;
			-webkit-border-radius: 6px;
			-moz-border-radius: 6px;
			border: 2px solid #066d77;
			box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
			-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
			-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
		}

		.form-style-10 .section {
			font: normal 20px 'Bitter', serif;
			color: #066d77;
			margin-bottom: 5px;
		}

		.form-style-10 .section span {
			background: #066d77;
			padding: 5px 10px 5px 10px;
			position: absolute;
			border-radius: 50%;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			border: 4px solid #066d77;
			font-size: 14px;
			margin-left: -45px;
			color: white;
			margin-top: -3px;
		}

		.form-style-10 input[type="button"],
		.form-style-10 input[type="submit"] {
			background: #066d77;
			padding: 8px 20px 8px 20px;
			border-radius: 5px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			color: white;
			text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
			font: normal 30px 'Bitter', serif;
			-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
			-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
			box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
			border: 1px solid #066d77;
			font-size: 15px;
		}

		.form-style-10 input[type="button"]:hover,
		.form-style-10 input[type="submit"]:hover {
			background: #066d77;
			-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
			-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
			box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
		}

		.form-style-10 .privacy-policy {
			float: right;
			width: 250px;
			font: 12px Arial, Helvetica, sans-serif;
			color: #066d77;
			margin-top: 10px;
			text-align: right;
		}

		.form-style-10 select {
			font-family: Georgia, "Times New Roman", Times, serif;
			background: rgba(255, 255, 255, .1);
			border: none;
			margin: 0;
			outline: 0;
			width: 100%;
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			background-color: #f9f9f9;
			color: #066d77;
			-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
			box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
			margin-bottom: 30px;
		}


		.custom-file__input {
			position: absolute;
			width: 0.1px;
			height: 0.1px;
			opacity: 0;
			overflow: hidden;
			z-index: -1;
		}

		.custom-file__label {
			position: relative;
			display: block;
			width: 50%;
			min-width: 400px;
			min-height: 45px;
			margin: -10px 0;
			padding: 0;
			background: #f9f9f9;
			border: 2px solid #066d77;
			line-height: 5px;
			text-align: center;
			text-transform: none;
			cursor: pointer;
			transition: all 0.3s;
			border-radius: 5px;
		}

		.custom-file__input:valid~.custom-file__label {
			border-color: #066d77;
			background: #066d77;
			color: #066d77;
		}

		.custom-file__input:valid~.custom-file__label:before {
			content: "Image has been uploaded successfully";
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			margin: auto;
			color: #f9f9f9;
			line-height: 45px;
			font-size: 15px;
		}
	</style>
</head>

<body>


	<div class="form-style-10">


		<h1>Please, enter your data.</h1>
		<form  method="POST" enctype="multipart/form-data">
			<div class="section"><span>1</span>Product Info</div>
			<div class="inner-wrap">
				<label>Product name <input type="text" name="prodName"  value="<?php echo $prodName?>" ></label>


				<label>Product decription <input type="text" name="description"  value="<?php echo $description?>"></label>
				<label>Product status <input type="text" name="status" value="<?php echo $status?>"> </label>
				<label>Product price <input type="text" name="price" value="<?php echo $price?>" ></label>
				
				

				
			</div>

			

			

			<div class="button-section">

				<?php if($update) : ?> 
				<input type="submit" name="update" value="update" >
					<?php else :?>
						<div class="section"><span>2</span></div>
						<div class="inner-wrap">

						<label for="job">Phone category:</label>
						<select id="job" name="section_id">

					<?php
					$select = "SELECT * FROM sections";
					$s = mysqli_query($conn, $select);
					foreach ($s as $data) { ?>
						<option value="<?php echo $data['id'] ?>"> <?php echo $data['category'] ?>
						</option> <?php } ?>
				</select>
				</div>
						<div class="section"><span>3</span>Product IMG</div>
			<div class="custom-file">
				<input type="file" class="custom-file__input" id="field-upload"  name="image" required>
				<label class="custom-file__label" for="field-upload">
					<h4 style="color:#066d77">Choose file</h4>
				</label>
			</div> 
					<input type="submit" name="send">
					<?php endif; ?>
				
			</div>

		</form>
	</div>

</body>

</html>




<?php
include '../shared/script.php';
include '../shared/footer.php';

?>