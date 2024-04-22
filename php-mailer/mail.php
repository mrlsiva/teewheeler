<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';

//Create a new PHPMailer instance
$mail = new PHPMailer(true);
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) ) {
	//Important - UPDATE YOUR RECEIVER EMAIL ID, NAME AND SUBJECT
	
	try{
		// Please enter your email ID 	
		$to_email = 'Connect@Teawheeler.co.in';
		// Please enter your name		
		$to_name ="Tea Wheeler";
		// Please enter your Subject
		$subject="Tea Wheeler - New Enquiry";
		
		$sender_name = $_POST['name'];
		$from_mail = $_POST['email'];	
		$sender_message = $_POST['message'];	
		$mail->SetFrom( $from_mail , $sender_name );
		$mail->AddReplyTo( $from_mail , $sender_name );
		$mail->AddAddress( $to_email , $to_name );
		$mail->Subject = $subject;
		
		$received_content = "SENDER NAME : ". $sender_name ."</br>  SENDER EMAIL : ".$from_mail. "</br> SENDER MESSAGE: </br/> ".$sender_message;
		
		$mail->MsgHTML( $received_content );
		
		if( $mail->Send() ){	
			$result = array( 'success' => true, 'message' => 'Mail send successfully!!!' );
		}else{
			$result = array( 'success' => false, 'message' => 'Mail not send. Please try again.' );
		}
	}
	catch(Exception $e){
		$result = array( 'success' => false, 'message' => $e );
	}

	echo json_encode($result);
	exit;
}