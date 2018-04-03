<?php
include("../includes/config.php");
if ($_POST['description'] != '') {
  session_start();

  mysqli_query($dbconnect,
    "INSERT INTO `comments`(`PostId`, `UserId`, `Description`) ".
    "VALUES ('$_POST[postId]','".$_SESSION['ID']."', '$_POST[description]')");
}
header("Location: ../views/view_post.php?postId=$_POST[postId]");
?>
