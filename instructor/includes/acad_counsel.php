<?php

if (isset($_POST["submit_submit"])) {
	
	$idnum=$_POST["s_id"];
	$lastname=$_POST["s_lname"];
	$firstname=$_POST["s_fname"];
	$middleinitial=$_POST["middleinitial"];
	$course=$_POST["s_course"];
	$yearlevel=$_POST["s_yrlvl"];
	$date=$_POST["date"];
	$timestart=$_POST["time1"];
	$timeend=$_POST["time2"];
	$venue=$_POST["venue"];
	$subject=$_POST["subject"];
	$section=$_POST["section"];
	$problem=$_POST["problem"];
	$action=$_POST["action"];
	$recommendation=$_POST["recommendation"];
	$type = $_POST["type"];
	$uid = $_POST["uid"];
	$uln = $_POST["uln"];
	$ufn = $_POST["ufn"];
	$chk = $_POST["reason"];
	$gender = $_POST["s_gender"];
	$age=$_POST["s_age"]; 
	$year = $_POST['year'];
	$sem = $_POST['sem'];
	
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	
	
	createARecord($conn, $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $date, $timestart, $timeend, $venue, $subject, $section, $problem, $action, $recommendation, $type, $uid, $uln, $ufn, $chk, $gender, $age, $year, $sem);
	
}


elseif (isset($_POST["submit_endorse"])) {
	
	$idnum=$_POST["s_id"];
	$lastname=$_POST["s_lname"];
	$firstname=$_POST["s_fname"];
	$middleinitial=$_POST["middleinitial"];
	$course=$_POST["s_course"];
	$yearlevel=$_POST["s_yrlvl"];
	$date=$_POST["date"];
	$timestart=$_POST["time1"];
	$timeend=$_POST["time2"];
	$venue=$_POST["venue"];
	$subject=$_POST["subject"];
	$section=$_POST["section"];
	$problem=$_POST["problem"];
	$action=$_POST["action"];
	$recommendation=$_POST["recommendation"];
	$type = $_POST["type"];
	$uid = $_POST["uid"];
	$uln = $_POST["uln"];
	$ufn = $_POST["ufn"];
	$chk = $_POST["reason"];
	$gender = $_POST["s_gender"];
	$age=$_POST["s_age"]; 
	$year = $_POST['year'];
	$sem = $_POST['sem'];
	
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	
	
	createAERecord($conn, $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $date, $timestart, $timeend, $venue, $subject, $section, $problem, $action, $recommendation, $type, $uid, $uln, $ufn, $chk, $gender, $age, $year, $sem);
	
}

elseif (isset($_POST["ack_btn"])) {
	
	// $lastname=$_POST["uln"];
	// $firstname=$_POST["ufn"];
	
	$time = $_POST['time'];
	require_once 'dbh.inc.php';
	$sql = "UPDATE crecords1 set status='Finished' where corrective = '$time';";
	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "s", $status);
		mysqli_stmt_execute($stmt);

	$sql1 = "UPDATE crecords2 set status='Finished' where umid = '$time';";
	$stmt1 = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt1, $sql1);
	mysqli_stmt_bind_param($stmt1, "s", $status);
		mysqli_stmt_execute($stmt1);
	echo "<script type='text/javascript'> alert('Counseling result acknowledged.') </script>";
    echo "<script type='text/javascript'> document.location ='../counseling/counseling-p1-b.php'; </script>";
}
else {
	header("location: ../counseling/counseling-p1.php");
	exit();
}