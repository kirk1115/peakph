<?php
//error_reporting(0);
include("../includes/config.php");
session_start();
if(!isset($_SESSION['ID'])){
  header('location: index.php');

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
						<h1>Change My Password</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<div class="basic-login">
              <?php $qry = mysqli_query($dbconnect, "SELECT * FROM users WHERE ID = '".$_SESSION['ID']."'");
              while($row = mysqli_fetch_array($qry)) { ?>
							<form  role="form" method="POST" action="../services/changepass.php">
                <input type="hidden" value="<?php echo 'cc'; ?>" name="userID">
								<div class="form-group">
		        				 	<label for="change-password"><i class="glyphicon glyphicon-lock"></i> <b>Enter your Old Password</b></label>
									<input class="form-control" name="change-password" type="password" placeholder="Old Password">
								</div>
                <div class="form-group">
		        				 	<label for="change-newpassword"><i class="glyphicon glyphicon-lock"></i> <b>Enter your New Password</b></label>
									<input class="form-control" name="change-newpassword" type="password" placeholder="New Password">
								</div>
                <div class="form-group">
		        				 	<label for="change-newpassword"><i class="glyphicon glyphicon-lock"></i> <b>Re-Enter your New Password</b></label>
									<input class="form-control" name="change-newpassword2" type="password" placeholder="Re-Enter New Password">
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right"><i class="glyphicon glyphicon-ok"></i> Change Password</button>
									<div class="clearfix"></div>
								</div>
							</form>
            <?php } ?>
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
								<a href="page-portfolio-item.html"><img src="img/portfolio6.jpg" alt="Project Name"></a>
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
