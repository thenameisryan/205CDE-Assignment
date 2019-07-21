<?php 
include("include/connectdb.php");
$qry_profile = "SELECT * FROM user 
                WHERE userid = '".$_SESSION['user_id']."'";  
$result_profile = mysqli_query($db, $qry_profile);
$user_profile = mysqli_fetch_assoc($result_profile);

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Message « ENDGAME</title>
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
	<script>
	window.onload=function(){
	  	document.getElementById("button_edit_profile").style.display='none';

	}
	function showButton(){
	  	document.getElementById("button_edit_profile").style.display='block';
	}

	function showPass() {
	  	var x = document.getElementById("inputoldPass");
	  	var y = document.getElementById("inputPass1");
	  	var z = document.getElementById("inputPass2");
	  	if (x.type === "password") {
	   		x.type = "text";
	   		document.getElementById("eye").className='fa fa-eye-slash';
	 	} else {
	    	x.type = "password";
	    	document.getElementById("eye").className='fa fa-eye';
	 	}
	 	if (y.type === "password") {
	   		y.type = "text";
	   		document.getElementById("eye").className='fa fa-eye-slash';
	 	} else {
	    	y.type = "password";
	    	document.getElementById("eye").className='fa fa-eye';
	 	}
	 	if (z.type === "password") {
	   		z.type = "text";
	   		document.getElementById("eye").className='fa fa-eye-slash';
	 	} else {
	    	z.type = "password";
	    	document.getElementById("eye").className='fa fa-eye';
	 	}
	}
	</script>

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
			<h2>Change Password</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>Change Password</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
					<form class="contact-form" method="post" action="password_chg.php" autocomplete="off">
						<h5>Click to show password &nbsp; &nbsp; &nbsp;<i class="fa fa-eye" style="font-size:24px" id="eye" onclick="showPass()"></i></h5>
						<hr style="border-bottom: 2px solid rgba(255, 255, 255, 0.54);"> 
						<h3>Old Password</h3>
						<input type="password" name="old_pass" id="inputoldPass" value="" onkeyup="showButton()" autocomplete="new-password">
						<h3>Password</h3>
						<input type="password" name="change_password_1" id="inputPass1" value="" onkeyup="showButton()" autocomplete="new-password">
						<h3>Confirm Password</h3>
						<input type="password" name="change_password_2" id="inputPass2" value="" onkeyup="showButton()" autocomplete="new-password">
						<?php include('errors.php'); ?>
						<button class="site-btn" type="submit" name="edit_pass" id="button_edit_profile">Change Password<img src="img/icons/double-arrow.png" alt="#"/></button>
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
