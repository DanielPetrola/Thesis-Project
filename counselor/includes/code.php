<?php

session_start();

              if(isset($_POST['edits'])) // when click on Update button
              {
                  $id = $_POST['edit_id'];
                  $lastname = $_POST['lastname'];
                  $firstname = $_POST['firstname'];
                  $middleinit = $_POST['middleinit'];
                  $age = $_POST['age'];
                  $gender = $_POST['gender'];
                  $birthday = $_POST['birthday'];
                  $contact = $_POST['contact'];
                  $role = $_POST['role'];
                  $position = $_POST['position'];
                  $email = $_POST['email'];
                
				date_default_timezone_set('Asia/Manila');
				require_once 'dbh.inc.php';
/*	
				$_SESSION["userid"] = $uidExists["id"];
				$_SESSION["useremail"] = $uidExists["email"];
				$_SESSION["userrole"] = $uidExists["role"];
*/
				$action = "Edited account of " . $lastname . ", " . $firstname . " successfully";
				$ip = $_SERVER['REMOTE_ADDR'];
				$created_at = date("Y-m-d H:i:s");
				$updated_at = date("Y-m-d H:i:s");

				$sql = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("location: ../index.php?error=stmtfailed");
					exit();
				}

				mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
				mysqli_stmt_execute($stmt);
				
				
                  $edit = mysqli_query($conn,"UPDATE accounts SET lastname='$lastname', firstname='$firstname', middleinit='$middleinit', age='$age', gender='$gender', birthday='$birthday', contact='$contact', role='$role', position='$position', email='$email' where id='$id'");
                
                  if($edit)
                  {
                      mysqli_close($conn);// Close connection
                      echo "<script type='text/javascript'> alert('Changes have been saved.') </script>";
                      echo "<script type='text/javascript'> document.location ='../accounts/accounts-p1.php'; </script>";// redirects to all records page
                      exit;
                  }    
              }


 					if(isset($_POST['delete_btn'])) // when click on Update button
              {
                  $id = $_POST['delete_id'];
				  
				date_default_timezone_set('Asia/Manila');
				require_once 'dbh.inc.php';
/*	
				$_SESSION["userid"] = $uidExists["id"];
				$_SESSION["useremail"] = $uidExists["email"];
				$_SESSION["userrole"] = $uidExists["role"];
*/
				$action = "Removed an account successfully";
				$ip = $_SERVER['REMOTE_ADDR'];
				$created_at = date("Y-m-d H:i:s");
				$updated_at = date("Y-m-d H:i:s");

				$sql = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("location: ../index.php?error=stmtfailed");
					exit();
				}

				mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
				mysqli_stmt_execute($stmt);
                
                  $del = mysqli_query($conn,"DELETE FROM accounts WHERE id='$id'");
                
                  if($del)
                  {
                      mysqli_close($conn);// Close connection
                      echo "<script type='text/javascript'> alert('Account has been removed.') </script>";
                      echo "<script type='text/javascript'> document.location ='../accounts/accounts-p1.php'; </script>"; // redirects to all records page
                      exit;
                  }    
              }

				if(isset($_POST['edit_r'])) // when click on Update button
              {
                  $id = $_POST['edit_id_r'];
                  $lastname = $_POST['lastname'];
                  $firstname = $_POST['firstname'];
                  $middleinitial = $_POST['middleinitial'];
                  $course = $_POST['course'];
                  $yearlevel = $_POST['yearlevel'];
                  $age = $_POST['age'];
                  $gender = $_POST['gender'];
                  $civilstatus = $_POST['civilstatus'];
                  $citizenship = $_POST['citizenship'];
                  $religion = $_POST['religion'];
                  $birthday = $_POST['birthday'];
                  $contact = $_POST['contact'];
                  $address = $_POST['address'];
                  $scholarship = $_POST['scholarship'];
				  
				date_default_timezone_set('Asia/Manila');
				require_once 'dbh.inc.php';
/*	
				$_SESSION["userid"] = $uidExists["id"];
				$_SESSION["useremail"] = $uidExists["email"];
				$_SESSION["userrole"] = $uidExists["role"];
*/
				$action = "Edited student record of " . $lastname . ", " . $firstname . " successfully";
				$ip = $_SERVER['REMOTE_ADDR'];
				$created_at = date("Y-m-d H:i:s");
				$updated_at = date("Y-m-d H:i:s");

				$sql = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("location: ../index.php?error=stmtfailed");
					exit();
				}

				mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
				mysqli_stmt_execute($stmt);
                
                  $edit = mysqli_query($conn,"UPDATE records SET lastname='$lastname', firstname='$firstname', middleinitial='$middleinitial', course='$course', yearlevel='$yearlevel', age='$age', gender='$gender', civilstatus='$civilstatus', citizenship='$citizenship', religion='$religion', birthday='$birthday', contact='$contact', address='$address', scholarship='$scholarship' WHERE id='$id'");
                
                  if($edit)
                  {
                      mysqli_close($conn);// Close 
                      echo "<script type='text/javascript'> alert('Changes have been saved.') </script>";
                      echo "<script type='text/javascript'> document.location ='../records/records-p1.php'; </script>"; // redirects to all records page
                      exit;
                  }   
                  else{

                  } 
              }




 					if(isset($_POST['delete_btn_r'])) // when click on Update button
              {
                  $id = $_POST['delete_id_r'];
                
				date_default_timezone_set('Asia/Manila');
				require_once 'dbh.inc.php';
/*	
				$_SESSION["userid"] = $uidExists["id"];
				$_SESSION["useremail"] = $uidExists["email"];
				$_SESSION["userrole"] = $uidExists["role"];
*/
				$action = "Removed a student record successfully";
				$ip = $_SERVER['REMOTE_ADDR'];
				$created_at = date("Y-m-d H:i:s");
				$updated_at = date("Y-m-d H:i:s");

				$sql = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("location: ../index.php?error=stmtfailed");
					exit();
				}

				mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
				mysqli_stmt_execute($stmt);
				
                  $del = mysqli_query($conn,"DELETE FROM records WHERE id='$id'");
                
                  if($del)
                  {
                      mysqli_close($conn);// Close connection
                      echo "<script type='text/javascript'> alert('A student record has been removed.') </script>";
                      echo "<script type='text/javascript'> document.location ='../records/records-p1.php'; </script>"; // redirects to all records page
                      exit;
                  }    
              }


 					if(isset($_POST['remove_btn'])) // when click on Update button
              {
                  $filename = $_POST['filename'];
                
				
				require_once 'dbh.inc.php';
				
                  $del = mysqli_query($conn,"DELETE FROM tr_psychological WHERE filename='$filename'");
                
                  if($del)
                  {
                      mysqli_close($conn);// Close connection
                      echo "<script type='text/javascript'> alert('File has been removed.') </script>";
                      echo "<script type='text/javascript'> document.location ='../test results/test-p1.php'; </script>"; // redirects to all records page
                      exit;
                  }    
              }







              ?>