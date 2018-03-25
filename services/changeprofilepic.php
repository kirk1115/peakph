<?php
include("../includes/config.php");
session_start();

$profilepic = base64_encode(file_get_contents($_POST['imgUpload']));

$result = mysqli_query($dbconnect, "UPDATE users SET ProfilePath = '$profilepic' WHERE ID =" . $_SESSION['ID'] . "");
echo $_SESSION['ID'];

//header("Location: ../views/bio.php");
?>
