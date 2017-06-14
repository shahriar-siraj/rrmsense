<?php

	$to      = 'bepul@ranisteel.com';
	$subject = 'Sent from RRMSENSE website';
	$message = $_GET['message'] . "\r\n" .
				'Name: ' . $_GET['name'] . "\r\n" .
				'Email: ' . $_GET['email'] . "\r\n" .
				'Phone: ' . $_GET['phone'];
	$headers = 'From: RRMSENSE Website Form' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();			
	
// 	$headers = 'From: webmaster@example.com' . "\r\n" .
// 	    'Reply-To: webmaster@example.com' . "\r\n" .
// 	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

    echo "Mail has been sent successfully!";
	// header('refresh:3; url=index.php');

?>