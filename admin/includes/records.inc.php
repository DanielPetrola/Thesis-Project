<?php

if (isset($_POST["submit"])) {
	
	$idnum=$_POST["idnumber"];
	$lastname=$_POST["lastname"];
	$firstname=$_POST["firstname"];
	$middleinitial=$_POST["middleinitial"];
	$course=$_POST["course"];
	$yearlevel=$_POST["yearlevel"];
	$age=$_POST["age"];
	$gender=$_POST["gender"];
	$civilstatus=$_POST["civilstatus"];
	$citizenship=$_POST["citizenship"];
	$religion=$_POST["religion"];
	$birthday=$_POST["birthday"];
	$contact=$_POST["contact"];
	$address=$_POST["address"];
	$scholarship=$_POST["scholarship"];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyRecordsSignup($idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $age, $gender, $civilstatus, $citizenship, $religion, $birthday, $contact, $address, $scholarship) !== false) {
		header("location: ../records/records-p2.php?error=emptyinput");
		exit();
	}
	/*
	if (invalidID($idnum) !== false) {
		header("location: ../records/records-p2.php?error=invalididnumber");
		exit();
	}*/
	
	createRecord($conn, $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $age, $gender, $civilstatus, $citizenship, $religion, $birthday, $contact, $address, $scholarship);
	
}
else {
	header("location: ../records/records-p1.php");
	exit();
}