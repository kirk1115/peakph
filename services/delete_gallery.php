<?php
include("../includes/config.php");

$result = mysqli_query($dbconnect,
  "DELETE FROM `gallery` WHERE `PostId` = '$_POST[postId]'");

echo mysqli_affected_rows($dbconnect);
?>
