<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>HikePH</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="css/main-green.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
									<a class="#" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-inbox icon-white"></i><b>(0) Notifications</b></a>
									<ul class="dropdown-menu" role="menu">
										<li role="menuitem"><a href="page-product-details.php">BIO</a></li>
										<li role="menuitem"><a href="page-team.php">Followers</a></li>
										<li role="menuitem"><a href="page-team.php">Following</a></li>
										<li role="menuitem"><a href="page-blog-posts.php">Saved Post</a></li>
										<li role="menuitem"><a href="page-register.php">Change Password</a></li>
									</ul>
								</div>
							</li>
							<li>
								<div class="dropdown choose-country">
									<a class="#" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i>Profile</a>
									<ul class="dropdown-menu" role="menu">
										<li role="menuitem"><a href="page-product-details.php">BIO</a></li>
										<li role="menuitem"><a href="page-team.php">Followers</a></li>
										<li role="menuitem"><a href="page-team.php">Following</a></li>
										<li role="menuitem"><a href="page-blog-posts.php">Saved Post</a></li>
										<li role="menuitem"><a href="page-register.php">Change Password</a></li>
									</ul>
								</div>
							</li>
			        		<li><a href="logout.php">Logout</a></li>
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="home.php"><img src="img/peakph.com.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
						<li class="active">
							<a href="home.php">Home</a>
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
					</ul>
				</nav>
			</div>
		</div>

		<!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Blog Posts</h1>
					</div>
				</div>
			</div>
		</div>
        
        <!-- Posts List -->
        <div class="section blog-posts-wrapper">
	    	<div class="container">
				<div class="col-md-9 row">
					<!-- Post -->
					<div class="col-md-12 col-sm-6">
						<div class="blog-post">
							<!-- Post Info -->
							<div class="post-info">
								<div class="post-date">
									<div class="date">30 JAN, 2013</div>
								</div>
								<div class="post-comments-count">
									<a href="page-blog-post-right-sidebar.php" title="Show Comments"><i class="glyphicon glyphicon-comment icon-white"></i>11</a>
								</div>
							</div>
							<!-- End Post Info -->
							<!-- Post Image -->
							<a href="page-blog-post-right-sidebar.php"><img src="img/blog1.jpg" class="post-image" alt="Post Title"></a>
							<!-- End Post Image -->
							<!-- Post Title & Summary -->
							<div class="post-title">
								<h3><a href="page-blog-post-right-sidebar.php">Post Title</a></h3>
							</div>
							<div class="post-summary">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio. Duis elementum ligula eu ipsum condimentum accumsan.</p>
							</div>
							<!-- End Post Title & Summary -->
							<div class="post-more">
								<a href="page-blog-post-right-sidebar.php" class="btn btn-small">Read more</a>
							</div>
						</div>
					</div>
					<!-- End Post -->
					<div class="col-md-12 col-sm-6">
						<div class="blog-post">
							<div class="post-info">
								<div class="post-date">
									<div class="date">30 JAN, 2013</div>
								</div>
								<div class="post-comments-count">
									<a href="page-blog-post-right-sidebar.php" title="Show Comments"><i class="glyphicon glyphicon-comment icon-white"></i>16</a>
								</div>
							</div>
							<a href="page-blog-post-right-sidebar.php"><img src="img/blog2.jpg" class="post-image" alt="Post Title"></a>
							<div class="post-title">
								<h3><a href="page-blog-post-right-sidebar.php">Another Post Title</a></h3>
							</div>
							<div class="post-summary">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio. Duis elementum ligula eu ipsum condimentum accumsan.</p>
							</div>
							<div class="post-more">
								<a href="page-blog-post-right-sidebar.php" class="btn btn-small">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-6">
						<div class="blog-post">
							<div class="post-info">
								<div class="post-date">
									<div class="date">30 JAN, 2013</div>
								</div>
								<div class="post-comments-count">
									<a href="page-blog-post-right-sidebar.php" title="Show Comments"><i class="glyphicon glyphicon-comment icon-white"></i>57</a>
								</div>
							</div>
							<a href="page-blog-post-right-sidebar.php"><img src="img/blog3.jpg" class="post-image" alt="Post Title"></a>
							<div class="post-title">
								<h3><a href="page-blog-post-right-sidebar.php">Yet Another Post Title</a></h3>
							</div>
							<div class="post-summary">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio. Duis elementum ligula eu ipsum condimentum accumsan.</p>
							</div>
							<div class="post-more">
								<a href="page-blog-post-right-sidebar.php" class="btn btn-small">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar -->
				<div class="col-md-3 row">
					<div class="col-sm-12 blog-sidebar">
						<h4>Search our Blog</h4>
						<form>
							<div class="input-group">
								<input class="form-control input-md" id="appendedInputButtons" type="text">
								<span class="input-group-btn">
									<button class="btn btn-md" type="button">Search</button>
								</span>
							</div>
						</form>
						<h4>Recent Posts</h4>
						<ul class="recent-posts">
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Sed sit amet metus sit</a></li>
							<li><a href="#">Nunc et diam volutpat tellus ultrices</a></li>
							<li><a href="#">Quisque sollicitudin cursus felis</a></li>
						</ul>
						<h4>Categories</h4>
						<ul class="blog-categories">
							<li><a href="#">Lorem ipsum</a></li>
							<li><a href="#">Sed sit amet metus</a></li>
							<li><a href="#">Nunc et diam </a></li>
							<li><a href="#">Quisque</a></li>
						</ul>
						<h4>Archive</h4>
						<ul>
							<li><a href="#">January 2013</a></li>
							<li><a href="#">February 2013</a></li>
							<li><a href="#">March 2013</a></li>
							<li><a href="#">April 2013</a></li>
							<li><a href="#">May 2013</a></li>
						</ul>
					</div>
				</div>
					<!-- End Sidebar -->
			</div>
	    </div>
	    <!-- End Posts List -->

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Our Latest Work</h3>
		    			<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-portfolio-item.php"><img src="img/portfolio6.jpg" alt="Project Name"></a>
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
		    			<div class="footer-copyright">&copy; 2018 PeakPH. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>

    </body>
</html>