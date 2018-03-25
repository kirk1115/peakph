<?php
include("../includes/config.php");

$result = mysqli_query($dbconnect,
"UPDATE `posts` SET Status = 3 WHERE ID = $_POST[postId]");
echo $result;
?>
