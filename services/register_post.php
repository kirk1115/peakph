<?php
include("../includes/config.php");
include("../services/upload.php");

$tmpImage = '../img/temp.jpg';
$compressedImage = compressImage($_POST['imgUpload'], $tmpImage, 90);

$userId = $_POST['userId'];
$title = $_POST['title'];
$location = $_POST['location'];
$details = $_POST['details'];
$totalExpenses = $_POST['totalExpenses'];

$imgContent = base64_encode(file_get_contents($compressedImage));
$result = mysqli_query($dbconnect,
"INSERT INTO `posts`(`UserId`, `Title`, `Location`, `Details`, `TotalExpenses`, `CoverPhoto`, `Status`) ".
"VALUES ('$userId','$title','$location','$details','$totalExpenses', '$imgContent','1')");
echo mysqli_insert_id($dbconnect);
?>
