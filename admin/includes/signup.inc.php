<?php

if (isset($_POST["submit"])) {
	
	$lastname=$_POST["lastname"];
	$firstname=$_POST["firstname"];
	$middleinitial=$_POST["middleinit"];
	$age=$_POST["age"];
	$gender=$_POST["gender"];
	$birthday=$_POST["birthday"];
	$contact=$_POST["contact"];
	$role=$_POST["role"];
	$position=$_POST["position"];
	$idnum=$_POST["idnumber"];
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	$pwdRepeat=$_POST["pwdrepeat"];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyInputSignup($lastname, $firstname, $middleinitial, $age, $gender, $birthday, $contact, $role, $position, $idnum, $email, $pwd, $pwdRepeat) !== false) {
		echo "<script> alert('Empty input. Try again.'); window.history.back();</script>";
		exit();
	}
	if (invalidEmail($email) !== false) {
		echo "<script> alert('Invalid email. Try again.'); window.history.back();</script>";
		exit();
	}
	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		echo "<script> alert('Passwords do not match. Try again.'); window.history.back();</script>";
		exit();
	}
	if (uidExists($conn, $idnum, $email) !== false) {
		echo "<script> alert('Email or ID number already taken. Try again.'); window.history.back();</script>";
		exit();
	}
	
	createUser($conn, $lastname, $firstname, $middleinitial, $contact, $gender, $age, $birthday, $position, $email, $pwd, $role, $idnum);
	
}
else {
	header("location: ../accounts/accounts-p1.php");
	exit();
}