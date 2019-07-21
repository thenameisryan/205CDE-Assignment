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
	<title>Register « ENDGAME</title>
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
			<h2>Register</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>Register</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

	<!-- Register page -->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-2 order-lg-1">
					<form class="contact-form" method="post" autocomplete="off" action="register.php">
						<input type="text" name="username" placeholder="Your username" autocomplete="new-password" value="<?php if(isset($_POST['username'])) {print htmlspecialchars($_POST['username']);}?>">
						<input type="email" name="email" placeholder="Your e-mail" autocomplete="new-password" value="<?php if(isset($_POST['email'])) {print htmlspecialchars($_POST['email']);}?>">
						<input type="password" name="password_1" placeholder="Your password" value="" autocomplete="new-password">
						<input type="password" name="password_2" placeholder="Retype your password" value="" autocomplete="new-password">
						<!-- <label>Date of Birth</label>
						<select name="dob_day">
							<?php
								for($day=1;$day < 32;$day++){
									echo "<option value='$day'>$day</option>";
								}
							?>
						</select>
						<select name="dob_month">
							<?php
								for($month=1;$month < 13;$month++){
									echo "<option value='$month'>$month</option>";
								}
							?>
						</select>
						<select name="dob_year">
							<?php
								for($year=date('Y');$year >=1910;$year--){
									echo "<option value='$year'>$year</option>";
								}
							?>
						</select> -->
						<?php include('errors.php'); ?>
						<button type="submit" name="reg_user" class="site-btn">Register<img src="img/icons/double-arrow.png" alt="#"/></button>
						<br><br><br>
						<a href="login.php" class="read-more"><label>Already a member? <img src="img/icons/double-arrow.png" alt="#"/></label></a>
						
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
