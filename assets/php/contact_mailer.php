<?php

	// SMTP Email creds for PHPMailer
	define("CONTACT_EMAIL", "vzkiss@gmail.com");
	define("APP_PASSWORD", "oqgtyktbywtocvvl");

	// Mail settings
	$to      = "vzkiss@gmail.com";
	$subject = "Emantium Inquiry";


	if (isset($_POST["cname"]) && isset($_POST["cemail"]) && isset($_POST["cmessage"])) {

		$content  = "Name: "     . $_POST["cname"]    . "\r\n";
		$content .= "Email: "    . $_POST["cemail"]   . "\r\n";
		$content .= "Message: "  . "\r\n" . $_POST["cmessage"];


		$name = $_POST["cname"];
		$email = $_POST["cemail"];

		$errorMsg = "";

		require 'phpmailer/PHPMailerAutoload.php';
	
		// new PHPMailer 
		$mail = new PHPMailer();

		//$mail->SMTPDebug = 3;  

		// PHPMailer ValidateAddress 
		if( !$mail->ValidateAddress($email) ){
			$errorMsg = "Email address is invalid.";
		}

		// Set server details for send
	    $mail->isSMTP();
	    $mail->Host = "smtp.gmail.com";
	    $mail->SMTPAuth = true;
	    $mail->Username = CONTACT_EMAIL;
	    $mail->Password = APP_PASSWORD;
	    $mail->SMTPSecure = 'ssl'; 
	    $mail->Port = 465;

		//Email setup and send
		$mail->setFrom($email, $name);
		$mail->AddReplyTo($email, $name);
		$mail->addAddress($to, 'VZKiss.com');


		$mail->isHTML(true);	// Set email format to HTML

		$mail->Subject =  $subject . ' - Contact Form Submission';

		$email_body = "";
		$email_body = "You have got the following message:<br />";
		$email_body = $email_body . "--------------------<br /><br />" . $content;

		$mail->Body = $email_body;

		// Send email
		if (!$mail->send()) {
			if ($errorMsg == "") {
		    	echo "There was a problem sending the email: " . $mail->ErrorInfo;
		    	exit;
		    } else {
		    	echo $errorMsg;
		    	exit;
		    }
		}

		// Redirect after successful email
		echo "success";
		exit;
	}

/* AJAX check */
function redirect_no_ajax() {
	
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		/* if not ajax redirect */
		header("Location: index.php#contact");
		exit;
	}
}
