<?php
include("../includes/config.php");

$fname = $_POST['register-Fname'];
$mi = $_POST['register-MI'];
$lname = $_POST['register-Lname'];
$bday = $_POST['register-Birthday'];
$gender = $_POST['register-Gender'];
$contactnumber = $_POST['register-ContactNumber'];
$email = $_POST['register-Email'];
$address = $_POST['register-Address'];
$username = $_POST['register-Username'];
$password = $_POST['register-Password'];
$secretquestion = $_POST['register-SecretQuestion2'];
$answer = $_POST['register-Answer'];

$qry = mysqli_query($dbconnect, "INSERT INTO users(Fname, MI, Lname, Bday, Gender, ContactNumber, Email, Address, Username, Password, SecretQuestion, Answer, ProfilePath, Status) VALUES('$fname', '$mi', '$lname', '$bday', '$gender', '$contactnumber', '$email', '$address', '$username', '$password', '$secretquestion', '$answer', '', '1')");


header("Location: ../index.php");

?>
