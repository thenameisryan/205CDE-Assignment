<?php 
  session_start(); 
  if (isset($_GET['payment'])) {
  	if ($_GET['payment']=='success') {
  		$_SESSION['success'] = "Payment success. Your order will be processed and you will be updated via e-mail.";
  	}	
  }
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['user_id']);
  	unset($_SESSION['username']);
  	unset($_SESSION['user_role']);
  	unset($_SESSION['user_login']);
  	header("location: home.php");
  }
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Home « ENDGAME</title>
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

	<!-- Alerts section -->
	<?php 
	include("alerts.php");
	?>

	<!-- Header section -->
	<?php 
	include("include/header.php");
	?>
	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slider-bg-1.jpg">
				<div class="container">
					<p>Welcome To</p>
					<h2><font color="#b01ba5">END</font>GAME</h2>
					<p>Who we are? We are a team of professionals with passion towards computers and love to own and customize a fast PC.<br>With years of experience in this field, we provide professional services to all of our clients and ensuring they receive the best quality products and services.</p>
					<!-- <a href="#" class="site-btn">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a> -->
				</div>
			</div>
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slider-bg-2.jpg">
				<div class="container">
					<p style="font-style: italic;">“Built For Pro By Pro”</p>
					<h2>2019</h2><p>Since</p>
					<!-- <a href="#" class="site-btn">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end-->

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
	<script type="text/javascript">
	/*------------------
		Alerts
	--------------------*/
	$(document).ready(function () {
			$('.alert').fadeIn();
				setTimeout(function(){
  			$('.alert').fadeOut()
			}, 10000); 
 	});
	</script>
	</body>
</html>
