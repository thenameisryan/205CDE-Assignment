<?php 
include("include/connectdb.php");
//EDIT USER
if (isset($_POST['edit_prod'])) {
	
	$prod_name = mysqli_real_escape_string($db, $_POST['prod_name']);
	$prod_desc = mysqli_real_escape_string($db, $_POST['prod_desc']);
	$prod_price = mysqli_real_escape_string($db, $_POST['prod_price']);
	$prod_cat = mysqli_real_escape_string($db, $_POST['prod_cat']);
	$edit_prod_id = mysqli_real_escape_string($db, $_POST['edit_prod_id']);
	$current_user = mysqli_real_escape_string($db, $_SESSION['user_id']);
	$target_dir = "img/uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if (empty($prod_name)) { array_push($errors, "* Product name is required"); }
	if (empty($prod_price)) { array_push($errors, "* Product price is required"); }
	if (empty($prod_cat)) { array_push($errors, "* Product category is required"); }
	if (empty(basename($_FILES["fileToUpload"]["name"]))) { array_push($errors, "* Product image is required"); }

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 1000000) {
	    array_push($errors, "Sorry, your file is too large.");
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		array_push($errors, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
	}
	if (count($errors) == 0) {
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
  	$query = "UPDATE product
			SET product_name = '$prod_name',
			product_desc = '$prod_desc',
			product_image = '$target_file',
			product_price = '$prod_price',
			product_category = '$prod_cat',
			product_date_edited = '$datenow'
			WHERE product_id = '".$edit_prod_id."'";
  	mysqli_query($db, $query);
  	$_SESSION['success'] = "Product has been successfully updated.";
  	header('location: product_list.php?cat=all');
  	}
}

$qry_prod = "SELECT * FROM product
                WHERE product_id = '".$_GET['editprod']."'";  
$result_prod = mysqli_query($db, $qry_prod);
$prod = mysqli_fetch_assoc($result_prod);

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Edit Product « ENDGAME</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
	<style type="text/css">
		.control-label .text-info { display:inline-block; }

	</style>

	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php 
	include("include/header.php");
	?>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="page-info">
			<h2>Edit Product</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>Edit Product</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
					<form class="contact-form" method="post" action="" autocomplete="off" enctype="multipart/form-data">
						<label>Product Image</label><input type="file" name="fileToUpload" id="fileToUpload">
						<input type="text" name="prod_name" placeholder="<?php echo $prod['product_name'];?>" autocomplete="new-password" value="<?php if(isset($_POST['prod_name'])) {print htmlspecialchars($_POST['prod_name']);}else{echo $prod['product_name'];}?>">
						<textarea name="prod_desc" placeholder="<?php echo $prod['product_desc'];?>"><?php if(isset($_POST['prod_desc'])) {print htmlspecialchars($_POST['prod_desc']);}else{echo $prod['product_desc'];}?></textarea>
						<input type="text" name="prod_price" placeholder="<?php echo $prod['product_price'];?>" autocomplete="new-password" value="<?php if(isset($_POST['prod_price'])) {print htmlspecialchars($_POST['prod_price']);}else{echo $prod['product_price'];}?>">
						<label>PRODUCT CATEGORY</label>
						<select name="prod_cat" style="width: 190px;">
						<option value="<?php if(isset($_POST['prod_cat'])) {print htmlspecialchars($_POST['prod_cat']);}else{echo $prod['product_category'];}?>">Selected(<?php if(isset($_POST['prod_cat'])) {print htmlspecialchars($_POST['prod_cat']);}else{echo $prod['product_category'];}?>)</option>
						<option value="CPU">CPU</option>
						<option value="CPUCOOLER">CPU COOLER</option>
						<option value="RAM">RAM</option>
						<option value="MBOARD">MOTHERBOARD</option>
						<option value="GCARD">GRAPHIC CARD</option>
						<option value="STORAGE">HDD/SDD</option>
						<option value="CASE">CASE</option>
						<option value="POWERSUP">POWER SUPPLY</option>
						<option value="OPTDRIVE">OPTICAL DRIVE</option>
						<option value="SOFTWARE">SOFTWARE</option>
						<option value="MONITOR">MONITOR</option>
						<option value="OTHER">ACCESSORIES/OTHER</option>
						</select>
						<?php include('errors.php'); ?>
						<br>
						<input type="hidden" name="edit_prod_id" value="<?php echo $prod['product_id'];?>">
						<button type="submit" name="edit_prod" class="site-btn">Confrim changes<img src="img/icons/double-arrow.png" alt="#"/></button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact page end-->

	<!-- Footer section -->
	<?php 
	include("include/footer.php");
	?>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
