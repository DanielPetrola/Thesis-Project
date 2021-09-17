<?php

	require "dbh.inc.php";

	$sql = "SELECT DISTINCT course AS coursetype FROM records GROUP BY course;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../reports/reports-p1.php?error=stmtfailed1");
		exit();
	} else {
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_assoc($result)) {
			$course = $row['coursetype'];
			
			$sql1 = "REPLACE INTO graphs (course) VALUES ('$course');";
			$stmt1 = mysqli_stmt_init($conn);
			$result1 = mysqli_query($conn, $sql1);
		
			$sql2 = "SELECT COUNT(student_course) AS numcourse FROM crecords1 WHERE student_course='$course';";
			$stmt2 = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt2, $sql2)) {
				header("location: ../reports/reports-p1.php?error=stmtfailed2");
				exit();
			} else {
				$result2 = mysqli_query($conn, $sql2);
				while ($row = mysqli_fetch_assoc($result2)) {
					$snum = $row['numcourse'];
				
					$sql3 = "UPDATE graphs SET student_number='$snum' WHERE course='$course';";
					$stmt3 = mysqli_stmt_init($conn);
					$result3 = mysqli_query($conn, $sql3);
				}
			}
			
			$sql4 = "SELECT * FROM crecords1 WHERE student_course='$course';";
			$stmt4 = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt4, $sql4)) {
				header("location: ../reports/reports-p1.php?error=stmtfailed3");
				exit();
			} else {
				$result4 = mysqli_query($conn, $sql4);
				$rowdcount = mysqli_num_rows($result4);
				
				$sql5 = "UPDATE graphs SET counsel_number='$rowdcount' WHERE course='$course';";
				$stmt5 = mysqli_stmt_init($conn);
				$result5 = mysqli_query($conn, $sql5);
			}
		}
		
		header("location: ../reports/reports-p1-2.php");
		exit();
	}