<?php
//error_reporting(0);
include("../includes/config.php");
session_start();
// if(!isset($_SESSION['ID'])){
//   header('location: index.php');
// }
// if (isset($_GET['Message'])) {
//     print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
// }
include("../includes/_header.php");
?>
    <input type="hidden" id="userId" value="<?php echo $_SESSION['ID']; ?>"/>
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
          <div class="col-md-12 col-sm-6 text-right">
            <button class="btn btn-small" id="btnNewPost">New Post</button>
          </div>
					<!-- Post -->
					<div class="col-md-12 col-sm-6" id="newPost">
						<div class="blog-post">
							<!-- Post Image -->
							<!-- <a href="page-blog-post-right-sidebar.php"><img src="img/blog1.jpg" class="post-image" alt="Post Title"></a> -->
							<!-- End Post Image -->
              <!-- Post Title -->
							<div class="card-header">
								<h3>New Post</h3>
							</div>

              <div class="card-image">
                <img id="imgUpload"/>
              </div>
							<!-- Post Title -->
							<div class="card-subtitle">
								<h3>Title</h3>
							</div>
							<div class="post-summary">
								<input type="text" class="form-control input-md" id="title"/>
							</div>

              <!-- Post Location -->
              <div class="card-subtitle">
                <h3>Location</h3>
              </div>
              <div class="post-summary">
                <input type="text" class="form-control input-md" id="location" placeholder=""/>
              </div>
              <!-- Post Details -->
							<div class="card-subtitle">
								<h3>Details</h3>
							</div>
							<div class="post-summary">
								<textarea rows="4" class="form-control input-md resize-h-off" id="details"></textarea>
							</div>
              <!-- Post Details -->
							<div class="card-subtitle">
								<h3>Total Expenses</h3>
							</div>
							<div class="post-summary">
                <input type="text" class="form-control input-md amount" id="totalExpenses" placeholder="0.00"/>
							</div>
							<!-- End Post Title & Summary -->

              <!-- Photo Gallery -->
              <div class="card-photos">
                <h3>Photo Gallery</h3>
              </div>
              <div class="card-photos post-summary">
                <div class="row">
                  <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide multi-item-carousel" data-ride="carousel">
                      <!-- Indicators -->
                      <!-- <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol> -->

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                      </div>

                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- <div class="row" id="image_preview"></div> -->
              </div>

							<div class="post-more">
								<button class="btn btn-small file-input-parent">Add Cover Photo<input type="file" id="coverPhotoInput" class="file-input" title=" "/></button>
								<button class="btn btn-small file-input-parent">Add Photos<input type="file" id="photosInput" class="file-input" title=" " multiple/></button>
                <button id="btnPost" class="btn btn-small">Post</button>
							</div>
						</div>
					</div>
					<!-- End Post -->
					<div class="col-md-12 col-sm-6">
            <?php
              include("../includes/config.php");

              $userId = $_SESSION['ID'];
              $result = mysqli_query($dbconnect, "SELECT * FROM posts WHERE UserId = '$userId' ORDER BY PostDate DESC");
              while ($row = mysqli_fetch_array($result)) {
            ?>
  						<div class="blog-post">
  							<div class="post-info">
  								<div class="post-date">
  									<div class="date">30 JAN, 2013</div>
  								</div>
  								<div class="post-comments-count">
  									<a href="page-blog-post-right-sidebar.php" title="Show Comments"><i class="glyphicon glyphicon-comment icon-white"></i>16</a>
  								</div>
  							</div>
  							<a href="page-blog-post-right-sidebar.php">
                  <img id="postImage" class="post-image" alt="Post Title" src="<?php echo 'data:image;base64,'.$row['CoverPhoto']; ?>"></a>
  							<div class="post-title">
  								<h3><a href="page-blog-post-right-sidebar.php"><?php echo $row['Title']; ?></a></h3>
  							</div>
  							<div class="post-summary">
  								<p><?php echo $row['Details']; ?></p>
  							</div>
  							<div class="post-more">
  								<a href="page-blog-post-right-sidebar.php" class="btn btn-small">Read more</a>
  							</div>
  						</div>

            <?php } ?>
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
		    			<div class="footer-copyright">&copy; 2018 PeakPH. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->

        <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/maps.googleapis.js"></script>
        <script type="text/javascript" src="../js/jquery.placepicker.js"></script>
        <script type="text/javascript" src="../js/multiple-carousel.js"></script>
        <script type="text/javascript" src="../js/jquery.mask.min.js"></script>
        <script type="text/javascript" src="../js/posts.js"></script>
        <script type="text/javascript" src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <!-- <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script> -->
        <script src="../js/jquery.fitvids.js"></script>
        <script src="../js/jquery.sequence-min.js"></script>
        <script src="../js/jquery.bxslider.js"></script>
        <script src="../js/main-menu.js"></script>
        <script src="../js/template.js"></script>

    </body>
</html>
