<?php
include("../includes/config.php");

$result = mysqli_query($dbconnect,
"DELETE FROM`posts` WHERE ID = $_POST[postId]");

if ($result = 1) {
  $result = mysqli_query($dbconnect,
  "DELETE FROM `gallery` WHERE PostId = $_POST[postId]");
}
echo $result;
?>
