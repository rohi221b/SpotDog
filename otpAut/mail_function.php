<?php
	function sendOTP($email,$otp) {
		require('C:/xampp/htdocs/SpotDog/otpAut/PHPMailer-master/src/PHPMailer.php');
		require('C:/xampp/htdocs/SpotDog/otpAut/PHPMailer-master/src/SMTP.php');
		require('C:/xampp/htdocs/SpotDog/otpAut/PHPMailer-master/src/Exception.php');
	    $mssg="http://localhost:81/SpotDog/otpAut/otp.html";
		$message_body = "Proceed with link<br/></br>" . $mssg ."<br/></br> OTP:".$otp;
		#$message_body.append()


		$mail = new PHPMailer\PHPMailer\PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = "587";
		$mail->Username = "bhushy602@gmail.com";
		$mail->Password = "@bhushan123";
		$mail->Host     = "smtp.gmail.com";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("bhushy602@gmail.com", "bhushy");
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		#$mail->MsgHTML($link);
		$mail->IsHTML(true);
		$result = $mail->Send();

		return $result;
	}
?>
