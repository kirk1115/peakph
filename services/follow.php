<?php
include("../includes/config.php");
session_start();

$followingID = $_GET['followingid'];
$userID = $_SESSION['ID'];

$qry = mysqli_query($dbconnect, "INSERT INTO follow(ID, UserID, FollowingID) VALUES('', '$userID', '$followingID')");

header("Location: ../views/searchbio.php?id=$followingID");
?>
