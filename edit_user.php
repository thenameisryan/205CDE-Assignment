<?php 
include("include/connectdb.php");
//EDIT USER
if (isset($_POST['edit_user'])) {
	
	$email_change = mysqli_real_escape_string($db, $_POST['email_change']);
	$username_change = mysqli_real_escape_string($db, $_POST['username_change']);
	$userid = mysqli_real_escape_string($db, $_POST['edit_user_id']);
	$current_user = mysqli_real_escape_string($db, $_SESSION['user_id']);
	$change_password_1 = mysqli_real_escape_string($db, $_POST['change_password_1']);

	if (empty($email_change)) { array_push($errors, "* Email is required"); }
	if (empty($username_change)) { array_push($errors, "* Username is required"); }
	if (empty($change_password_1)) { array_push($errors, "* Password is required"); }

	if (count($errors) == 0) {
	$password = base64_encode($change_password_1);
  	$query = "UPDATE user
			SET useremail = '$email_change',
			userpass = '$password',
			username = '$username_change'
			WHERE userid = '".$userid."'";
  	mysqli_query($db, $query);
  	$_SESSION['success'] = "User details has been successfully updated.";
  	header('location: user_list.php');
  	}
}

$qry_profile = "SELECT * FROM user 
                WHERE userid = '".$_GET['edituser']."'";  
$result_profile = mysqli_query($db, $qry_profile);
$user_profile = mysqli_fetch_assoc($result_profile);

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Edit User « ENDGAME</title>
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
	  	document.getElementById("button_edit_user").style.display='none';

	}
	function showButton(){
	  	document.getElementById("button_edit_user").style.display='block';
	}
	function showHide() {
		var x = document.getElementById("edit");
		var z = document.getElementById("hidehr");

		if (x.style.display === "none") {
		    x.style.display = "block";
		} else {
		    x.style.display = "none";
		    z.style.display = "none";
		}
	}
	function showHide2() {
		var i = document.getElementById("editname");
		var a = document.getElementById("hidehr2");
		if (i.style.display === "none") {
		    i.style.display = "block";
		} else {
		    i.style.display = "none";
		    a.style.display = "none";
		}
	}
	function showPass() {
	  	var y = document.getElementById("inputPass1");
	  	var z = document.getElementById("inputPass2");
	  
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
			<h2>Edit <?php echo $user_profile['username'];?></h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>Edit <?php echo $user_profile['username'];?></span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
					<form class="contact-form" method="post" action="" autocomplete="off">
						<h5>Click to show password &nbsp; &nbsp; &nbsp;<i class="fa fa-eye" style="font-size:24px" id="eye" onclick="showPass()"></i></h5>
						<hr style="border-bottom: 2px solid rgba(255, 255, 255, 0.54);">
						<h3>Username</h3>
						<input type="text" name="username_change" placeholder="<?php echo $user_profile['username'];?>" value="<?php if(isset($_POST['username_change'])) {print htmlspecialchars($_POST['username_change']);}else{echo $user_profile['username'];}?>" onkeyup="showButton()" autocomplete="new-password"/>
						<h3>Email</h3>
						<input type="email" name="email_change" placeholder="<?php echo $user_profile['useremail'];?>" value="<?php if(isset($_POST['email_change'])) {print htmlspecialchars($_POST['email_change']);}else{echo $user_profile['useremail'];}?>" onkeyup="showButton()" autocomplete="new-password"/>
						<h3>Password</h3>
						<input type="password" name="change_password_1" id="inputPass1" value="<?php if(isset($_POST['change_password_1'])) {print htmlspecialchars($_POST['change_password_1']);}else{echo base64_decode($user_profile['userpass']);}?>" onkeyup="showButton()" autocomplete="new-password">
						<?php include('errors.php'); ?>
						<input type="hidden" name="edit_user_id" value="<?php echo $user_profile['userid'];?>">
						<button class="site-btn" type="submit" name="edit_user" id="button_edit_user">Confirm changes<img src="img/icons/double-arrow.png" alt="#"/></button>
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
