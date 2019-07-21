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
	<title>Profile « ENDGAME</title>
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
	<script>
	window.onload=function(){
	  	document.getElementById("button_edit_profile").style.display='none';

	}
	function showButton(){
	  	document.getElementById("button_edit_profile").style.display='block';
	}
	function showHide() {
		var x = document.getElementById("edit");
		var y = document.getElementById("show");
		if (x.style.display === "none") {
		    x.style.display = "block";
		} else {
		    x.style.display = "none";
		}
		if (y.style.display === "none") {
		    y.style.display = "block";
		} else {
		    y.style.display = "none";
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
			<h2><?php echo $user_profile['username'];?>'s Profile</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span><?php echo $user_profile['username'];?>'s Profile</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
					<form class="contact-form" method="post" action="profile.php" autocomplete="off">
						<h3>Email</h3>
						<h3 class="text-email"><?php echo $user_profile['useremail'];?></h3>
						<a href="#" id="edit" onclick="showHide()">Change Email</a>
						<hr id="show" style="border-bottom: 2px solid rgba(255, 255, 255, 0.54);">
						<h3>Password</h3>
						<a href="password_chg.php">Change Password</a>
						<hr style="border-bottom: 2px solid rgba(255, 255, 255, 0.54);">
						<?php include('errors.php'); ?>
						<button class="site-btn" type="submit" name="edit_profile" id="button_edit_profile">Change Email<img src="img/icons/double-arrow.png" alt="#"/></button>
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
	<script type="text/javascript">
		$('#edit').click(function() {
		 var text = $('.text-email').text();
		 var input = $('<input type="email" name="email_change" placeholder="<?php echo $user_profile['useremail'];?>" value="<?php if(isset($_POST['email_change'])) {print htmlspecialchars($_POST['email_change']);}?>" onkeyup="showButton()" autocomplete="new-password"/>')
		 $('.text-email').text('').append(input);
		});
	</script>

	</body>
</html>
