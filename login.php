<?php
include("config.php");
$myusername = stripslashes($_POST['login-username']);
$mypassword = stripslashes($_POST['login-password']);
$message = "Invalid Username or Password";
$query = mysqli_query($dbconnect, "SELECT * FROM users WHERE Username='$myusername' and Password='$mypassword' and Status = '1'");
$id = mysqli_query($dbconnect, "SELECT ID FROM users WHERE Username='$myusername' and Password='$mypassword' and Status ='1'");
$count = mysqli_num_rows($query);
if($count > 0){
	session_start();
	//$_SESSION["LOGIN_STATUS"] = true;
		$member = mysqli_fetch_assoc($query);
    $_SESSION["ID"] = $id;
	header("location:home.php");
}else{
	header("Location: index.php?Message=" . urlencode($message));
}
?>
