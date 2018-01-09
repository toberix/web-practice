<?php 

	$first = $_GET['first'];
	$last = $_GET['last'];
	$gender = $_GET['gender'];
	$message = $_GET['message'];
	$email = $_GET['email'];

	$mailmessage = 'You got a mail from'.$first.' '.$last.' who said the following: \r\n'.$message;

	$to = 'tobelity@gmail.com';
	$subject = 'My website contact form';
	$headers = 'From: '.$email;

	mail($to,$subject,$mailmessage,$headers);
	header('Location: index.html');

?>