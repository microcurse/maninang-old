<?php
	if (isset($_POST["submit"])) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$message= $_POST["message"];

		$from = 'Portfolio Contact Form'
		$to = 'example@domain.com'
		$subject = 'Message from Portfolio Contact Form'

		$body = 'From: $name\n Email: $email\n $phone\n $message';
		$result = '<div class="alert alert-success">Thank you! I will be in touch!</div>';
	}

?>
