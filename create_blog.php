<?php
include("include/connectdb.php");
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Add New Blog « ENDGAME</title>
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
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/2.jpg">
		<div class="page-info">
			<h2>Add New Blog</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>Add New Blog</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

	<!-- Register page -->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-2 order-lg-1">
					<form class="contact-form" method="post" autocomplete="off" action="create_blog.php" enctype="multipart/form-data">
						<label>Blog Image</label><input type="file" name="fileToUpload" id="fileToUpload">
						<input type="text" name="blog_title" placeholder="blog title" autocomplete="new-password" value="<?php if(isset($_POST['blog_title'])) {print htmlspecialchars($_POST['blog_title']);}?>">
						<textarea name="blog_desc" placeholder="blog description"><?php if(isset($_POST['blog_desc'])) {print htmlspecialchars($_POST['blog_desc']);}?></textarea>
						<input type="text" name="blog_author" placeholder="written by" autocomplete="new-password" value="<?php if(isset($_POST['blog_author'])) {print htmlspecialchars($_POST['blog_author']);}?>">
						<input type="text" name="blog_cat" placeholder="blog category" autocomplete="new-password" value="<?php if(isset($_POST['blog_cat'])) {print htmlspecialchars($_POST['blog_cat']);}?>">
						<?php include('errors.php'); ?>
						<br>
						<button type="submit" name="add_new_blog" class="site-btn">Add new blog<img src="img/icons/double-arrow.png" alt="#"/></button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Register page end -->

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
