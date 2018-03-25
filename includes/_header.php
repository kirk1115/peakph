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
		<link rel="stylesheet" href="../css/main-green.css">

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
									<a class="#" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-inbox icon-white"></i><b>(0) Notifications</b></a>
									<ul class="dropdown-menu" role="menu">
										<li role="menuitem"><a href="bio.php">BIO</a></li>
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
										<li role="menuitem"><a href="bio.php">BIO</a></li>
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
            <div class="row header no-margin">
              <div class="col-md-9 no-padding">
  	             <nav id="mainmenu" class="mainmenu">
          					<ul>
          						<li class="logo-wrapper"><a href="home.php"><img src="../img/PeakPH.com.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
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
          							<a href="posts.php">Posts</a>
          						</li>
          						<li>
          							<a href="features.php">Messages</a>
          						</li>
          					</ul>
  				        </nav>
                </div>
                <div class="col-md-3 no-padding">
                    <div class="row no-margin">
                      <form method="post" action="../views/search_user.php">
                      <div class="col-md-9 no-padding">
                        <input class="form-control input-md" name="searchuser" type="text">
                      </div>
                      <div class="col-md-3 no-padding">
                        <button class="btn btn-md" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                      </div>
                    </form>
                    </div>
                </div>
              </div>
			</div>
		</div>
