<?php

function emptyInputSignup($lastname, $firstname, $middleinitial, $age, $gender, $birthday, $contact, $role, $position, $idnum, $email, $pwd, $pwdRepeat) {
	$result;
	if (empty($lastname) || empty($firstname) || empty($middleinitial) || empty($age) || empty($gender) || empty($birthday) || empty($contact) || empty($role) || empty($position) || empty($idnum) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function emptyRecordsSignup($idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $age, $gender, $civilstatus, $citizenship, $religion, $birthday, $contact, $address, $scholarship) {
	$result;
	if (empty($idnum) || empty($lastname) || empty($firstname) || empty($middleinitial) || empty($course) || empty($yearlevel) || empty($age) || empty($gender) || empty($civilstatus) || empty($citizenship) || empty($religion) || empty($birthday) || empty($contact) || empty($address) || empty($scholarship)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function emptyARecordsSignup($idnum, $lastname, $firstname, $course, $yearlevel, $date, $timestart, $timeend, $venue, $subject, $section, $problem, $action, $recommendation) {
	$result;
	if (empty($idnum) || empty($lastname) || empty($firstname) || empty($course) || empty($yearlevel) || empty($date) || empty($timestart) || empty($timeend) || empty($venue) || empty($subject) || empty($section) || empty($problem) || empty($action) || empty($recommendation)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function emptyCRecordsSignup($idnum, $lastname, $firstname, $course, $yearlevel, $date1, $timestart, $timeend, $venue, $reason, $attendance, $attitude, $difficulty, $corrective, $date2, $comments, $commentss) {
	$result;
	if (empty($idnum) || empty($lastname) || empty($firstname) || empty($course) || empty($yearlevel) || empty($date1) || empty($timestart) || empty($timeend) || empty($venue) || empty($reason) || empty($attendance) || empty($attitude) || empty($difficulty) || empty($corrective) || empty($date2) || empty($comments) || empty($commentss)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}



function invalidEmail($email) {
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
	$result;
	if ($pwd !== $pwdRepeat) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}


function uidExists($conn, $idnum, $email) {
	$sql = "SELECT * FROM accounts WHERE idnum=? OR email=?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../accounts/accounts-new.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "ss", $idnum, $email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	
	mysqli_stmt_close($stmt);
}


function createUser($conn, $lastname, $firstname, $middleinitial, $contact, $gender, $age, $birthday, $position, $email, $pwd, $role, $idnum) {
	$sql = "INSERT INTO accounts (lastname, firstname, middleinit, contact, gender, age, birthday, position, email, password, role, idnum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../accounts/accounts-new.php?error=stmtfailed");
		exit();
	}
	
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	mysqli_stmt_bind_param($stmt, "ssssssssssss", $lastname, $firstname, $middleinitial, $contact, $gender, $age, $birthday, $position, $email, $hashedPwd, $role, $idnum);
	mysqli_stmt_execute($stmt);
	
	session_start();
	date_default_timezone_set('Asia/Manila');
/*	
	$_SESSION["userid"] = $uidExists["id"];
	$_SESSION["useremail"] = $uidExists["email"];
	$_SESSION["userrole"] = $uidExists["role"];
*/
	$action = "Created an account for " . $lastname . ", " . $firstname . "  successfully";
	$ip = $_SERVER['REMOTE_ADDR'];
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	$sql = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../../index.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
	mysqli_stmt_execute($stmt);
	
                      echo "<script type='text/javascript'> alert('Account created successfully.') </script>";
                      echo "<script type='text/javascript'> document.location ='../accounts/accounts-p1.php'; </script>";
	exit();
}

function createRecord($conn, $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $age, $gender, $civilstatus, $citizenship, $religion, $birthday, $contact, $address, $scholarship) {
	$sql = "INSERT INTO records (idnum, lastname, firstname, middleinitial, course, yearlevel, age, gender, civilstatus, citizenship, religion, birthday, contact, address, scholarship) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../records/records-p2.php?error=stmtfailed");
		exit();
	} else {
	
		mysqli_stmt_bind_param($stmt, "sssssssssssssss", $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $age, $gender, $civilstatus, $citizenship, $religion, $birthday, $contact, $address, $scholarship);
		mysqli_stmt_execute($stmt);
	
			
		session_start();
		date_default_timezone_set('Asia/Manila');
/*	
		$_SESSION["userid"] = $uidExists["id"];
		$_SESSION["useremail"] = $uidExists["email"];
		$_SESSION["userrole"] = $uidExists["role"];
*/
		$action = "Created a student record for " . $lastname . ", " . $firstname . " successfully";
		$ip = $_SERVER['REMOTE_ADDR'];
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");

		$sql = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../../index.php?error=stmtfailed");
			exit();
		}

		mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
		mysqli_stmt_execute($stmt);
	
                      echo "<script type='text/javascript'> alert('Student record created successfully.') </script>";
                      echo "<script type='text/javascript'> document.location ='../records/records-p1.php'; </script>";
		exit();
	}
}

function createARecord($conn, $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $date, $timestart, $timeend, $venue, $subject, $section, $problem, $action, $recommendation, $type, $uid, $uln, $ufn, $chk, $gender, $age, $year, $sem) {
	$sql = "INSERT INTO crecords (idnum, student_lastname, student_firstname, middleinitial, student_course, student_yrlvl, date, time_start, time_end, venue, subject, section, problem, action, recommendation, type, uid, uln, ufn, chk, gender, age, sy, sem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../counseling/counseling-p3.php?error=stt");
		exit();
	} else {
	
		mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssss", $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $date, $timestart, $timeend, $venue, $subject, $section, $problem, $action, $recommendation, $type, $uid, $uln, $ufn, $chk, $gender, $age, $year, $sem);
		mysqli_stmt_execute($stmt);
	
			
		session_start();
		date_default_timezone_set('Asia/Manila');
/*	
		$_SESSION["userid"] = $uidExists["id"];
		$_SESSION["useremail"] = $uidExists["email"];
		$_SESSION["userrole"] = $uidExists["role"];
*/
		$action = "Created academic counseling record for " . $lastname . ", " . $firstname . " successfully";
		$ip = $_SERVER['REMOTE_ADDR'];
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");

		$sql = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../../index.php?error=stmtfailed");
			exit();
		} else {

			mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
			mysqli_stmt_execute($stmt);
		
			$counsel_type = "arecords";
		
			$sql = "INSERT INTO chistory (idnum, counselor_lastname, counselor_firstname, student_lastname, student_firstname, counsel_type, date) VALUES (?, ?, ?, ?, ?, ?, ?);";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("location: ../../index.php?error=stmtfailed");
				exit();
			}

			mysqli_stmt_bind_param($stmt, "sssssss", $idnum, $_SESSION["userlastname"], $_SESSION["userfirstname"], $lastname, $firstname, $counsel_type, $date);
			mysqli_stmt_execute($stmt);
	
                      echo "<script type='text/javascript'> alert('Academic counseling has been recorded.') </script>";
                      echo "<script type='text/javascript'> document.location ='../counseling/counseling-p1.php'; </script>";
			exit();
		}
	}
}


function createAERecord($conn, $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $date, $timestart, $timeend, $venue, $subject, $section, $problem, $action, $recommendation, $type, $uid, $uln, $ufn, $chk, $gender, $age, $year, $sem) {
	$sql = "INSERT INTO crecords1 (idnum, student_lastname, student_firstname, middleinitial, student_course, student_yrlvl, date, time_start, time_end, venue, subject, section, problem, action, recommendation, type, uid, uln, ufn, chk, gender, age, sy, sem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../counseling/counseling-p3.php?error=stt");
		exit();
	} else {
	
		mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssss", $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $date, $timestart, $timeend, $venue, $subject, $section, $problem, $action, $recommendation, $type, $uid, $uln, $ufn, $chk, $gender, $age, $year, $sem);
		mysqli_stmt_execute($stmt);
	
			
		session_start();
		date_default_timezone_set('Asia/Manila');
/*	
		$_SESSION["userid"] = $uidExists["id"];
		$_SESSION["useremail"] = $uidExists["email"];
		$_SESSION["userrole"] = $uidExists["role"];
*/
		$action = "Created endorsed academic counseling record for " . $lastname . ", " . $firstname . " successfully";
		$ip = $_SERVER['REMOTE_ADDR'];
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");

		$sql = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../../index.php?error=stmtfailed");
			exit();
		} else {

			mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
			mysqli_stmt_execute($stmt);
		
			$counsel_type = "arecords";
		
			$sql = "INSERT INTO chistory (idnum, counselor_lastname, counselor_firstname, student_lastname, student_firstname, counsel_type, date) VALUES (?, ?, ?, ?, ?, ?, ?);";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("location: ../../index.php?error=stmtfailed");
				exit();
			}

			mysqli_stmt_bind_param($stmt, "sssssss", $idnum, $_SESSION["userlastname"], $_SESSION["userfirstname"], $lastname, $firstname, $counsel_type, $date);
			mysqli_stmt_execute($stmt);
	
                      echo "<script type='text/javascript'> alert('Academic counseling has been recorded and endorsed.') </script>";
                      echo "<script type='text/javascript'> document.location ='../counseling/counseling-p1.php'; </script>";
			exit();
		}
	}
}

function createCRecord($conn, $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $date1, $timestart, $timeend, $venue, $reason1, $attendance, $appearance, $attitude, $difficulty, $corrective, $date2, $comments, $commentss, $type, $uln, $ufn, $chk, $gender, $age, $year, $sem, $uid) {
	$sql = "INSERT INTO crecords1 (idnum, student_lastname, student_firstname, middleinitial, student_course, student_yrlvl, date, time_start, time_end, venue, reason, attendance, appearance, attitude, difficulty, corrective, date_next, c_comments, s_comments, type, uln, ufn, chk, gender, age, sy, sem, uid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../counseling/counseling-p4.php?error=stmtfailed");
		exit();
	} else {
	
		mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssssssss", $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $date1, $timestart, $timeend, $venue, $reason1, $attendance, $appearance, $attitude, $difficulty, $corrective, $date2, $comments, $commentss, $type, $uln, $ufn, $chk, $gender, $age, $year, $sem, $uid);
		mysqli_stmt_execute($stmt);
	
			
		session_start();
		date_default_timezone_set('Asia/Manila');
/*	
		$_SESSION["userid"] = $uidExists["id"];
		$_SESSION["useremail"] = $uidExists["email"];
		$_SESSION["userrole"] = $uidExists["role"];
*/
		$action = "Created guidance counseling record for " . $lastname . ", " . $firstname . " successfully";
		$ip = $_SERVER['REMOTE_ADDR'];
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");

		$sql = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../../index.php?error=stmtfailed");
			exit();
		} else {

			mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
			mysqli_stmt_execute($stmt);
		
			$counsel_type = "crecords";
		
			$sql = "INSERT INTO chistory (idnum, counselor_lastname, counselor_firstname, student_lastname, student_firstname, counsel_type, date) VALUES (?, ?, ?, ?, ?, ?, ?);";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("location: ../../index.php?error=stmtfailed");
				exit();
			}

			mysqli_stmt_bind_param($stmt, "sssssss", $idnum, $_SESSION["userlastname"], $_SESSION["userfirstname"], $lastname, $firstname, $counsel_type, $date1);
			mysqli_stmt_execute($stmt);
	
                      echo "<script type='text/javascript'> alert('Guidance counseling has been recorded.') </script>";
                      echo "<script type='text/javascript'> document.location ='../counseling/counseling-p0.php'; </script>"; 
			exit();
		}
	}
}

function createCARecord($conn, $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $date1, $timestart, $timeend, $venue, $reason1, $attendance, $appearance, $attitude, $difficulty, $corrective, $date2, $comments, $commentss, $type, $uln, $ufn, $chk, $gender, $age, $year, $sem, $time, $uid) {
	$sql = "INSERT INTO crecords2 (idnum, student_lastname, student_firstname, middleinitial, student_course, student_yrlvl, date, time_start, time_end, venue, reason, attendance, appearance, attitude, difficulty, corrective, date_next, c_comments, s_comments, type, uln, ufn, chk, gender, age, sy, sem, umid, uid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	$sql1 = "UPDATE crecords1 set status='To be acknowledged' where corrective = '$time';";
	$stmt1 = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt1, $sql1);
	mysqli_stmt_bind_param($stmt1, "s", $status);
		mysqli_stmt_execute($stmt1);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../counseling/counseling-p4.php?error=stmtfailed");
		exit();
	} else {
	
		mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssss", $idnum, $lastname, $firstname, $middleinitial, $course, $yearlevel, $date1, $timestart, $timeend, $venue, $reason1, $attendance, $appearance, $attitude, $difficulty, $corrective, $date2, $comments, $commentss, $type, $uln, $ufn, $chk, $gender, $age, $year, $sem, $time, $uid);
		mysqli_stmt_execute($stmt);
	
			
		session_start();
		date_default_timezone_set('Asia/Manila');
/*	
		$_SESSION["userid"] = $uidExists["id"];
		$_SESSION["useremail"] = $uidExists["email"];
		$_SESSION["userrole"] = $uidExists["role"];
*/
		$action = "Created endorsed guidance counseling record for " . $lastname . ", " . $firstname . " successfully";
		$ip = $_SERVER['REMOTE_ADDR'];
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");

		$sql = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../../index.php?error=stmtfailed");
			exit();
		} else {

			mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
			mysqli_stmt_execute($stmt);
		
			$counsel_type = "crecords";
		
			$sql = "INSERT INTO chistory (idnum, counselor_lastname, counselor_firstname, student_lastname, student_firstname, counsel_type, date) VALUES (?, ?, ?, ?, ?, ?, ?);";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("location: ../../index.php?error=stmtfailed");
				exit();
			}

			mysqli_stmt_bind_param($stmt, "sssssss", $idnum, $_SESSION["userlastname"], $_SESSION["userfirstname"], $lastname, $firstname, $counsel_type, $date1);
			mysqli_stmt_execute($stmt);
	
                      echo "<script type='text/javascript'> alert('Endorsed guidance counseling has been recorded.') </script>";
                      echo "<script type='text/javascript'> document.location ='../counseling/counseling-p1.php'; </script>"; 
			exit();
		}
	}
}


function emptyInputLogin($username, $pwd) {
	$result;
	if (empty($username) || empty($pwd)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function loginUser($conn, $username, $pwd) {
	$uidExists = uidExists($conn, $idnum, $username);
	
	if ($uidExists === false) {
                      echo "<script type='text/javascript'> alert('There is no such user!') </script>";
                      echo "<script type='text/javascript'> document.location ='../../index.php'; </script>";
		exit();
	}
	
	$pwdHashed = $uidExists["password"];
	$checkPwd = password_verify($pwd, $pwdHashed);
	
	if ($checkPwd === false) {
	    echo "<script>alert('Email and password do not match. Try again')</script>";
		header("location: ../../index.php?error=wronglogin");
		exit();
	}
	else if ($checkPwd === true) {
		session_start();
		date_default_timezone_set('Asia/Manila');
		
		$_SESSION["userid"] = $uidExists["id"];
		$_SESSION["useremail"] = $uidExists["email"];
		$_SESSION["userrole"] = $uidExists["role"];
		$_SESSION["userlastname"] = $uidExists["lastname"];
		$_SESSION["userfirstname"] = $uidExists["firstname"];
		$_SESSION["userposition"] = $uidExists["position"];

		$action = "Logged in successfully";
		$ip = $_SERVER['REMOTE_ADDR'];
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");

		$sql = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../../index.php?error=stmtfailed");
			exit();
		}

		mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		
		if ($_SESSION["userrole"] == 'Administrator'){
		header("location: ../pages/dashboard.php");
		exit();
		}
		else if ($_SESSION["userrole"] == 'Counselor')
		{

			if ($_SESSION["userposition"] == 'Counselor') {
			header("location: ../../counselor/pages/dashboard.php");
			exit();	
			}

			else if ($_SESSION["userposition"] == 'Dean') {
			header("location: ../../dean/pages/dashboard.php");
			exit();
			}

			else if ($_SESSION["userposition"] == 'Instructor') {
			header("location: ../../instructor/pages/dashboard.php");
			exit();
			}
		}
	}
}