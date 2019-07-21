<?php 
include("include/connectdb.php");
$qry_cont = "SELECT * FROM contact
                WHERE contact_id = '".$_GET['readcont']."'";  
$result_cont = mysqli_query($db, $qry_cont);
$cont = mysqli_fetch_assoc($result_cont);
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
			<h2>Contact No.<?php echo $_GET['no'];?></h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>Contact No.<?php echo $_GET['no'];?></span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Games section -->
	<section class="games-single-page">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					<div class="gs-meta"><?php echo substr($cont['contact_date_created'], 0,10);?>  / <font color="#b01ba5">Date Added</font></div>
					<h2 class="gs-title">Subject: <?php echo $cont['contact_subject'];?></h2>
					<h4>Name</h4>
					<p><?php echo $cont['contact_name'];?></p>
					<h4>Email</h4>
					<p><?php echo $cont['contact_email'];?></p>
					<h4>Contact Description</h4>
					<p><?php if(strlen($cont['contact_message'])>100){$text = wordwrap($cont['contact_message'],100,"<br />\n");echo $text;}else{;echo $cont['contact_message'];}?></p>
					<a href="mailto:<?php echo $cont['contact_email'];?>"><button class="site-btn">Reply<img src="img/icons/double-arrow.png" alt="#"/></button></a>
					<a href="delete_contact.php?deletecont=<?php echo $cont['contact_id'];?>"><button class="site-btn">Delete<img src="img/icons/double-arrow.png" alt="#"/></button></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Games end-->
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
