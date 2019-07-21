<?php
include("include/connectdb.php");
if (isset($_SESSION['user_role'])) {
	echo "<script type='text/javascript'>
            window.location.href = 'home.php?msg=redirect'
      </script>";

}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Log In « ENDGAME</title>
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
			<h2>Log In</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>Log In</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

	<!-- Login page -->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-2 order-lg-1">
					<form class="contact-form" autocomplete="off" method="post" action="login.php">
						<input type="text" name="username" placeholder="username/e-mail" autocomplete="new-password" value="<?php if(isset($_POST['username'])) {print htmlspecialchars($_POST['username']);}?>">
						<input type="password" name="password" placeholder="password" autocomplete="new-password">
						<?php include('errors.php'); ?>
						<button type="submit" name="login_user" class="site-btn">Log In<img src="img/icons/double-arrow.png" alt="#"/></button>
						<br><br><br>
						<a href="register.php" class="read-more"><label>Not a member? <img src="img/icons/double-arrow.png" alt="#"/></label></a>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Login page end -->

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
