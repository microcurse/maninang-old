<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Contact Form';
		$to = 'example@domain.com';
		$subject = 'Message from Portfolio Contact Form ';

		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<?php include_once('templates/header.php');?>
<body>
	<div class="main">
 		<h2>Let's go!</h2>
 			<p>This is just a custom built site using simple HTML and CSS. I'm using a very common blog style layout for this site. It will probably change as I add more functions. I'm getting used to using scalable CSS length units such as em, rem, and vw. I'm really enjoying scalable units and it feels really good to use them. I don't quite want to use Bootstrap on this site but I will most likely be playing with some sort of CSS framework. I want to add more customized functions using PHP and Javascript or jQuery. I would want to hand code these myself, so don't let me just plug and play functions!</p>

		<h2>Projects</h2>
			<p>Here are some sites that I've worked on</p>
			<div class="list-of-work">
				<a href="http://byodcomp.com/"><figure><img src="css/images/byod-comp.png" alt="BYOD Computer Services"><figcaption>BYOD Computer Services</a></figcaption></figure>
			</div>

			<div class="form-container">
				<h2>Contact Me</h2>
					<p style="text-align:center;">Fill out the form if you like what I've got to offer!</p>
				<form id="contact-form" class="form" action="index.php" method="post" role="form">
					<div class="form-group">
						<label class="form-label" for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" tabindex="1" required>
					</div>
					<div class="form-group">
						<label class="form-label" for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="1" required>
					</div>
					<div class="form-group">
						<label class="form-label" for="phone">Phone</label>
						<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" tabindex="1" required>
					</div>
					<div class="form-group">
						<label class="form-label" for="message">Message</label>
						<textarea name="message" rows="4" cols="40" class="form-control" placeholder="Message" tabindex="4" required></textarea>
					</div>
					<div class="form-group">
							<?php echo $result; ?>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-start-order">Send Message</button>
					</div>
				</form>
			</div>
 	</div> <!-- End Main -->
 	<footer>
		<p>Marc Maninang</p>
	</footer>
 </body>
