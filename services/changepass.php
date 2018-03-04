<?php
include("../includes/config.php");
$id = stripslashes($_POST['userID']);
$oldpassword = stripslashes($_POST['change-password']);
$newpassword = stripslashes($_POST['change-newpassword']);
$newpassword2 = stripslashes($_POST['change-newpassword2']);
$message = "Password has Successfully Changed.";
$message2 = "New Password is not the same with Re-Entered Password";
$message3 = "Password is invalid";
$qry = mysqli_query($dbconnect, "SELECT Password FROM users WHERE ID='$id'");
while($row = mysqli_fetch_array($qry)):
$password = $row['Password'];
endwhile;

if($oldpassword == $password){
	if($newpassword == $newpassword2){
		$updatepassword = mysqli_query($dbconnect, "UPDATE users SET Password = '$newpassword' WHERE ID = '$id'");
		header("Location: ../views/bio.php?Message=" . urlencode($message));
	}else{
		header("Location: ../views/changepassword.php?Message=" . urlencode($message2));
	}

}else{
	header("Location: ../viewschangepassword.php?Message=" . urlencode($message3));
}

?>
