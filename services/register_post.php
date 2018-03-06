<?php
include("../includes/config.php");

$userId = $_POST['userId'];
$title = $_POST['title'];
$location = $_POST['location'];
$details = $_POST['details'];
$totalExpenses = $_POST['totalExpenses'];

$imgContent = base64_encode(file_get_contents($_POST['imgUpload']));
$result = mysqli_query($dbconnect,
"INSERT INTO `posts`(`UserId`, `Title`, `Location`, `Details`, `TotalExpenses`, `CoverPhoto`, `Status`) ".
"VALUES ('$userId','$title','$location','$details','$totalExpenses', '$imgContent','1')");
// $image = $_FILES[$_POST['imgUpload']]['tmp_name'];
echo $result;
?>
