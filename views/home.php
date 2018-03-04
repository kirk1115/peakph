<?php
//error_reporting(0);
include("../includes/config.php");
session_start();
if(!isset($_SESSION['ID'])){
  header('location: ../index.php');
}
include("../includes/_header.php");
?>
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
									<a href="../page-blog-post-right-sidebar.php" title="Show Comments"><i class="glyphicon glyphicon-comment icon-white"></i>11</a>
								</div>
							</div>
							<!-- End Post Info -->
							<!-- Post Image -->
							<a href="../page-blog-post-right-sidebar.php"><img src="../img/blog1.jpg" class="post-image" alt="Post Title"></a>
							<!-- End Post Image -->
							<!-- Post Title & Summary -->
							<div class="post-title">
								<h3><a href="../page-blog-post-right-sidebar.php">Post Title</a></h3>
							</div>
							<div class="post-summary">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio. Duis elementum ligula eu ipsum condimentum accumsan.</p>
							</div>
							<!-- End Post Title & Summary -->
							<div class="post-more">
								<a href="../page-blog-post-right-sidebar.php" class="btn btn-small">Read more</a>
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
									<a href="../page-blog-post-right-sidebar.php" title="Show Comments"><i class="glyphicon glyphicon-comment icon-white"></i>16</a>
								</div>
							</div>
							<a href="../page-blog-post-right-sidebar.php"><img src="../img/blog2.jpg" class="post-image" alt="Post Title"></a>
							<div class="post-title">
								<h3><a href="../page-blog-post-right-sidebar.php">Another Post Title</a></h3>
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
							<a href="../page-blog-post-right-sidebar.php"><img src="../img/blog3.jpg" class="post-image" alt="Post Title"></a>
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

<?php include("../includes/_javascripts.php"); ?>
    </body>
</html>
