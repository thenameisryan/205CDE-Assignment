<?php 
include("include/connectdb.php");

if(isset($_GET['cat'])){
	if ($_GET['cat'] == 'all'){
		$qry_blog = "SELECT * FROM blog";  
		$qry_blog2 = "SELECT * FROM blog";
	}else{
		$cat = $_GET['cat'];
		$qry_blog = "SELECT * FROM blog WHERE blog_category='$cat'";
		$qry_blog2 = "SELECT * FROM blog ";
	}
}else if (isset($_GET['input'])) {
	$search = $_GET['input'];
	$qry_blog = "SELECT * FROM blog WHERE blog_title LIKE '$search%' or blog_description LIKE '$search%'";  
	$qry_blog2 = "SELECT * FROM blog";
}else{
	$qry_blog = "SELECT * FROM blog";
	$qry_blog2 = "SELECT * FROM blog";
	 
}
$result_blog = mysqli_query($db, $qry_blog);
$num_result_blog = mysqli_num_rows($result_blog);

$result_blog2 = mysqli_query($db, $qry_blog2);
$num_result_blog2 = mysqli_num_rows($result_blog2);
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Blog « ENDGAME</title>
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
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/3.jpg">
		<div class="page-info">
			<h2>Blog</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>Blog</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

	<!-- Blog page -->
	<section class="blog-page">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<?php for($c=0; $c<$num_result_blog; $c++){ ?>
					<?php $blog = mysqli_fetch_assoc($result_blog);?>
					<div class="big-blog-item">
						<img src="<?php echo $blog['blog_image'];?>" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta"><?php echo substr($blog['blog_date_created'],0,10 );?>  /  in <font color="#b01ba5"><?php echo $blog['blog_category'];?></font></div>
							<h3><?php echo $blog['blog_title'];?></h3>
							<p><?php if(strlen($blog['blog_description'])>30){echo substr($blog['blog_description'],0,30);echo ". . .";}else{;echo substr($blog['blog_description'],0,50);}?></p>
							<a href="blog_details.php?readblog=<?php echo $blog['blog_id'];?>" class="read-more">Read More <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<?php }?>
					<!-- <div class="site-pagination">
						<a href="#" class="active">01.</a>
						<a href="#">02.</a>
						<a href="#">03.</a>
					</div> -->
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<form method="get" action="" class="search-widget">
								<input type="text" name="input" value="<?php if(isset($_GET['input'])) {print htmlspecialchars($_GET['input']);}?>">
								<button type="submit">search</button>
							</form>
						</div>
						
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">categories</h4>
								<ul>
									<li><a href="blog.php?cat=all">All</a></li>
						<?php for($c=0; $c<$num_result_blog2; $c++){ ?>
						<?php $blog2 = mysqli_fetch_assoc($result_blog2);?>
						<li><a href="blog.php?cat=<?php echo strtolower($blog2['blog_category']);?>"><?php echo strtolower($blog2['blog_category']);?></a></li>
						<?php }?>
								</ul>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog page end-->

	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe  <img src="img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->

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
