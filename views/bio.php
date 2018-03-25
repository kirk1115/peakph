<?php
//error_reporting(0);
include("../includes/config.php");
session_start();
if(!isset($_SESSION['ID'])){
  header('location: ../index.php');
}
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
include("../includes/_header.php");
?>
    <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>BIO</h1>
					</div>
				</div>
			</div>
		</div>
    <input type="hidden" id="userId" value="$_SESSION['ID']"/>
    <?php $qry = mysqli_query($dbconnect, "SELECT * FROM users WHERE ID=" . $_SESSION['ID'] . ""); while($row = mysqli_fetch_array($qry)): ?>
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<!-- Profile Picture -->
	    			<div class="col-sm-4 divbutton profilepiccenter">
	    					<img id="postImage" class="post-image" src="<?php
                            if ($row['ProfilePath'] != null) {
                              echo 'data:image;base64,'.$row['ProfilePath'];
                            } else {
                              echo '../img/profilepic/none.png';
                            }
                          ?>"></a>
                <a href="#change_pic" role="button" class="btn btn-default pull-right" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></a>
	    			</div>
	    			<!-- End Profile Picture -->
	    			<!-- User Details -->
	    			<div class="col-sm-7">
	    				<h3><?php echo $row['Fname'] . " " . $row['MI'] . " " . $row['Lname']; ?></h3>
              <h5>Details</h5>
                <h5>
                  <label>Bdate:</label><?php echo $row['Bday']; ?><br />
                  <label>Gender:</label><?php echo $row['Gender']; ?><br />
                  <label>Contact Number:</label><?php echo $row['ContactNumber']; ?><br />
                  <label>Email:</label><?php echo $row['Email']; ?><br />
                  <label>Address:</label><?php echo $row['Address']; ?><br />
                </h5>
						</div>
            <div class="col-sm-1">
                <a href="changepassword.php" class="btn pull-right"><i class="glyphicon glyphicon-cog"></i></a>
            </div>
	    			<!-- End User Details -->

	    			<!-- Full Description & Specification -->
	    			<div class="col-sm-12">
	    				<div class="tabbable">
	    					<!-- Tabs -->
							<ul class="nav nav-tabs product-details-nav">
								<li class="active"><a href="#tab1" data-toggle="tab">Followers</a></li>
								<li><a href="#tab2" data-toggle="tab">Following</a></li>
							</ul>
							<!-- Tab Content (Full Description) -->
							<div class="tab-content product-detail-info">
								<div class="tab-pane active" id="tab1">
                  <input type="hidden" id="userId" value="$_SESSION['ID']"/>
                  <?php $qry = mysqli_query($dbconnect, "SELECT * FROM follow F LEFT JOIN users U ON U.ID = F.UserID WHERE F.FollowingID=$_SESSION[ID]"); while($row = mysqli_fetch_array($qry)): ?>
                      <div class="section">
              	    	<div class="container">
              	    		<div class="row">
              	    			<!-- Profile Picture -->
              	    			<div class="col-sm-2 divbutton profilepiccenter2">
              	    					<img id="postImage" class="post-image" alt="Post Title" src="<?php echo 'data:image;base64,'.$row['ProfilePath']; ?>"></a>
              	    			</div>
              	    			<!-- End Profile Picture -->
              	    			<!-- User Details -->
              	    			<div class="col-sm-10">
              	    				<a href="searchbio.php?id=<?php echo $row['ID']; ?>"><h3><?php echo $row['Fname'] . " " . $row['MI'] . " " . $row['Lname']; ?></h3></a>
                            <h5>Details</h5>
                              <h5>
                                <label>Gender:</label><?php echo $row['Gender']; ?><br />
                                <label>Email:</label><?php echo $row['Email']; ?><br />
                              </h5>
              						</div>
              	    		</div>
              			</div>
              		</div>
                  <?php endwhile; ?>
								</div>
								<!-- Tab Content (Specification) -->
								<div class="tab-pane" id="tab2">
                  <input type="hidden" id="userId" value="$_SESSION['ID']"/>
                  <?php $qry = mysqli_query($dbconnect, "SELECT * FROM follow F LEFT JOIN users U ON U.ID = F.FollowingID WHERE F.UserID=$_SESSION[ID]"); while($row = mysqli_fetch_array($qry)): ?>
                      <div class="section">
              	    	<div class="container">
              	    		<div class="row">
              	    			<!-- Profile Picture -->
              	    			<div class="col-sm-2 divbutton profilepiccenter2">
              	    					<img id="postImage" class="post-image" alt="Post Title" src="<?php echo 'data:image;base64,'.$row['ProfilePath']; ?>"></a>
              	    			</div>
              	    			<!-- End Profile Picture -->
              	    			<!-- User Details -->
              	    			<div class="col-sm-10">
              	    				<a href="searchbio.php?id=<?php echo $row['ID']; ?>"><h3><?php echo $row['Fname'] . " " . $row['MI'] . " " . $row['Lname']; ?></h3></a>
                            <h5>Details</h5>
                              <h5>
                                <label>Gender:</label><?php echo $row['Gender']; ?><br />
                                <label>Email:</label><?php echo $row['Email']; ?><br />
                              </h5>
              						</div>
              	    		</div>
              			</div>
              		</div>
                  <?php endwhile; ?>
								</div>
							</div>
						</div>
	    			</div>
	    			<!-- End Full Description & Specification -->
	    		</div>
			</div>
		</div>
    <?php include('../services/modal_changeprofilepic.php'); ?>
    <?php endwhile; ?>

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Our Latest Work</h3>
		    			<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-portfolio-item.html"><img src="../img/portfolio6.jpg" alt="Project Name"></a>
							</div>
						</div>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Navigate</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="page-blog-posts.html">Blog</a></li>
		    				<li><a href="page-portfolio-3-columns-2.html">Portfolio</a></li>
		    				<li><a href="page-products-3-columns.html">eShop</a></li>
		    				<li><a href="page-services-3-columns.html">Services</a></li>
		    				<li><a href="page-pricing.html">Pricing</a></li>
		    				<li><a href="page-faq.html">FAQ</a></li>
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
		    			<div class="footer-copyright">&copy; 2013 mPurpose. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

<?php include("../includes/_javascripts.php"); ?>
    </body>
</html>
