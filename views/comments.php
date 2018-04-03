<div class="blog-post blog-post-comments">
  <div class="card-subtitle">
    <h3>Comments</h3>
  </div>
  <div class="post-summary">
    <?php
      $result = mysqli_query($dbconnect,
        "SELECT a.Description, CONCAT(b.Fname, ' ', b.MI, '. ', b.Lname) AS Name, b.ProfilePath
        FROM comments a, users b
        WHERE a.UserId = b.ID AND PostId='$_GET[postId]'");
      while ($row = mysqli_fetch_array($result)) {
    ?>
      <div class="row blog-post-comment">
        <div class="col-md-2 col-sm-1">
          <img id="commentImage" class="post-image"
            src="<?php
              if (($row['ProfilePath'] == '') || ($row['ProfilePath'] == null)) {
                echo '../img/profilepic/none.png';
              } else {
              echo 'data:image;base64,'.$row['ProfilePath'];
              }
            ?>"/>
        </div>
        <div class="col-md-10 col-sm-5">
          <p>
            <strong>
              <?php echo $row['Name']; ?>
            </strong>
          </p>
          <p>
            <?php echo $row['Description']; ?>
          </p>
        </div>
      </div>
    <?php
      }
    ?>
  </div>
  <div class="post-summary">
    <form method="POST" action="../services/register_comment.php">
      <input type="hidden" name="postId" value="<?php echo $_GET['postId']; ?>"/>
      <div class="row">
        <div class="col-md-10 col-sm-5">
          <textarea rows="3" class="form-control resize-h-off" name="description"
            placeholder="Comment here..." style="padding: 10px;"></textarea>
        </div>
        <div class="col-md-2 col-sm-1">
          <button class="btn btn-small form-control">Send</button>
        </div>
      </div>
    </form>
  </div>
</div>
