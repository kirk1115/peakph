<?php
include("../includes/config.php");
session_start();

$followingID = $_GET['followingid'];
$userID = $_SESSION['ID'];

$qry = mysqli_query($dbconnect, "DELETE FROM follow WHERE UserID='$userID' AND FollowingID='$followingID'");

header("Location: ../views/searchbio.php?id=$followingID");
?>
