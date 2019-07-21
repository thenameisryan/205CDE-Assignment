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
}else{
	$qry_blog = "SELECT * FROM blog";
	$qry_blog2 = "SELECT * FROM blog";
	 
} 
$result_blog = mysqli_query($db, $qry_blog);
$num_result_blog = mysqli_num_rows($result_blog);

$result_blog2 = mysqli_query($db, $qry_blog2);
$num_result_blog2 = mysqli_num_rows($result_blog2);//for cat sort


?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>List of Blogs « ENDGAME</title>
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
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/list.css">
	<!--===============================================================================================-->
	<style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #007bff;
  color: white;
        display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #0066ff
}
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

	<!-- Alerts section -->
	<?php 
	include("alerts.php");
	?>

	<!-- Header section -->
	<?php 
	include("include/header.php");
	?>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="page-info">
			<h2>List of Blogs</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>List of Blogs</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

		<!-- Review section -->
	<section class="review-section">
		<div class="container">
			<div class="widget-item">
				<h4 style="color: #fff;text-transform: uppercase;font-weight: 700;font-style: italic;margin-bottom: 48px;">titles</h4>
					<ul class="blog-filter">
						<li><a href="blog_list.php?cat=all">ALL</a></li>
						<?php for($c=0; $c<$num_result_blog2; $c++){ ?>
						<?php $blog2 = mysqli_fetch_assoc($result_blog2);?>
						<li><a href="blog_list.php?cat=<?php echo strtolower($blog2['blog_category']);?>"><?php echo $blog2['blog_category'];?></a></li>
						<?php }?>
					</ul>
			</div>
			<?php for($c=0; $c<$num_result_blog; $c++){ ?>
			<?php $blog = mysqli_fetch_assoc($result_blog);?>
			<div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="<?php echo $blog['blog_image'];?>" alt="" style="width:361px; height:294px;">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="top-meta"><?php echo substr($blog['blog_date_created'],0,10 );?>  /  in <font color="#b01ba5"><?php echo $blog['blog_category'];?></font></div>
							<h3><?php echo $blog['blog_title'];?></h3>
							<p><?php if(strlen($blog['blog_description'])>30){echo substr($blog['blog_description'],0,30);echo ". . .";}else{;echo substr($blog['blog_description'],0,50);}?></p>
							<a href="edit_blog.php?editblog=<?php echo $blog['blog_id'];?>&no=<?php echo $c+1;?>"><button class="site-btn">Edit<img src="img/icons/double-arrow.png" alt="#"/></button></a>
							<a href="delete_blog.php?deleteblog=<?php echo $blog['blog_id'];?>"><button class="site-btn">Delete<img src="img/icons/double-arrow.png" alt="#"/></button></a>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
			<!-- <div class="site-pagination">
				<a href="#" class="active">01.</a>
				<a href="#">02.</a>
				<a href="#">03.</a>
			</div> -->
		</div>
	</section>
	<!-- Review section end-->

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
	<!--  -->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/select2/select2.min.js"></script>

	</body>
</html>
