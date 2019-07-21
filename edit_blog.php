<?php 
include("include/connectdb.php");
//EDIT BLOG
if (isset($_POST['edit_blog'])) {
	
	$blog_title = mysqli_real_escape_string($db, $_POST['blog_title']);
	$blog_desc = mysqli_real_escape_string($db, $_POST['blog_desc']);
	$blog_author = mysqli_real_escape_string($db, $_POST['blog_author']);
	$blog_cat = mysqli_real_escape_string($db, $_POST['blog_cat']);
	$edit_blog_id = mysqli_real_escape_string($db, $_POST['edit_blog_id']);
	$current_user = mysqli_real_escape_string($db, $_SESSION['user_id']);
	$target_dir = "img/uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if (empty($blog_title)) { array_push($errors, "* Blog title is required"); }
	if (empty($blog_desc)) { array_push($errors, "* Blog description is required"); }
	if (empty($blog_author)) { array_push($errors, "* Blog author is required"); }
	if (empty(basename($_FILES["fileToUpload"]["name"]))) { array_push($errors, "* Blog image is required"); }

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
  	$query = "UPDATE blog
			SET blog_title = '$blog_title',
			blog_description = '$blog_desc',
			blog_image = '$target_file',
			blog_written_by = '$blog_author',
			blog_category = '$blog_cat',
			blog_date_edited = '$datenow'
			WHERE blog_id = '".$edit_blog_id."'";
  	mysqli_query($db, $query);
  	$_SESSION['success'] = "Blog has been successfully updated.";
  	header('location: blog_list.php');
  	}
}
$qry_blog = "SELECT * FROM blog
                WHERE blog_id = '".$_GET['editblog']."'";  
$result_blog = mysqli_query($db, $qry_blog);
$blog = mysqli_fetch_assoc($result_blog);
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Build Details « ENDGAME</title>
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
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="page-info">
			<h2>Blog No.<?php echo $_GET['no'];?></h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>Blog No.<?php echo $_GET['no'];?></span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Games section -->
	<section class="games-single-page">
		<div class="container">
			<div class="row">
						<div class="game-single-preview">
							<img src="<?php echo $blog['blog_image'];?>" alt="" style="width:1145px; height:485px;">
						</div>
				<div class="col-lg-7 order-2 order-lg-1">
					<form class="contact-form" method="post" autocomplete="off" action="" enctype="multipart/form-data">
						<label>Blog Image</label><input type="file" name="fileToUpload" id="fileToUpload">
						<input type="text" name="blog_title" placeholder="<?php echo $blog['blog_title'];?>" autocomplete="new-password" value="<?php if(isset($_POST['blog_title'])) {print htmlspecialchars($_POST['blog_title']);}else{echo $blog['blog_title'];}?>">
						<textarea name="blog_desc" placeholder="<?php echo $blog['blog_description'];?>"><?php if(isset($_POST['blog_desc'])) {print htmlspecialchars($_POST['blog_desc']);}else{echo $blog['blog_description'];}?></textarea>
						<input type="text" name="blog_author" placeholder="<?php echo $blog['blog_written_by'];?>" autocomplete="new-password" value="<?php if(isset($_POST['blog_author'])) {print htmlspecialchars($_POST['blog_author']);}else{echo $blog['blog_written_by'];}?>">
						<input type="text" name="blog_cat" placeholder="<?php echo $blog['blog_category'];?>" autocomplete="new-password" value="<?php if(isset($_POST['blog_cat'])) {print htmlspecialchars($_POST['blog_cat']);}else{echo $blog['blog_category'];}?>">
						<?php include('errors.php'); ?>
						<br>
						<input type="hidden" name="edit_blog_id" value="<?php echo $blog['blog_id'];?>">
						<button type="submit" name="edit_blog" class="site-btn">confirm edit blog<img src="img/icons/double-arrow.png" alt="#"/></button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Games end-->
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
