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
 
	//Enable SMTP debugging. 
	$mail->SMTPDebug = 0;                               
	//Set PHPMailer to use SMTP.
	$mail->isSMTP();            
	//Set SMTP host name                          
	$mail->Host = "tls://smtp.gmail.com"; //host mail server
	//Set this to true if SMTP host requires authentication to send email
	$mail->SMTPAuth = true;                          
	//Provide username and password     
	$mail->Username = "mochzackyaja@gmail.com";   //nama-email smtp          
	$mail->Password = "fsmefbouqmjsedeg	";           //password email smtp
	//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = "tls";                           
	//Set TCP port to connect to 
	$mail->Port = 587;                                   
 
	$mail->From = "from@gmail.com"; //email pengirim
	$mail->FromName = "Pelanggan"; //nama pengirim
 
	 $mail->addAddress($_POST['email'], $_POST['name']); //email penerima
 
	$mail->isHTML(true);
 
	$mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['comment']; //isi email
        $mail->AltBody = "Pelanggan"; //body email (optional)
 
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
