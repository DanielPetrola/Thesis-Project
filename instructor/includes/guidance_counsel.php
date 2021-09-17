<?php

if (isset($_POST["submit_next"])) {
	
	$idnum=$_POST["s_id"];
	$lastname=$_POST["s_lname"];
	$firstname=$_POST["s_fname"];
	$middleinitial = $_POST["middleinitial"];
	$course=$_POST["s_course"];
	$yearlevel=$_POST["s_yrlvl"];
	$date1=$_POST["date"];
	$timestart=$_POST["time1"];
	$timeend=$_POST["time2"];
	$venue=$_POST["venue"];
	$reason1=$_POST["reason1"];
	$attendance=$_POST["Attendance"];
	$appearance=$_POST["Appearance"];
	$attitude=$_POST["attitude"];
	$difficulty=$_POST["difficulty"];
	$corrective=$_POST["corrective"];
	$date2=$_POST["next"];
	$comments=$_POST["comments"];
	$commentss=$_POST["commentss"];
	$type = $_POST["type"];
	$uln = $_POST["uln"];
	$ufn = $_POST["ufn"];
	$chk=$_POST["reason"];  
	$gender = $_POST["s_gender"];
	$age=$_POST["s_age"]; 
	$year = $_POST['year'];
	$sem = $_POST['sem'];
	$uid = $_POST['uid'];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	
	createCRecord($conn, $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $date1, $timestart, $timeend, $venue, $reason1, $attendance, $appearance, $attitude, $difficulty, $corrective, $date2, $comments, $commentss, $type, $uln, $ufn, $chk, $gender, $age, $year, $sem, $uid);
	
}

elseif (isset($_POST["submit_next1"])) {
	
	$idnum=$_POST["s_id"];
	$lastname=$_POST["s_lname"];
	$firstname=$_POST["s_fname"];
	$middleinitial = $_POST["middleinitial"];
	$course=$_POST["s_course"];
	$yearlevel=$_POST["s_yrlvl"];
	$date1=$_POST["date"];
	$timestart=$_POST["time1"];
	$timeend=$_POST["time2"];
	$venue=$_POST["venue"];
	$reason1=$_POST["reason1"];
	$attendance=$_POST["Attendance"];
	$appearance=$_POST["Appearance"];
	$attitude=$_POST["attitude"];
	$difficulty=$_POST["difficulty"];
	$corrective=$_POST["corrective"];
	$date2=$_POST["next"];
	$comments=$_POST["comments"];
	$commentss=$_POST["commentss"];
	$type = $_POST["type"];
	$uln = $_POST["uln"];
	$ufn = $_POST["ufn"];
	$chk=$_POST["reason"];  
	$gender = $_POST["s_gender"];
	$age=$_POST["s_age"]; 
	$year = $_POST['year'];
	$sem = $_POST['sem'];
	$time = $_POST['time'];
	$uid = $_POST['uid'];


	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	
	createCARecord($conn, $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $date1, $timestart, $timeend, $venue, $reason1, $attendance, $appearance, $attitude, $difficulty, $corrective, $date2, $comments, $commentss, $type, $uln, $ufn, $chk, $gender, $age, $year, $sem, $time, $uid);
	
}
else {
	header("location: ../counseling/counseling-p0.php");
	exit();
}