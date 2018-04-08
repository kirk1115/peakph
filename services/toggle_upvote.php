<?php
include("../includes/config.php");
session_start();
if ($_POST['upvote'] == 'Y') {
  mysqli_query($dbconnect,
    "INSERT INTO `upvotes`(`PostId`, `UserId`) ".
    "VALUES ('$_POST[postId]','".$_SESSION['ID']."')");
} else {
  mysqli_query($dbconnect,
    "DELETE FROM `upvotes` WHERE `PostId` = $_POST[postId] AND `UserId` = $_SESSION[ID]");
}
echo mysqli_affected_rows($dbconnect);
?>
