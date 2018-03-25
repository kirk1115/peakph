<?php
include("../includes/config.php");

$userId = $_POST['userId'];

$result = mysqli_query($dbconnect, "SELECT * FROM posts WHERE UserId = '$userId'");
// while ($row = mysqli_fetch_array($result)) {
//   echo 'data:image;base64,'.$row[0];
// }
echo json_encode(mysqli_fetch_assoc($result));
?>
