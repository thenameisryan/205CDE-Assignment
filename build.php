<?php 
include("include/connectdb.php");
$qry_prod_cpu = "SELECT * FROM product WHERE product_category='CPU'"; 
$result_prod_cpu = mysqli_query($db, $qry_prod_cpu);
$num_result_prod_cpu = mysqli_num_rows($result_prod_cpu);

$qry_prod_cpucooler = "SELECT * FROM product WHERE product_category='CPUCOOLER'";
$result_prod_cpucooler = mysqli_query($db, $qry_prod_cpucooler);
$num_result_prod_cpucooler = mysqli_num_rows($result_prod_cpucooler);

$qry_prod_ram = "SELECT * FROM product WHERE product_category='RAM'";  
$result_prod_ram = mysqli_query($db, $qry_prod_ram);
$num_result_prod_ram = mysqli_num_rows($result_prod_ram);

$qry_prod_mboard = "SELECT * FROM product WHERE product_category='MBOARD'";  
$result_prod_mboard = mysqli_query($db, $qry_prod_mboard);
$num_result_prod_mboard = mysqli_num_rows($result_prod_mboard);

$qry_prod_gcard = "SELECT * FROM product WHERE product_category='GCARD'";  
$result_prod_gcard = mysqli_query($db, $qry_prod_gcard);
$num_result_prod_gcard = mysqli_num_rows($result_prod_gcard);

$qry_prod_storage = "SELECT * FROM product WHERE product_category='STORAGE'";  
$result_prod_storage = mysqli_query($db, $qry_prod_storage);
$num_result_prod_storage = mysqli_num_rows($result_prod_storage);

$qry_prod_case = "SELECT * FROM product WHERE product_category='CASE'";  
$result_prod_case = mysqli_query($db, $qry_prod_case);
$num_result_prod_case = mysqli_num_rows($result_prod_case);

$qry_prod_powersup = "SELECT * FROM product WHERE product_category='POWERSUP'"; 
$result_prod_powersup = mysqli_query($db, $qry_prod_powersup);
$num_result_prod_powersup = mysqli_num_rows($result_prod_powersup);

$qry_prod_optdrive = "SELECT * FROM product WHERE product_category='OPTDRIVE'"; 
$result_prod_optdrive = mysqli_query($db, $qry_prod_optdrive);
$num_result_prod_optdrive = mysqli_num_rows($result_prod_optdrive);

$qry_prod_software = "SELECT * FROM product WHERE product_category='SOFTWARE'"; 
$result_prod_software = mysqli_query($db, $qry_prod_software);
$num_result_prod_software = mysqli_num_rows($result_prod_software);

$qry_prod_monitor = "SELECT * FROM product WHERE product_category='MONITOR'";
$result_prod_monitor = mysqli_query($db, $qry_prod_monitor);
$num_result_prod_monitor = mysqli_num_rows($result_prod_monitor);

$qry_prod_other = "SELECT * FROM product WHERE product_category='OTHER'";
$result_prod_other = mysqli_query($db, $qry_prod_other);
$num_result_prod_other = mysqli_num_rows($result_prod_other);

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Start Your Build « ENDGAME</title>
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
	<link rel="stylesheet" type="text/css" href="css/build.css">
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
			<h2>Start Your Build</h2>
			<div class="site-breadcrumb">
				<a href="javascript:history.back()">Back</a>  /
				<span>Start Your Build</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->

	<!-- Build list section -->
	<section class="build-section">
		<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					<form action="build.php" method="post" accept-charset="utf-8">
        				<table class="list">
				           	 <tr>
				                <th>Components</th>
				                <th>Selection</th>
				                <th>Price</th>
				                <th>Quantity</th>
				                <th>Total</th>
				            </tr>
				            <tr class="item">
				    		<td>
						        <a class="add-item" href="javascript:void(0)" title="Add"></a>
						        <a class="remove-item" href="javascript:void(0)" title="Remove"></a>
						    </td>
						    <td>
    							<div class="selectbox">
        							<select class="product" name="cpu">
										<option value="0" selected="selected">1. CPU  --  Total <?php echo $num_result_prod_cpu;?> Products (click to select)</option>
										<?php for($c=0; $c<$num_result_prod_cpu; $c++){ ?>
        								<?php $prod = mysqli_fetch_assoc($result_prod_cpu);?>
									    <option data-price="<?php echo $prod['product_price'];?>" value="<?php echo $prod['product_id'];?>">1. CPU  --  <?php echo $prod['product_name'];?> ( <?php echo $prod['product_desc'];?> ) - RM<?php echo $prod['product_price'];?></option>
							           <!--  <optgroup label="SOCKET 1151"> -->
							            <?php }?>
        							</select>
    							</div>
    						</td>
						    <td>
						        <span class="unitprice">0</span>
						    </td>
						    <td>
						        <noscript class="quantity">
						            <input type="text" name="quantity[]" value="0">
						        </noscript>
						    </td>
						    <td>
						        <span class="item-amount">0</span>
						    </td>
</tr><tr class="item">
				    		<td>
						        <a class="add-item" href="javascript:void(0)" title="Add"></a>
						        <a class="remove-item" href="javascript:void(0)" title="Remove"></a>
						    </td>
						    <td>
    							<div class="selectbox">
        							<select class="product" name="cpucooler">
										<option value="0" selected="selected">2. CPU COOLER  --  Total <?php echo $num_result_prod_cpucooler;?> Products (click to select)</option>
										<?php for($c=0; $c<$num_result_prod_cpucooler; $c++){ ?>
        								<?php $prod = mysqli_fetch_assoc($result_prod_cpucooler);?>
									    <option data-price="<?php echo $prod['product_price'];?>" value="<?php echo $prod['product_id'];?>">2. CPU COOLER  --  <?php echo $prod['product_name'];?> ( <?php echo $prod['product_desc'];?> ) - RM<?php echo $prod['product_price'];?></option>
							           <!--  <optgroup label="SOCKET 1151"> -->
							            <?php }?>
        							</select>
    							</div>
    						</td>
						    <td>
						        <span class="unitprice">0</span>
						    </td>
						    <td>
						        <noscript class="quantity">
						            <input type="text" name="quantity[]" value="0">
						        </noscript>
						    </td>
						    <td>
						        <span class="item-amount">0</span>
						    </td>
</tr><tr class="item">
				    		<td>
						        <a class="add-item" href="javascript:void(0)" title="Add"></a>
						        <a class="remove-item" href="javascript:void(0)" title="Remove"></a>
						    </td>
						    <td>
    							<div class="selectbox">
        							<select class="product" name="ram">
										<option value="0" selected="selected">3. RAM  --  Total <?php echo $num_result_prod_ram;?> Products (click to select)</option>
										<?php for($c=0; $c<$num_result_prod_ram; $c++){ ?>
        								<?php $prod = mysqli_fetch_assoc($result_prod_ram);?>
									    <option data-price="<?php echo $prod['product_price'];?>" value="<?php echo $prod['product_id'];?>">3. RAM  --  <?php echo $prod['product_name'];?> ( <?php echo $prod['product_desc'];?> ) - RM<?php echo $prod['product_price'];?></option>
							           <!--  <optgroup label="SOCKET 1151"> -->
							            <?php }?>
        							</select>
    							</div>
    						</td>
						    <td>
						        <span class="unitprice">0</span>
						    </td>
						    <td>
						        <noscript class="quantity">
						            <input type="text" name="quantity[]" value="0">
						        </noscript>
						    </td>
						    <td>
						        <span class="item-amount">0</span>
						    </td>
</tr><tr class="item">
				    		<td>
						        <a class="add-item" href="javascript:void(0)" title="Add"></a>
						        <a class="remove-item" href="javascript:void(0)" title="Remove"></a>
						    </td>
						    <td>
    							<div class="selectbox">
        							<select class="product" name="mboard">
										<option value="0" selected="selected">4. MOTHERBOARD  --  Total <?php echo $num_result_prod_mboard;?> Products (click to select)</option>
										<?php for($c=0; $c<$num_result_prod_mboard; $c++){ ?>
        								<?php $prod = mysqli_fetch_assoc($result_prod_mboard);?>
									    <option data-price="<?php echo $prod['product_price'];?>" value="<?php echo $prod['product_id'];?>">4. MOTHERBOARD  --  <?php echo $prod['product_name'];?> ( <?php echo $prod['product_desc'];?> ) - RM<?php echo $prod['product_price'];?></option>
							           <!--  <optgroup label="SOCKET 1151"> -->
							            <?php }?>
        							</select>
    							</div>
    						</td>
						    <td>
						        <span class="unitprice">0</span>
						    </td>
						    <td>
						        <noscript class="quantity">
						            <input type="text" name="quantity[]" value="0">
						        </noscript>
						    </td>
						    <td>
						        <span class="item-amount">0</span>
						    </td>
</tr><tr class="item">
				    		<td>
						        <a class="add-item" href="javascript:void(0)" title="Add"></a>
						        <a class="remove-item" href="javascript:void(0)" title="Remove"></a>
						    </td>
						    <td>
    							<div class="selectbox">
        							<select class="product" name="gcard">
										<option value="0" selected="selected">5. GRAPHICS CARD  --  Total <?php echo $num_result_prod_gcard;?> Products (click to select)</option>
										<?php for($c=0; $c<$num_result_prod_gcard; $c++){ ?>
        								<?php $prod = mysqli_fetch_assoc($result_prod_gcard);?>
									    <option data-price="<?php echo $prod['product_price'];?>" value="<?php echo $prod['product_id'];?>">5. GRAPHICS CARD  --  <?php echo $prod['product_name'];?> ( <?php echo $prod['product_desc'];?> ) - RM<?php echo $prod['product_price'];?></option>
							           <!--  <optgroup label="SOCKET 1151"> -->
							            <?php }?>
        							</select>
    							</div>
    						</td>
						    <td>
						        <span class="unitprice">0</span>
						    </td>
						    <td>
						        <noscript class="quantity">
						            <input type="text" name="quantity[]" value="0">
						        </noscript>
						    </td>
						    <td>
						        <span class="item-amount">0</span>
						    </td>
</tr><tr class="item">
				    		<td>
						        <a class="add-item" href="javascript:void(0)" title="Add"></a>
						        <a class="remove-item" href="javascript:void(0)" title="Remove"></a>
						    </td>
						    <td>
    							<div class="selectbox">
        							<select class="product" name="storage">
										<option value="0" selected="selected">6. STORAGE  --  Total <?php echo $num_result_prod_storage;?> Products (click to select)</option>
										<?php for($c=0; $c<$num_result_prod_storage; $c++){ ?>
        								<?php $prod = mysqli_fetch_assoc($result_prod_storage);?>
									    <option data-price="<?php echo $prod['product_price'];?>" value="<?php echo $prod['product_id'];?>">6. STORAGE  --  <?php echo $prod['product_name'];?> ( <?php echo $prod['product_desc'];?> ) - RM<?php echo $prod['product_price'];?></option>
							           <!--  <optgroup label="SOCKET 1151"> -->
							            <?php }?>
        							</select>
    							</div>
    						</td>
						    <td>
						        <span class="unitprice">0</span>
						    </td>
						    <td>
						        <noscript class="quantity">
						            <input type="text" name="quantity[]" value="0">
						        </noscript>
						    </td>
						    <td>
						        <span class="item-amount">0</span>
						    </td>
</tr><tr class="item">
				    		<td>
						        <a class="add-item" href="javascript:void(0)" title="Add"></a>
						        <a class="remove-item" href="javascript:void(0)" title="Remove"></a>
						    </td>
						    <td>
    							<div class="selectbox">
        							<select class="product" name="case">
										<option value="0" selected="selected">7. CASE  --  Total <?php echo $num_result_prod_storage;?> Products (click to select)</option>
										<?php for($c=0; $c<$num_result_prod_case; $c++){ ?>
        								<?php $prod = mysqli_fetch_assoc($result_prod_case);?>
									    <option data-price="<?php echo $prod['product_price'];?>" value="<?php echo $prod['product_id'];?>">7. CASE  --  <?php echo $prod['product_name'];?> ( <?php echo $prod['product_desc'];?> ) - RM<?php echo $prod['product_price'];?></option>
							           <!--  <optgroup label="SOCKET 1151"> -->
							            <?php }?>
        							</select>
    							</div>
    						</td>
						    <td>
						        <span class="unitprice">0</span>
						    </td>
						    <td>
						        <noscript class="quantity">
						            <input type="text" name="quantity[]" value="0">
						        </noscript>
						    </td>
						    <td>
						        <span class="item-amount">0</span>
						    </td>
</tr><tr class="item">
				    		<td>
						        <a class="add-item" href="javascript:void(0)" title="Add"></a>
						        <a class="remove-item" href="javascript:void(0)" title="Remove"></a>
						    </td>
						    <td>
    							<div class="selectbox">
        							<select class="product" name="powersup">
										<option value="0" selected="selected">8. POWER SUPPLY  --  Total <?php echo $num_result_prod_powersup;?> Products (click to select)</option>
										<?php for($c=0; $c<$num_result_prod_powersup; $c++){ ?>
        								<?php $prod = mysqli_fetch_assoc($result_prod_powersup);?>
									    <option data-price="<?php echo $prod['product_price'];?>" value="<?php echo $prod['product_id'];?>">8. POWER SUPPLY  --  <?php echo $prod['product_name'];?> ( <?php echo $prod['product_desc'];?> ) - RM<?php echo $prod['product_price'];?></option>
							           <!--  <optgroup label="SOCKET 1151"> -->
							            <?php }?>
        							</select>
    							</div>
    						</td>
						    <td>
						        <span class="unitprice">0</span>
						    </td>
						    <td>
						        <noscript class="quantity">
						            <input type="text" name="quantity[]" value="0">
						        </noscript>
						    </td>
						    <td>
						        <span class="item-amount">0</span>
						    </td>
</tr><tr class="item">
				    		<td>
						        <a class="add-item" href="javascript:void(0)" title="Add"></a>
						        <a class="remove-item" href="javascript:void(0)" title="Remove"></a>
						    </td>
						    <td>
    							<div class="selectbox">
        							<select class="product" name="optdrive">
										<option value="0" selected="selected">9. OPTICAL DRIVE  --  Total <?php echo $num_result_prod_optdrive;?> Products (click to select)</option>
										<?php for($c=0; $c<$num_result_prod_optdrive; $c++){ ?>
        								<?php $prod = mysqli_fetch_assoc($result_prod_optdrive);?>
									    <option data-price="<?php echo $prod['product_price'];?>" value="<?php echo $prod['product_id'];?>">9. OPTICAL DRIVE  --  <?php echo $prod['product_name'];?> ( <?php echo $prod['product_desc'];?> ) - RM<?php echo $prod['product_price'];?></option>
							           <!--  <optgroup label="SOCKET 1151"> -->
							            <?php }?>
        							</select>
    							</div>
    						</td>
						    <td>
						        <span class="unitprice">0</span>
						    </td>
						    <td>
						        <noscript class="quantity">
						            <input type="text" name="quantity[]" value="0">
						        </noscript>
						    </td>
						    <td>
						        <span class="item-amount">0</span>
						    </td>
</tr><tr class="item">
				    		<td>
						        <a class="add-item" href="javascript:void(0)" title="Add"></a>
						        <a class="remove-item" href="javascript:void(0)" title="Remove"></a>
						    </td>
						    <td>
    							<div class="selectbox">
        							<select class="product" name="software">
										<option value="0" selected="selected">10. SOFTWARE  --  Total <?php echo $num_result_prod_software;?> Products (click to select)</option>
										<?php for($c=0; $c<$num_result_prod_software; $c++){ ?>
        								<?php $prod = mysqli_fetch_assoc($result_prod_software);?>
									    <option data-price="<?php echo $prod['product_price'];?>" value="<?php echo $prod['product_id'];?>">10. SOFTWARE  --  <?php echo $prod['product_name'];?> ( <?php echo $prod['product_desc'];?> ) - RM<?php echo $prod['product_price'];?></option>
							           <!--  <optgroup label="SOCKET 1151"> -->
							            <?php }?>
        							</select>
    							</div>
    						</td>
						    <td>
						        <span class="unitprice">0</span>
						    </td>
						    <td>
						        <noscript class="quantity">
						            <input type="text" name="quantity[]" value="0">
						        </noscript>
						    </td>
						    <td>
						        <span class="item-amount">0</span>
						    </td>
</tr><tr class="item">
				    		<td>
						        <a class="add-item" href="javascript:void(0)" title="Add"></a>
						        <a class="remove-item" href="javascript:void(0)" title="Remove"></a>
						    </td>
						    <td>
    							<div class="selectbox">
        							<select class="product" name="monitor">
										<option value="0" selected="selected">11. MONITOR  --  Total <?php echo $num_result_prod_monitor;?> Products (click to select)</option>
										<?php for($c=0; $c<$num_result_prod_monitor; $c++){ ?>
        								<?php $prod = mysqli_fetch_assoc($result_prod_monitor);?>
									    <option data-price="<?php echo $prod['product_price'];?>" value="<?php echo $prod['product_id'];?>">11. MONITOR  --  <?php echo $prod['product_name'];?> ( <?php echo $prod['product_desc'];?> ) - RM<?php echo $prod['product_price'];?></option>
							           <!--  <optgroup label="SOCKET 1151"> -->
							            <?php }?>
        							</select>
    							</div>
    						</td>
						    <td>
						        <span class="unitprice">0</span>
						    </td>
						    <td>
						        <noscript class="quantity">
						            <input type="text" name="quantity[]" value="0">
						        </noscript>
						    </td>
						    <td>
						        <span class="item-amount">0</span>
						    </td>
</tr><tr class="item">
				    		<td>
						        <a class="add-item" href="javascript:void(0)" title="Add"></a>
						        <a class="remove-item" href="javascript:void(0)" title="Remove"></a>
						    </td>
						    <td>
    							<div class="selectbox">
        							<select class="product" name="other">
										<option value="0" selected="selected">12. ACCESSORIES / OTHER  --  Total <?php echo $num_result_prod_other;?> Products (click to select)</option>
										<?php for($c=0; $c<$num_result_prod_other; $c++){ ?>
        								<?php $prod = mysqli_fetch_assoc($result_prod_other);?>
									    <option data-price="<?php echo $prod['product_price'];?>" value="<?php echo $prod['product_id'];?>">12. ACCESSORIES / OTHER  --  <?php echo $prod['product_name'];?> ( <?php echo $prod['product_desc'];?> ) - RM<?php echo $prod['product_price'];?></option>
							           <!--  <optgroup label="SOCKET 1151"> -->
							            <?php }?>
        							</select>
    							</div>
    						</td>
						    <td>
						        <span class="unitprice">0</span>
						    </td>
						    <td>
						        <noscript class="quantity">
						            <input type="text" name="quantity[]" value="0">
						        </noscript>
						    </td>
						    <td>
						        <span class="item-amount">0</span>
						    </td>
</tr></table>
		</div>
	</div>
</div>

	</section>
	<!-- Build list section end -->

	<!-- proceed section -->
	<section class="proceed-section">
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
			<h5 style="color: white;">Total :</h5><br><h2 style="color: #b01ba5;">RM <div id="amount-price">0</div></h2>
			<a href="build.php"><button class="site-btn">Reset </button></a>
			<?php if(isset($_SESSION['user_id'])) { ?>
			<button type="submit" class="site-btn" name="submit_build">Proceed to Order <img src="img/icons/double-arrow.png" alt="#"/></button>
			<?php }else{ ?>
			<a href="login.php" class="site-btn">Log In </a>
		<?php } ?>
			<br><br><br><br><br><br><br>
		</div>
	</section>
	</form>
	<!-- proceed section end -->

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
	<script type="text/javascript">
		(function($){
    var quantityTemp = '<div class="selectbox disabled"><select class="item-quantity" name="quantity[]">',
        items = $('.list').find('.item'),
        amount = $('#amount-price'),
        prices = [];

    for (var i=0; i<10; i++){
        quantityTemp += '<option value="'+i+'">'+i+'</option>';
    }

    quantityTemp += '</select></div>';
    
    var quantityTemps = '<div class="selectbox disabled"><select class="item-quantity" name="quantity[]">',
        items = $('.list').find('.item'),
        amount2 = $('#amount-price2'),
        prices = [];

    for (var i=0; i<10; i++){
        quantityTemps += '<option value="'+i+'">'+i+'</option>';
    }

    quantityTemps += '</select></div>';

    $('body').on('change', 'select', function(){
        $(this).prev().html($(this).find(':selected').html());
    });

    var calcAmount = function(){
        var price = 0;
        var price2 = 0;
        for (var i=0, len=prices.length; i<len; i++){
            price += prices[i][0] * prices[i][1];
            price2 += prices[i][0] * prices[i][1];
        }
        amount.html(price);
        amount2.html((price2 / 1.06).toFixed(2));
    };

    var changeQuantity = function(obj, i, quantity){
        var $quantity = obj.find('.item-quantity');
        if (quantity == 0){
            $quantity.parent().addClass('disabled');
        } else {
            $quantity.parent().removeClass('disabled');
        }
        $quantity.children().eq(quantity).attr('selected', 'selected').end().trigger('change');
    };

    var init = function(i){
        var $this = $(this),
            clone = $this.clone();

        prices.push([0, 0]);

        $this.addClass('js').on('change', '.product', function(){
            var price = parseInt($(this).find(':selected').attr('data-price')) || 0;
            prices[i][0] = price;

            if (price == 0){
                changeQuantity($this, i, 0);
            } else if (prices[i][1] == 0) {
                changeQuantity($this, i, 1);
            }

            $this.find('.unitprice').html(price);
            $this.find('.item-amount').html(prices[i][0] * prices[i][1]);
            calcAmount();
        }).on('change', '.item-quantity', function(){
            var quantity = parseInt($(this).val()) || 0;
            prices[i][1] = quantity;
            $this.find('.item-amount').html(prices[i][0] * prices[i][1]);
            calcAmount();
        }).on('click', '.add-item', function(){
            var target = $this.next('.new').last().length ? $this.next('.new').last() : $this,
                element = clone.clone().addClass('new');

            init.call(element[0], prices.length);
            target.after(element);
        }).on('click', '.remove-item', function(){
            prices[i] = [0, 0];
            $this.remove();
            calcAmount();
        }).find('.quantity').each(function(){
            $(this).after(quantityTemp).remove();
        }).end().find('.selectbox').each(function(){
            $(this).prepend('<span>'+$(this).find(':selected').html()+'</span>').parent().addClass('js');
        });
    };

    items.each(function(i){
        init.call(this, i);
    });
})(jQuery);
	</script>
	</body>
</html>