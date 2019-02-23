<?php

if( isset($_POST['submit'] ) ) {
	
	//Check to make sure that the name field is not empty
	if( trim( $_POST['name'] ) === '' ) {
		$name_error = 'You forgot to enter your name.';
		$error = true;
	} else {
		$name = trim( $_POST['name'] );
	}
	
	//Check to make sure sure that a valid email address is submitted
	if( trim( $_POST['email'] ) === '' )  {
		$email_error = 'You forgot to enter your email address.';
		$error = true;
	} else if ( !preg_match( "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/", trim( $_POST['email'] ) ) ) {
		$email_error = 'You entered an invalid email address.';
		$error = true;
	} else {
		$email = trim( $_POST['email'] );
	}
	
	$phone = trim( $_POST['phone'] );
	$subject_line = trim( $_POST['subject'] );

	//Check to make sure comments were entered	
	if( trim( $_POST['message'] ) === '' ) {
		$message_error = 'You forgot to enter your comments.';
		$error = true;
	} else {
		if( function_exists( 'stripslashes' ) ) {
			$message = stripslashes( trim( $_POST['message'] ) );
		} else {
			$message = trim( $_POST['message'] );
		}
	}
		
	//If there is no error, send the email
	if( !isset( $error ) ) {
		
		$to = $_POST['admin_email'];
		$subject = 'Contact form Submission from ' . $name;
		$body = "Name: $name \n\nPhone: $phone \n\nEmail: $email \n\nSubject: $subject_line \n\nComments: $message";
		$headers = 'From: My Site <' . $to . '>' . "\r\n" . 'Reply-To: ' . $email;
		
		mail( $to, $subject, $body, $headers );

		$sent = true;
	}
}