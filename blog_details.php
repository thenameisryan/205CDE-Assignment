<?php 
include("include/connectdb.php");
$qry_blog = "SELECT * FROM blog WHERE blog_id = '".$_GET['readblog']."'";  
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
			<h2><?php echo ucfirst($blog['blog_written_by']);?>'s Blog</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span><?php echo ucfirst($blog['blog_written_by']);?>'s Blog</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Games section -->
	<section class="games-single-page">
		<div class="container">
			<div class="game-single-preview">
				<img src="<?php echo $blog['blog_image'];?>" alt="" style="width: 100%;height: 650px;">
			</div>
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					<div class="gs-meta"><?php echo substr($blog['blog_date_created'],0,10 );?>  /  in <font color="#b01ba5"><?php echo $blog['blog_category'];?></font></div>
					<h2 class="gs-title"><?php echo $blog['blog_title'];?></h2>>
					<p><?php echo $blog['blog_description'];?></p>
					<div class="geme-social-share pt-5 d-flex">
						<p>Share:</p>
						<a href="https://www.facebook.com/INTI.edu" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://www.youtube.com/user/NewINTI" target="_blank"><i class="fa fa-youtube"></i></a>
						<a href="https://www.instagram.com/inti_edu/" target="_blank"><i class="fa fa-instagram"></i></a>
						<a href="https://www.linkedin.com/school/inti-international-university-&-colleges/" target="_blank"><i class="fa fa-linkedin"></i></a>
						<a href="https://twitter.com/INTI_edu" target="_blank"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Games end-->

	<section class="game-author-section">
		<div class="container">
			<div class="game-author-pic set-bg" data-setbg="img/author.jpg"></div>
			<div class="game-author-info">
				<h4>Written by: <?php echo $blog['blog_written_by'];?></h4>
				<p>Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincid-unt sit amet sem id varius. Donec elementum aliquet tortor. Curabitur justo mi, efficitur sed eros alique.</p>
			</div>
		</div>
	</section>

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
