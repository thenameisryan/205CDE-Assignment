<?php 
 include("include/connectdb.php"); 
$qry_prod_cpu = "SELECT * FROM product p INNER JOIN build b WHERE p.product_id = b.cpu ORDER BY b.build_id DESC LIMIT 1"; 
$result_prod_cpu = mysqli_query($db, $qry_prod_cpu);
$qry_prod_cpucooler = "SELECT * FROM product p INNER JOIN build b WHERE p.product_id = b.cpu_cooler ORDER BY b.build_id DESC LIMIT 1"; 
$result_prod_cpucooler = mysqli_query($db, $qry_prod_cpucooler);
$qry_prod_ram = "SELECT * FROM product p INNER JOIN build b WHERE p.product_id = b.ram ORDER BY b.build_id DESC LIMIT 1"; 
$result_prod_ram = mysqli_query($db, $qry_prod_ram);
$qry_prod_mboard = "SELECT * FROM product p INNER JOIN build b WHERE p.product_id = b.motherboard ORDER BY b.build_id DESC LIMIT 1"; 
$result_prod_mboard = mysqli_query($db, $qry_prod_mboard);
$qry_prod_gcard = "SELECT * FROM product p INNER JOIN build b WHERE p.product_id = b.graphics_card ORDER BY b.build_id DESC LIMIT 1"; 
$result_prod_gcard = mysqli_query($db, $qry_prod_gcard);
$qry_prod_storage = "SELECT * FROM product p INNER JOIN build b WHERE p.product_id = b.storage ORDER BY b.build_id DESC LIMIT 1"; 
$result_prod_storage = mysqli_query($db, $qry_prod_storage);
$qry_prod_case = "SELECT * FROM product p INNER JOIN build b WHERE p.product_id = b.casing ORDER BY b.build_id DESC LIMIT 1"; 
$result_prod_case = mysqli_query($db, $qry_prod_case);
$qry_prod_powersup = "SELECT * FROM product p INNER JOIN build b WHERE p.product_id = b.power_supply ORDER BY b.build_id DESC LIMIT 1"; 
$result_prod_powersup = mysqli_query($db, $qry_prod_powersup);
$qry_prod_optdrive = "SELECT * FROM product p INNER JOIN build b WHERE p.product_id = b.optical_drive ORDER BY b.build_id DESC LIMIT 1"; 
$result_prod_optdrive = mysqli_query($db, $qry_prod_optdrive);
$qry_prod_software = "SELECT * FROM product p INNER JOIN build b WHERE p.product_id = b.software ORDER BY b.build_id DESC LIMIT 1"; 
$result_prod_software = mysqli_query($db, $qry_prod_software);
$qry_prod_monitor = "SELECT * FROM product p INNER JOIN build b WHERE p.product_id = b.monitor ORDER BY b.build_id DESC LIMIT 1"; 
$result_prod_monitor = mysqli_query($db, $qry_prod_monitor);
$qry_prod_other = "SELECT * FROM product p INNER JOIN build b WHERE p.product_id = b.other ORDER BY b.build_id DESC LIMIT 1"; 
$result_prod_other = mysqli_query($db, $qry_prod_other);

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Your Build « ENDGAME</title>
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
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->

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
			<h2>Your Build</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>Your Build</span>
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
								<th class="column1">Components</th>
								<th class="column2">Selection</th>
								<th class="column3">Price</th>
								<th class="column4">Quantity</th>
								<th class="column5">Total</th>
							</tr>
						</thead>
						<tbody>
        					<?php $prod = mysqli_fetch_assoc($result_prod_cpu);?>
								<tr>
									<td class="column1">CPU</td>
									<td class="column2"><?php echo $prod['product_name'];?></td>
									<td class="column3"><?php echo $prod['product_price'];?></td>
									<td class="column4"><?php echo $prod['cpu_quantity'];?></td>
									<td class="column5"><?php echo $total_cpu = $prod['product_price']*$prod['cpu_quantity'];?></td>
								</tr>
							<?php $prod = mysqli_fetch_assoc($result_prod_cpucooler);?>
								<tr>
									<td class="column1">CPU COOLER</td>
									<td class="column2"><?php echo $prod['product_name'];?></td>
									<td class="column3"><?php echo $prod['product_price'];?></td>
									<td class="column4"><?php echo $prod['cpucooler_quantity'];?></td>
									<td class="column5"><?php echo $total_cpucooler = $prod['product_price']*$prod['cpucooler_quantity'];?></td>
								</tr>
							<?php $prod = mysqli_fetch_assoc($result_prod_ram);?>
								<tr>
									<td class="column1">RAM</td>
									<td class="column2"><?php echo $prod['product_name'];?></td>
									<td class="column3"><?php echo $prod['product_price'];?></td>
									<td class="column4"><?php echo $prod['ram_quantity'];?></td>
									<td class="column5"><?php echo $total_ram = $prod['product_price']*$prod['ram_quantity'];?></td>
								</tr>
							<?php $prod = mysqli_fetch_assoc($result_prod_mboard);?>
								<tr>
									<td class="column1">MOTHERBOARD</td>
									<td class="column2"><?php echo $prod['product_name'];?></td>
									<td class="column3"><?php echo $prod['product_price'];?></td>
									<td class="column4"><?php echo $prod['mboard_quantity'];?></td>
									<td class="column5"><?php echo $total_mboard = $prod['product_price']*$prod['mboard_quantity'];?></td>
								</tr>
							<?php $prod = mysqli_fetch_assoc($result_prod_gcard);?>
								<tr>
									<td class="column1">GRAPHICS CARD</td>
									<td class="column2"><?php echo $prod['product_name'];?></td>
									<td class="column3"><?php echo $prod['product_price'];?></td>
									<td class="column4"><?php echo $prod['gcard_quantity'];?></td>
									<td class="column5"><?php echo $total_gcard = $prod['product_price']*$prod['gcard_quantity'];?></td>
								</tr>
							<?php $prod = mysqli_fetch_assoc($result_prod_storage);?>
								<tr>
									<td class="column1">STORAGE</td>
									<td class="column2"><?php echo $prod['product_name'];?></td>
									<td class="column3"><?php echo $prod['product_price'];?></td>
									<td class="column4"><?php echo $prod['storage_quantity'];?></td>
									<td class="column5"><?php echo $total_storage = $prod['product_price']*$prod['storage_quantity'];?></td>
								</tr>
							<?php $prod = mysqli_fetch_assoc($result_prod_case);?>
								<tr>
									<td class="column1">CASE</td>
									<td class="column2"><?php echo $prod['product_name'];?></td>
									<td class="column3"><?php echo $prod['product_price'];?></td>
									<td class="column4"><?php echo $prod['casing_quantity'];?></td>
									<td class="column5"><?php echo $total_case = $prod['product_price']*$prod['casing_quantity'];?></td>
								</tr>
							<?php $prod = mysqli_fetch_assoc($result_prod_powersup);?>
								<tr>
									<td class="column1">POWER SUPPLY</td>
									<td class="column2"><?php echo $prod['product_name'];?></td>
									<td class="column3"><?php echo $prod['product_price'];?></td>
									<td class="column4"><?php echo $prod['powersup_quantity'];?></td>
									<td class="column5"><?php echo $total_powersup = $prod['product_price']*$prod['powersup_quantity'];?></td>
								</tr>
							<?php $prod = mysqli_fetch_assoc($result_prod_optdrive);?>
								<tr>
									<td class="column1">OPTICAL DRIVE</td>
									<td class="column2"><?php echo $prod['product_name'];?></td>
									<td class="column3"><?php echo $prod['product_price'];?></td>
									<td class="column4"><?php echo $prod['optdrive_quantity'];?></td>
									<td class="column5"><?php echo $total_optdrive = $prod['product_price']*$prod['optdrive_quantity'];?></td>
								</tr>
							<?php $prod = mysqli_fetch_assoc($result_prod_software);?>
								<tr>
									<td class="column1">SOFTWARE</td>
									<td class="column2"><?php echo $prod['product_name'];?></td>
									<td class="column3"><?php echo $prod['product_price'];?></td>
									<td class="column4"><?php echo $prod['software_quantity'];?></td>
									<td class="column5"><?php echo $total_software = $prod['product_price']*$prod['software_quantity'];?></td>
								</tr>
							<?php $prod = mysqli_fetch_assoc($result_prod_monitor);?>
								<tr>
									<td class="column1">MONITOR</td>
									<td class="column2"><?php echo $prod['product_name'];?></td>
									<td class="column3"><?php echo $prod['product_price'];?></td>
									<td class="column4"><?php echo $prod['monitor_quantity'];?></td>
									<td class="column5"><?php echo $total_monitor = $prod['product_price']*$prod['monitor_quantity'];?></td>
								</tr>
							<?php $prod = mysqli_fetch_assoc($result_prod_other);?>
								<tr>
									<td class="column1">OTHER</td>
									<td class="column2"><?php echo $prod['product_name'];?></td>
									<td class="column3"><?php echo $prod['product_price'];?></td>
									<td class="column4"><?php echo $prod['other_quantity'];?></td>
									<td class="column5"><?php echo $total_other = $prod['product_price']*$prod['other_quantity'];?></td>
								</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- order list section end -->

	<!-- Premium section -->
	<section class="premium-section">
		<div class="container">
			<h2 style="color: white;">10 FREE PREMIUM AFTER SALES SERVICE</h2>
			<h3 style="color: white;">+ FREE Assembly and Installation</h3>
			<h3 style="color: white;">+ FREE Professional Cable Management</h3>
			<h3 style="color: white;">+ Full Years Warranty Covered</h3>
			<h3 style="color: white;">+ 90 days One to One Exchange If Faulty</h3>
			<h3 style="color: white;">+ FREE Warranty Pick-Up and Return</h3>
			<h3 style="color: white;">+ FREE Professional Stress Testing</h3>
			<h3 style="color: white;">+ FREE Lifetime Technical Support</h3>
			<h3 style="color: white;">+ FREE Lifetime Labor Charges</h3>
			<h3 style="color: white;">+ FREE Lifetime Dust Cleaning PC RIG</h3>
			<h3 style="color: white;">+ FREE Update with Latest Hardware BIOS/Firmware/Latest Drivers</h3>
			<hr style="border-bottom: 2px solid rgba(255, 255, 255, 0.54);">
			<h5 style="color: white;">Total :</h5><br><h2 style="color: #b01ba5;">RM <?php echo $total_cpu+$total_cpucooler+$total_ram+$total_mboard+$total_gcard+$total_storage+$total_case+$total_powersup+$total_optdrive+$total_software+$total_monitor+$total_other;?></h2>
			<a href="build.php"><button class="site-back-btn"><img src="img/icons/double-arrow-back.png" alt="#"/>  Back to build</button></a>
			<a href="payment.php"><button class="site-btn">Conform Order  <img src="img/icons/double-arrow.png" alt="#"/></button></a>
			<br><br><br><br><br><br><br>
		</div>
	</section>
	<!-- Premium section end -->

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
