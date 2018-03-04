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
								</div>
							</li>
							<li>
								<div class="dropdown choose-country">
								</div>
							</li>
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="#"><img src="../img/peakph.com.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
				</nav>
			</div>
		</div>

		<!-- Homepage Slider -->
        <div class="homepage-slider">
        	<div id="sequence">
				<ul class="sequence-canvas">
					<!-- Slide 1 -->
					<li class="bg4">
						<!-- Slide Title -->
						<h2 class="title">Mount Apo</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">With an altitude of 3,146 metres (10,321.5 ft), Mt. Apo is the highest mountain in the country and is located between Davao City, Davao del Sur province and Cotabato province.</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="../img/mountains/mt apo.jpg" alt="Slide 1" />
					</li>
					<!-- End Slide 1 -->
					<!-- Slide 2 -->
					<li class="bg3">
						<!-- Slide Title -->
						<h2 class="title">Mount Daraitan</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Location: Barangay Daraitan – Tanay, Rizal<br />
											Elevation: 739+ MASL<br />
											Difficulty: 4/9<br />
											Feature: Scenic view of the Sierra Madre range and of Tinipak River</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="../img/mountains/mt daraitan.jpg" alt="Slide 2" />
					</li>
					<!-- End Slide 2 -->
					<!-- Slide 3 -->
					<li class="bg1">
						<!-- Slide Title -->
						<h2 class="title">Mount Batulao</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Location: Nasugbu, Batangas<br />
											Jump-Off Point: KC Hillcrest (Evercret) Golf Course<br />
											Elevation: 811+ MASL<br />
											Difficulty: 4/9 (Pinoy Mountaineer)<br />
											Features: Scenic view of the coastal towns of Batangas. Grass Ridges. 12 Peaks.</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="../img/mountains/mt batulao.jpg" alt="Slide 3" />
					</li>
					<!-- End Slide 3 -->
				</ul>
				<div class="sequence-pagination-wrapper">
					<ul class="sequence-pagination">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</div>
			</div>
        </div>
        <!-- End Homepage Slider -->

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Register</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
					<form role="form" method="POST" action="../services/db_add_user.php">
						<div class="col-sm-6">
							<div class="basic-login">
								<div class="form-group">
									<div class="col-sm-4">
		        				 		<label for="register-Fname"><i class="glyphicon glyphicon-user"></i><b> First Name</b></label>
										<input class="form-control" name="register-Fname" type="text" placeholder="First Name">
									</div>
									<div class="col-sm-4">
										<label for="register-MI"><i class="glyphicon glyphicon-user"></i><b> Middle Initial</b></label>
										<input class="form-control" name="register-MI" type="text" placeholder="Middle Initial">
									</div>
									<div class="col-sm-4">
										<label for="register-Lname"><i class="glyphicon glyphicon-user"></i><b> Last Name</b></label>
										<input class="form-control" name="register-Lname" type="text" placeholder="Last Name">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
		        				 		<label for="register-birthday"><i class="	glyphicon glyphicon-list-alt"></i><b> Birth Date</b></label>
										<input class="form-control" name="register-Birthday" type="date">
									</div>
									<div class="col-sm-6">
		        				 		<label for="register-gender"><i class="glyphicon glyphicon-user"></i><b> Gender</b></label>
										<select class="form-control" name="register-Gender">
			                            	<option value="Male">Male</option>
			                            	<option value="Female">Female</option>
			                        	</select>
									</div>
								</div>
								<div class="form-group">
		        				 	<label for="register-contactnumber"><i class="glyphicon glyphicon-phone"></i><b> Contact Number</b></label>
									<input class="form-control" name="register-ContactNumber" type="number" placeholder="Contact Number">
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="glyphicon glyphicon-envelope"></i><b> Email</b></label>
									<input class="form-control" name="register-Email" type="email" placeholder="Email Address">
								</div>
								<div class="form-group">
		        				 	<label for="register-address"><i class="glyphicon glyphicon-home"></i><b> Address</b></label>
									<textarea class="form-control" name="register-Address" row="4"></textarea>
								</div>

							</div>
						</div>
						<div class="col-sm-6">
							<div class="basic-login">
								<div class="form-group">
		        				 	<label for="register-username"><i class="glyphicon glyphicon-user"></i><b> Username</b></label>
									<input class="form-control" name="register-Username" type="text" placeholder="Username">
								</div>

								<div class="form-group">
		        				 	<label for="register-password"><i class="glyphicon glyphicon-lock"></i><b> Password</b></label>
									<input class="form-control" name="register-Password" type="password" placeholder="Password">
								</div>
								<div class="form-group">
		        				 	<label for="register-password2"><i class="glyphicon glyphicon-lock"></i><b> Re-enter Password</b></label>
									<input class="form-control" name="register-Password2" type="password" placeholder="Re-enter Password">
								</div>
								<div class="form-group">
		        				 	<label for="register-secretquestion"><i class="glyphicon glyphicon-question-sign"></i><b> Secret Question</b></label>
									<select class="form-control" name="register-SecretQuestion2">
			                            <option value="question1">What was your childhood nickname?</option>
			                            <option value="question2">What is the name of your favorite childhood friend?</option>
			                            <option value="question3">What is your favorite team?</option>
			                            <option value="question4">What is your favorite movie?</option></option>
			                            <option value="question5">What was the last name of your third grade teacher?</option>
			                            <option value="question6">What school did you attend for sixth grade?</option>
			                            <option value="question7">In what town was your first job?</option>
			                            <option value="question8">What was the name of the company where you had your first job?</option>
			                        </select>
								</div>
								<div class="form-group">
		        				 	<label for="register-secretquestionanswer"><i class="glyphicon glyphicon-ok-sign"></i><b>Answer</b></label>
									<input class="form-control" name="register-Answer" type="text" placeholder="Answer">
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right">Register</button>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</form>
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
		    			<div class="footer-copyright">&copy; 2013 mPurpose. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

<?php include("../includes/_javascripts.php"); ?>

    </body>
</html>
