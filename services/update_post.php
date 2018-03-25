<?php
include("../includes/config.php");
include("../services/upload.php");

$imgContent = null;
if ($_POST['coverPhoto'] != null) {
  $tmpImage = '../img/temp.jpg';
  $compressedImage = compressImage($_POST['coverPhoto'], $tmpImage, 90);
  $imgContent = base64_encode(file_get_contents($compressedImage));
}
try {
  $result = mysqli_query($dbconnect,
    "UPDATE posts
    SET Title = '$_POST[title]',
      Location = '$_POST[location]',
      Details = '$_POST[details]',
      TotalExpenses = '$_POST[totalExpenses]'
    WHERE ID = '$_POST[postId]'");

  if ($imgContent != null) {
    $result = mysqli_query($dbconnect,
      "UPDATE posts
      SET CoverPhoto = '$imgContent'
      WHERE ID = '$_POST[postId]'");
  }
  echo mysqli_affected_rows($dbconnect);
} catch (Exception $e) {
  echo $e->errorMessage();
}
?>
