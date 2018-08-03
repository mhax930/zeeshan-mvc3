<?php
if(!isset($_SESSION)) {
     session_start();
}
require_once("m_xhcng/PHPMailerAutoload.php");

 class MailMan{
	public function sendContact($name, $contact, $email, $message) {

		$mbody = $message;

		$mail = new PHPMailer();

		try {
			$mail->IsSMTP();                                      // set mailer to use SMTP
			$mail->Host = "host name";  // specify main and backup server
			$mail->Port = 25;
			$mail->SMTPAuth = true;     // turn on SMTP authentication
			$mail->Username = "";  // SMTP username
			$mail->Password = ""; // SMTP password

			$mail->From = $email;
			$mail->FromName = $name;
			$mail->AddAddress("TO", "NAME");  // name is optional

			$mail->WordWrap = 350;                                 // set word wrap to 50 characters

			$mail->IsHTML(true);                                  // set email format to HTML

			$mail->Subject = "SUBJECT";
			$mail->Body    = $mbody;
			$mail->AltBody = $mbody;
			$mail->Send();
		} catch (phpmailerException $e) {
		  echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} catch (Exception $e) {
		  echo $e->getMessage(); //Boring error messages from anything else!
		}

		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}

		echo "OK";
	}
  }
 ?>