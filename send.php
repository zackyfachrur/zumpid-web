<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "assets/vendors/phpmailer/src/PHPMailer.php";
require_once "assets/vendors/phpmailer/src/Exception.php";
require_once "assets/vendors/phpmailer/src/OAuth.php";
require_once "assets/vendors/phpmailer/src/POP3.php";
require_once "assets/vendors/phpmailer/src/SMTP.php";
 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$tittle = $_POST['subject'];
		$comment = $_POST['comment'];

	$mail = new PHPMailer;

	$mail->SMTPDebug = 0;
	$mail->isSMTP();                     
	$mail->Host = "tls://smtp.gmail.com"; 
	$mail->SMTPAuth = true;                             
	$mail->Username = "Your Email";        
	$mail->Password = "Your Password";
	$mail->SMTPSecure = "tls";
	$mail->Port = 587;                                   
 
	$mail->From = "from@gmail.com";
	$mail->FromName = "Pelanggan";
 
	 $mail->addAddress($_POST['email'], $_POST['name']);
 
	$mail->isHTML(true);
 
	$mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['comment'];
        $mail->AltBody = "Pelanggan";
 
	if(!$mail->send()) 
	{
	    require_once "error_messages.php";
		return true;
	} 
	else 
	{
	    require_once "received.php";
		return true;
	}

?>
