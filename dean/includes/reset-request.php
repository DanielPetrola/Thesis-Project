<?php
date_default_timezone_set('Asia/Manila');
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST["reset-submit"])) {

	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);
	
	$url = "http://uphsdguidance-edu.preview-domain.com/admin/pages/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
	
	$expires = date("U") + 300;
	
	require "dbh.inc.php";
	
	$userEmail = $_POST["email1"];
	
	$sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "error message 1";
		exit();
	} else {
		mysqli_stmt_bind_param($stmt, "s", $userEmail);
		mysqli_stmt_execute($stmt);
	}
	
	$sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "error message 2";
		exit();
	} else {
		$hashedToken = password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
		mysqli_stmt_execute($stmt);
	}
	
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
	//PHP MAILER INTEGRATION// 
	/*
	$to = $userEmail;
	
	$subject = "Reset Password";
	
	$message = "<p>Click below to reset password:</br>";
	$message .= "insert dummy reset link here</p>";
	
	$headers = "From: no-reply-uphsd-guidance\r\n";
	$headers .= "Reply-To: insert-uphsd-email-here\r\n";
	$headers .= "Content-type: text/html\r\n";
	
	mail($to, $subject, $message, $headers);
	*/
	
	//initialization of phpmailer
	require_once "PHPMailer/PHPMailer.php";
	require_once "PHPMailer/SMTP.php";
	require_once "PHPMailer/Exception.php";
	
	//smtp settings apparently
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "uphsdit.dpg4@gmail.com"; //sender email
	$mail->Password = "hellohello11@@"; //sender password
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";
	
	//email settings
	$mail->isHTML(true);
	$mail->setFrom("no-reply@uphsdit.com", "no-reply");
	$mail->addAddress($userEmail);
	$mail->Subject = ("UPHSD Guidance Office System: RESET PASSWORD");
	$body = '<p>Good day!<br>
	Please click this link to reset your password: ';
	$body .= '<a href="' . $url . '">' . $url . '</a><br><br>';
	$body .= 'Link expires in 5 minutes.</p>';
	$mail->Body = ($body);
	
	//here is where email is being sent apparently
	if($mail->send()){
		$requestStatus = 'success';
		$requestMessage = 'Link has been sent to ' . $userEmail;
		$_SESSION['$requestStatus'] = $requestStatus;
		$_SESSION['$requestMessage'] = $requestMessage;
		header("location: ../pages/reset-password.php?reset=success");
	} else {
		/*
		$requestStatus = 'error';
	    $requestMessage = 'Something is wrong: ' . $mail->ErrorInfo;
	    echo $requestStatus;
	    echo $requestMessage;
	    $_SESSION['requestStatus'] = $requestStatus;
	    $_SESSION['requestMessage'] = $requestMessage;
	    header("Location: ../pages/reset-password.php");
		*/
		echo $mail->ErrorInfo;
	}
	
	

}else {
	header:("location: ../../index.php");
}