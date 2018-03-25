<?php
include("../includes/config.php");
include("../services/upload.php");

$postId = $_POST['postId'];

$tmpImage = '../img/temp.jpg';
$compressedImage = compressImage($_POST['image'], $tmpImage, 90);

$image = base64_encode(file_get_contents($compressedImage));
$result = mysqli_query($dbconnect,
"INSERT INTO `gallery`(`PostId`, `Image`) ".
"VALUES ('$postId','$image')");
echo $result;
?>
