<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PeakPH</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="../css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="../css/main.css">

        <script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
							<li>
								<div class="dropdown choose-country">
									<!--<a class="#" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-inbox icon-white"></i><b>(0) Notifications</b></a>
									<ul class="dropdown-menu" role="menu">
										<li role="menuitem"><a href="page-product-details.php">BIO</a></li>
										<li role="menuitem"><a href="page-team.php">Followers</a></li>
										<li role="menuitem"><a href="page-team.php">Following</a></li>
										<li role="menuitem"><a href="page-blog-posts.php">Saved Post</a></li>
										<li role="menuitem"><a href="page-register.php">Change Password</a></li>
									</ul>-->
								</div>
							</li>
							<li>
								<div class="dropdown choose-country">
									<!--<a class="#" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i>Profile</a>
									<ul class="dropdown-menu" role="menu">
										<li role="menuitem"><a href="page-product-details.php">BIO</a></li>
										<li role="menuitem"><a href="page-team.php">Followers</a></li>
										<li role="menuitem"><a href="page-team.php">Following</a></li>
										<li role="menuitem"><a href="page-blog-posts.php">Saved Post</a></li>
										<li role="menuitem"><a href="page-register.php">Change Password</a></li>
									</ul>-->
								</div>
							</li>
			        		<!--<li><a href="page-login.php">Login</a></li>-->
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="#"><img src="../img/PeakPH.com.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
						<!--<li class="active">
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="page-blog-posts.php">Newsfeed</a>
						</li>
						<li>
							<a href="page-blog-posts.php">Forums</a>
						</li>
						<li>
							<a href="features.php">Posts</a>
						</li>
						<li>
							<a href="features.php">Messages</a>
						</li>
					</ul>-->
				</nav>
			</div>
		</div>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Logout</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="error-page-wrapper">
							<p>You have Succesfully Logged Out!</p>
							<p>Come back and post more here <a href="../index.php">Login</a>!</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Our Latest Work</h3>
		    			<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-portfolio-item.php"><img src="../img/portfolio6.jpg" alt="Project Name"></a>
							</div>
						</div>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Navigate</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="page-blog-posts.php">Blog</a></li>
		    				<li><a href="page-portfolio-3-columns-2.php">Portfolio</a></li>
		    				<li><a href="page-products-3-columns.php">eShop</a></li>
		    				<li><a href="page-services-3-columns.php">Services</a></li>
		    				<li><a href="page-pricing.php">Pricing</a></li>
		    				<li><a href="page-faq.php">FAQ</a></li>
		    			</ul>
		    		</div>

		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contacts</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
	        				<b>Phone:</b> +44 123 654321<br/>
	        				<b>Fax:</b> +44 123 654321<br/>
	        				<b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-2 col-xs-6">
		    			<h3>Stay Connected</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="#" class="facebook"></a></li>
		    				<li><a href="#" class="twitter"></a></li>
		    				<li><a href="#" class="googleplus"></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2018 HikePH. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

<?php include("../includes/_javascripts.php"); ?>

    </body>
</html>
