<?php 
include("include/connectdb.php");
//DELETE BLOG
if (isset($_POST['delete_blog'])) {
	$edit_blog_id = mysqli_real_escape_string($db, $_POST['edit_blog_id']);
  	$query = "DELETE FROM blog
			WHERE blog_id = '".$edit_blog_id."'";
  	mysqli_query($db, $query);
  	$_SESSION['success'] = "Blog has been successfully deleted";
  	header('location: blog_list.php');
  	
}

$qry_blog = "SELECT * FROM blog 
                WHERE blog_id = '".$_GET['deleteblog']."'";  
$result_blog = mysqli_query($db, $qry_blog);
$blog = mysqli_fetch_assoc($result_blog);

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Delete Product « ENDGAME</title>
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
			<h2>Delete <?php echo $blog['blog_title'];?></h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>Delete <?php echo $blog['blog_title'];?></span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 order-1 order-lg-2 contact-text text-white">
					<form class="contact-form" method="post" action="" autocomplete="off">
						<h3>Confirm delete blog <font color="#b01ba5"><b><?php echo $blog['blog_title'];?></b></font>?</h3><br><br><br>
						<input type="hidden" name="edit_blog_id" value="<?php echo $blog['blog_id'];?>">
						<a href="blog_list.php" class="site-btn"><font color="black">No</font><img src="img/icons/double-arrow.png" alt="#"/></a>
						<button class="site-btn" type="submit" name="delete_blog">Confirm<img src="img/icons/double-arrow.png" alt="#"/></button>
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
