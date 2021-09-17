<?php
	
	require 'dbh.inc.php';
	
	$course1="Aeronautical Engineering";
	$course2="Civil Engineering";
	$course3="Computer Engineering";
	$course4="Electrical Engineering";
	$course5="Electronics Engineering";
	$course6="Industrial Engineering";
	$course7="Marine Engineering";
	$course8="Mechanical Engineering";
	
	$sql = "SELECT COUNT(*) course FROM records WHERE course='$course1';";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		//header("location: ../pages/dashboard.php?error=stmtfailed");
		
		exit();
	} else {
		
		mysqli_stmt_execute($stmt);
		$result1 = mysqli_stmt_get_result($stmt);
	
		$sql = "UPDATE reports SET counsel_num=? WHERE course='$course1';";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../pages/dashboard.php?error=stmtfailed");
			exit();
		}
	
		mysqli_stmt_bind_param($stmt, "i", $result1);
		mysqli_stmt_execute($stmt);
	
	
		$sql = "SELECT COUNT(*) course FROM records WHERE course='$course2';";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			//header("location: ../pages/dashboard.php?error=stmtfailed");
			echo "tulog na";
			exit();
		} else {
		
			mysqli_stmt_execute($stmt);
			$result2 = mysqli_stmt_get_result($stmt);
	
			$sql = "UPDATE reports SET counsel_num=? WHERE course='$course2';";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("location: ../pages/dashboard.php?error=stmtfailed");
				exit();
			}
	
			mysqli_stmt_bind_param($stmt, "i", $result2);
			mysqli_stmt_execute($stmt);
	
	
			$sql = "SELECT COUNT(*) course FROM records WHERE course='$course3';";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				//header("location: ../pages/dashboard.php?error=stmtfailed");
				echo "tulog na";
			exit();
			} else {
		
				mysqli_stmt_execute($stmt);
				$result3 = mysqli_stmt_get_result($stmt);
	
				$sql = "UPDATE reports SET counsel_num=? WHERE course='$course3';";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("location: ../pages/dashboard.php?error=stmtfailed");
					exit();
				}
	
				mysqli_stmt_bind_param($stmt, "i", $result3);
				mysqli_stmt_execute($stmt);
	
	
				$sql = "SELECT COUNT(*) course FROM records WHERE course='$course4';";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					//header("location: ../pages/dashboard.php?error=stmtfailed");
					echo "tulog na";
					exit();
				} else {
		
					mysqli_stmt_execute($stmt);
					$result4 = mysqli_stmt_get_result($stmt);
	
					$sql = "UPDATE reports SET counsel_num=? WHERE course='$course4';";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						header("location: ../pages/dashboard.php?error=stmtfailed");
						exit();
					}
	
					mysqli_stmt_bind_param($stmt, "i", $result4);
					mysqli_stmt_execute($stmt);
	

	
					$sql = "SELECT COUNT(*) course FROM records WHERE course='$course5';";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						//header("location: ../pages/dashboard.php?error=stmtfailed");
						echo "tulog na";
						exit();
					} else {
		
						mysqli_stmt_execute($stmt);
						$result5 = mysqli_stmt_get_result($stmt);
	
						$sql = "UPDATE reports SET counsel_num=? WHERE course='$course5';";
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt, $sql)) {
							header("location: ../pages/dashboard.php?error=stmtfailed");
							exit();
						}
	
						mysqli_stmt_bind_param($stmt, "i", $result5);
						mysqli_stmt_execute($stmt);

	
						$sql = "SELECT COUNT(*) course FROM records WHERE course='$course6';";
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt, $sql)) {
							//header("location: ../pages/dashboard.php?error=stmtfailed");
							echo "tulog na";
							exit();
						} else {
		
							mysqli_stmt_execute($stmt);
							$result6 = mysqli_stmt_get_result($stmt);
	
							$sql = "UPDATE reports SET counsel_num=? WHERE course='$course6';";
							$stmt = mysqli_stmt_init($conn);
							if (!mysqli_stmt_prepare($stmt, $sql)) {
								header("location: ../pages/dashboard.php?error=stmtfailed");
								exit();
							}
	
							mysqli_stmt_bind_param($stmt, "i", $result6);
							mysqli_stmt_execute($stmt);
	
	
							$sql = "SELECT COUNT(*) course FROM records WHERE course='$course7';";
							$stmt = mysqli_stmt_init($conn);
							if (!mysqli_stmt_prepare($stmt, $sql)) {
								//header("location: ../pages/dashboard.php?error=stmtfailed");
								echo "tulog na";
								exit();
							} else {
		
								mysqli_stmt_execute($stmt);
								$result7 = mysqli_stmt_get_result($stmt);
	
								$sql = "UPDATE reports SET counsel_num=? WHERE course='$course7';";
								$stmt = mysqli_stmt_init($conn);
								if (!mysqli_stmt_prepare($stmt, $sql)) {
									header("location: ../pages/dashboard.php?error=stmtfailed");
									exit();
								}
	
								mysqli_stmt_bind_param($stmt, "i", $result7);
								mysqli_stmt_execute($stmt);
	
		
	
								$sql = "SELECT COUNT(*) course FROM records WHERE course='$course8';";
								$stmt = mysqli_stmt_init($conn);
								if (!mysqli_stmt_prepare($stmt, $sql)) {
									//header("location: ../pages/dashboard.php?error=stmtfailed");
									echo "tulog na";
									exit();
								} else {
		
									mysqli_stmt_execute($stmt);
									$result8 = mysqli_stmt_get_result($stmt);
	
									$sql = "UPDATE reports SET counsel_num=? WHERE course='$course8';";
									$stmt = mysqli_stmt_init($conn);
									if (!mysqli_stmt_prepare($stmt, $sql)) {
										header("location: ../pages/dashboard.php?error=stmtfailed");
										exit();
									}
	
									mysqli_stmt_bind_param($stmt, "i", $result8);
									mysqli_stmt_execute($stmt);
	
									header("location: ../reports/reports-p1.php");
									exit();
								}
							}
						}
					}
				}
			}
		}
	}