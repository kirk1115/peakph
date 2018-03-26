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
          <h1>Blog Post</h1>
        </div>
      </div>
    </div>
  </div>

  <?php
    include ('../includes/config.php');

    $result = mysqli_query($dbconnect, "SELECT * FROM posts WHERE ID = '$_GET[postId]'");
    while ($row = mysqli_fetch_row($result)) {
  ?>
  <input type="hidden" id="postId" value="<?php echo $_GET['postId']; ?>"/>
    <!-- Post -->
  <div class="section blog-posts-wrapper">
    <div class="container">
      <div class="col-md-9 row">
        <!-- Post -->
        <div class="col-md-12 col-sm-6">
          <div class="blog-post">
            <div class="card-image" style="display: block;">
              <img src="<?php
                    if ($row[6] != null) {
                      echo 'data:image;base64,'.$row[6];
                    } else {
                      echo '../img/image-not-found.jpg';
                    }
                  ?>"/>
            </div>
            <!-- Post Title -->
            <div class="card-subtitle">
              <h3>Title</h3>
            </div>
            <div class="post-summary">
              <span><p><?php echo $row[2]; ?></p></span>
            </div>

            <!-- Post Location -->
            <div class="card-subtitle">
              <h3>Location</h3>
            </div>
            <div class="post-summary">
              <span><p><?php echo $row[3]; ?></p></span>
            </div>
            <!-- Post Details -->
            <div class="card-subtitle">
              <h3>Details</h3>
            </div>
            <div class="post-summary">
              <span><p><?php echo $row[4]; ?></p></span>
            </div>
            <!-- Post Details -->
            <div class="card-subtitle">
              <h3>Total Expenses</h3>
            </div>
            <div class="post-summary">
              <span><p><?php echo $row[5]; ?></p></span>
            </div>
            <!-- End Post Title & Summary -->

            <?php
              $hasGallery = (mysqli_num_rows(mysqli_query($dbconnect, "SELECT * FROM gallery WHERE PostId = '$_GET[postId]'")) > 0);
            ?>

            <!-- Photo Gallery -->
            <div class="card-photos" style="display: <?php if ($hasGallery) { echo 'block'; } else { echo 'none'; }?>;">
              <h3>Photo Gallery</h3>
            </div>
            <div class="card-photos post-summary" style="display: <?php if ($hasGallery) { echo 'block'; } else { echo 'none'; }?>;">
              <div class="row">
                <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide multi-item-carousel" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <?php
                        $result = mysqli_query($dbconnect, "SELECT * FROM gallery WHERE PostId = '$_GET[postId]'");
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                      <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? "active" : "";?>"></li>
                      <?php
                          $i++;
                        }
                      ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <?php
                        include ('../includes/config.php');

                        $result = mysqli_query($dbconnect, "SELECT * FROM gallery WHERE PostId = '$_GET[postId]'");
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                      <div class="item <?php echo ($i == 0) ? "active" : "";?>">
                        <div class='col-xs-4'>
                          <a href="#">
                            <img class='img-responsive' src='<?php echo 'data:image;base64,'.$row['Image']; ?>'/>
                          </a>
                        </div>
                        <!-- For the next two image on the current slide -->
                        <?php
                          $result2 = mysqli_query($dbconnect, "
                            SELECT * FROM GALLERY
                            WHERE PostId = '$_GET[postId]' AND ID IN (".($row['ID'] + 1).", ".($row['ID'] + 2).")
                              OR (SELECT MAX(ID) FROM gallery WHERE PostId = '$_GET[postId]' GROUP BY PostId) = ".$row['ID']."
                                AND (ID = (SELECT MIN(ID) FROM gallery WHERE PostId = '$_GET[postId]' GROUP BY PostId)
                              OR ID = (SELECT MIN(ID) + 1 FROM gallery WHERE PostId = '$_GET[postId]' GROUP BY PostId))
                              OR (SELECT MAX(ID) - 1 FROM gallery WHERE PostId = '$_GET[postId]' GROUP BY PostId) = ".$row['ID']."
                                AND ID = (SELECT MIN(ID) FROM gallery WHERE PostId = '$_GET[postId]' GROUP BY PostId)");
                          while ($row2 = mysqli_fetch_assoc($result2)) {
                        ?>
                        <div class='col-xs-4'>
                          <a href="#">
                            <img class='img-responsive' src='<?php echo 'data:image;base64,'.$row2['Image']; ?>'/>
                          </a>
                        </div>
                        <?php
                          }
                        ?>
                      </div>
                      <?php
                        $i = $i + 1;
                        }
                      ?>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <?php if(!isset($_GET['view'])) { ?>
              <div class="post-more">
                <input type="button" id="btnSetAsPrivate" class="btn btn-small file-input-parent" value="Set as Private"/>
                <input type="button" id="btnRemovePost" class="btn btn-small file-input-parent" value="Remove Post"/>
                <a href="../views/empty_post.php?postId=<?php echo $_GET['postId']; ?>" class="btn btn-small file-input-parent">Edit Post</a>
              </div>
            <?php } else { ?>
              <div class="post-more">
                <a href="../views/newsfeed.php" class="btn btn-small">Back</a>
              </div>
            <?php } ?>
          </div>
        </div>
        <!-- End Post -->
        <?php
          }
        ?>
      </div>
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
        <!-- <script type="text/javascript" src="../js/maps.googleapis.js"></script> -->
        <script type="text/javascript" src="../js/jquery.placepicker.js"></script>
        <script type="text/javascript" src="../js/multiple-carousel.js"></script>
        <script type="text/javascript" src="../js/jquery.mask.min.js"></script>
        <script type="text/javascript" src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <!-- <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script> -->
        <script src="../js/jquery.fitvids.js"></script>
        <script src="../js/jquery.sequence-min.js"></script>
        <script src="../js/jquery.bxslider.js"></script>
        <script src="../js/main-menu.js"></script>
        <script src="../js/template.js"></script>
        <script src="../js/upload.js"></script>
        <script src="../js/view_post.js"></script>

    </body>
</html>
