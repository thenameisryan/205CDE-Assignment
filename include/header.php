<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-social d-flex justify-content-end">
				<p>Follow us:</p>
				<a href="https://www.facebook.com/INTI.edu" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://www.youtube.com/user/NewINTI" target="_blank"><i class="fa fa-youtube"></i></a>
				<a href="https://www.instagram.com/inti_edu/" target="_blank"><i class="fa fa-instagram"></i></a>
				<a href="https://www.linkedin.com/school/inti-international-university-&-colleges/" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="https://twitter.com/INTI_edu" target="_blank"><i class="fa fa-twitter"></i></a>
			</div>
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="home.php" class="site-logo">
					<img src="./img/logo.png" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
						<?php
							if(isset($_SESSION['username']) && isset($_SESSION['user_role'])){
								echo 'Hi, <a href="profile.php">';
								echo $_SESSION["username"]; 
								echo '</a>';
								if($_SESSION['user_role'] =='ADMIN'){
									echo ' | <a href="home.php?logout="1">Log Out</a>';
								}else if($_SESSION['user_role'] =='USER'){
									//echo ' | <a href="order_build.php">Order</a>';
									echo ' | <a href="home.php?logout="1">Log Out</a>';
								}
							}else{
								echo '<a href="login.php">Log In</a> / <a href="register.php">Register</a>';
							}

						?>
					</div>

					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<?php
							if(isset($_SESSION['username']) && isset($_SESSION['user_role'])){
								if($_SESSION['user_role'] =='ADMIN'){
									echo '
						<li><a href="home.php">Home</a></li>
						<li><a href="">List</a>
							<ul class="sub-menu">
								<li><a href="user_list.php">List of Users</a></li>
								<li><a href="product_list.php?cat=all">List of Products</a></li>
								<li><a href="blog_list.php">List of Blogs</a></li>
								<li><a href="contact_list.php">List of Contacts</a></li>
							</ul>
						</li>
						<li><a href="">Add</a>
							<ul class="sub-menu">
								<li><a href="create_user.php">Add New User</a></li>
								<li><a href="add_prod.php">Add New Products</a></li>
						 		<li><a href="create_blog.php">Add New Blog</a></li>
							</ul>
						</li>
						 ';
								}else if($_SESSION['user_role'] =='USER'){
									echo '
						<li><a href="home.php">Home</a></li>
						<!-- <li><a href="hof.php">Hall of Fame</a> -->
							<!-- <ul class="sub-menu">
								<li><a href="game-single.html">Game Singel</a></li>
							</ul> -->
						</li>
						<li><a href="build.php">Start Your Build</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>';
								}
								
							}else{
								echo '
						<li><a href="home.php">Home</a></li>
						<li><a href="build.php">Start Your Build</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>';
							}
						?>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->