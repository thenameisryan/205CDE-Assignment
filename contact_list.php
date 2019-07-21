<?php 
include("include/connectdb.php");
if(!isset($_GET['sub']) or $_GET['sub'] == 'all'){
	$qry_cont = "SELECT * FROM contact"; 
}elseif ($_GET['sub'] == 'a'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'a%' or contact_subject LIKE 'A%'";   
}elseif ($_GET['sub'] == 'b') {
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'b%' or contact_subject LIKE 'B%'"; 
}elseif ($_GET['sub'] == 'c') {
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'c%' or contact_subject LIKE 'C%'"; 
}elseif ($_GET['sub'] == 'd') {
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'd%' or contact_subject LIKE 'D%'"; 
}elseif ($_GET['sub'] == 'e') {
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'e%' or contact_subject LIKE 'E%'"; 
}elseif ($_GET['sub'] == 'f') {
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'f%' or contact_subject LIKE 'F%'"; 
}elseif ($_GET['sub'] == 'g') {
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'g%' or contact_subject LIKE 'G%'"; 
}elseif ($_GET['sub'] == 'f') {
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'h%' or contact_subject LIKE 'H%'"; 
}elseif ($_GET['sub'] == 'h') {
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'i%' or contact_subject LIKE 'I%'"; 
}elseif ($_GET['sub'] == 'j') {
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'j%' or contact_subject LIKE 'J%'"; 
}elseif ($_GET['sub'] == 'k') {
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'k%' or contact_subject LIKE 'K%'"; 
}elseif ($_GET['sub'] == 'l'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'l%' or contact_subject LIKE 'L%'"; 
}elseif ($_GET['sub'] == 'm'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'm%' or contact_subject LIKE 'M%'";   
}elseif ($_GET['sub'] == 'n'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'n%' or contact_subject LIKE 'N%'";   
}elseif ($_GET['sub'] == 'o'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'o%' or contact_subject LIKE 'O%'";   
}elseif ($_GET['sub'] == 'p'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'p%' or contact_subject LIKE 'P%'";   
}elseif ($_GET['sub'] == 'q'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'q%' or contact_subject LIKE 'Q%'";  
}elseif ($_GET['sub'] == 'r'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'r%' or contact_subject LIKE 'R%'";   
}elseif ($_GET['sub'] == 's'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 's%' or contact_subject LIKE 'S%'";  
}elseif ($_GET['sub'] == 't'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 't%' or contact_subject LIKE 'T%'";   
}elseif ($_GET['sub'] == 'u'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'u%' or contact_subject LIKE 'U%'";   
}elseif ($_GET['sub'] == 'v'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'v%' or contact_subject LIKE 'V%'";   
}elseif ($_GET['sub'] == 'w'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'w%' or contact_subject LIKE 'W%'";   
}elseif ($_GET['sub'] == 'x'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'x%' or contact_subject LIKE 'X%'";   
}elseif ($_GET['sub'] == 'y'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'y%' or contact_subject LIKE 'Y%'";   
}elseif ($_GET['sub'] == 'z'){
	$qry_cont = "SELECT * FROM contact WHERE contact_subject LIKE 'z%' or contact_subject LIKE 'Z%'";   
}
$result_cont = mysqli_query($db, $qry_cont);
$num_result_cont = mysqli_num_rows($result_cont);


?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>List of Contacts « ENDGAME</title>
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
			<h2>List of Contacts</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>List of Contacts</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

		<!-- Review section -->
	<section class="review-section">
		<div class="container">
			<div class="widget-item">
				<h4 style="color: #fff;text-transform: uppercase;font-weight: 700;font-style: italic;margin-bottom: 48px;">subject name</h4>
					<ul class="blog-filter">
						<li><a href="contact_list.php?sub=all">ALL</a></li>
						<li><a href="contact_list.php?sub=a">A</a></li>
						<li><a href="contact_list.php?sub=b">B</a></li>
						<li><a href="contact_list.php?sub=c">C</a></li>
						<li><a href="contact_list.php?sub=d">D</a></li>
						<li><a href="contact_list.php?sub=e">E</a></li>
						<li><a href="contact_list.php?sub=f">F</a></li>
						<li><a href="contact_list.php?sub=g">G</a></li>
						<li><a href="contact_list.php?sub=h">H</a></li>
						<li><a href="contact_list.php?sub=i">I</a></li>
						<li><a href="contact_list.php?sub=j">J</a></li>
						<li><a href="contact_list.php?sub=k">K</a></li>
						<li><a href="contact_list.php?sub=l">L</a></li>
						<li><a href="contact_list.php?sub=m">M</a></li>
						<li><a href="contact_list.php?sub=n">N</a></li>
						<li><a href="contact_list.php?sub=o">O</a></li>
						<li><a href="contact_list.php?sub=p">P</a></li>
						<li><a href="contact_list.php?sub=q">Q</a></li>
						<li><a href="contact_list.php?sub=r">R</a></li>
						<li><a href="contact_list.php?sub=s">S</a></li>
						<li><a href="contact_list.php?sub=t">T</a></li>
						<li><a href="contact_list.php?sub=u">U</a></li>
						<li><a href="contact_list.php?sub=v">V</a></li>
						<li><a href="contact_list.php?sub=w">W</a></li>
						<li><a href="contact_list.php?sub=x">X</a></li>
						<li><a href="contact_list.php?sub=y">Y</a></li>
						<li><a href="contact_list.php?sub=z">Z</a></li>
					</ul>
			</div>
			<?php for($c=0; $c<$num_result_cont; $c++){ ?>
			<?php $cont = mysqli_fetch_assoc($result_cont);?>
			<div class="review-item">
				<div class="row">
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="top-meta">Contact No.<?php echo $c+1;?></div>
							<h3>Subject: <font color="#b01ba5"><?php echo $cont['contact_subject'];?></font></h3>
							<p style="color:white;">
							Contact Description:<br><?php if(strlen($cont['contact_message'])>30){echo substr($cont['contact_message'],0,30);echo ". . .";}else{;echo substr($cont['contact_message'],0,50);}?>
							</p>
							<a href="read_contact.php?readcont=<?php echo $cont['contact_id'];?>&no=<?php echo $c+1;?>"><button class="site-btn">Read More<img src="img/icons/double-arrow.png" alt="#"/></button></a>
							<a href="delete_contact.php?deletecont=<?php echo $cont['contact_id'];?>"><button class="site-btn">Delete<img src="img/icons/double-arrow.png" alt="#"/></button></a>
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
