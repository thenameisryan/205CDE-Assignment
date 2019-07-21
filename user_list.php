<?php 
include("include/connectdb.php");
$qry_profile = "SELECT * FROM user 
                WHERE userid = '".$_SESSION['user_id']."'";  
$result_profile = mysqli_query($db, $qry_profile);
$user_profile = mysqli_fetch_assoc($result_profile);

$qry_user = "SELECT * FROM user WHERE user_type !='ADMIN'";  
$result_user = mysqli_query($db, $qry_user);
$num_result_user = mysqli_num_rows($result_user);
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>List of Users « ENDGAME</title>
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
			<h2>List of Users</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>List of Users</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- order list section -->
	<section class="order-section">
		<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">User ID</th>
								<th class="column2">User Name</th>
								<th class="column3">Email</th>
								<th class="column4">Password</th>
								<th class="column5">User Type</th>
								<th class="column6">Date created</th>
								<th class="column7">Created by</th>
								<th class="column8">Action</th>
							</tr>
						</thead>
						<tbody>
								<?php for($c=0; $c<$num_result_user; $c++){ ?>
							<?php $user = mysqli_fetch_assoc($result_user);?>
								<tr>
									<td class="column1"><?php echo $user['userid'];?></td>
									<td class="column2"><?php echo $user['username'];?></td>
									<td class="column3"><?php echo $user['useremail'];?></td>
									<td class="column4"><?php echo base64_decode($user['userpass']);?></td>
									<td class="column5"><?php echo $user['user_type'];?></td>
									<td class="column6"><?php echo $user['date_created'];?></td>
									<td class="column7"><?php echo $user['created_by'];?></td>
									<td class="column8">
										<a class="btn btn-primary" href="edit_user.php?edituser=<?php echo $user['userid'];?>" role="button">Edit</a>
										<a class="btn btn-danger" href="delete_user.php?deleteuser=<?php echo $user['userid'];?>" role="button">Delete</a>
									</td>
								</tr>
							<?php }?>	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- order list section end -->

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
