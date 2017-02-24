<?php include_once('templates/header.php');?>

	<main>
 		<h2>Let's go!</h2>
 			<p>This is just a custom built site using simple HTML and CSS. I'm using a very common blog style layout for this site. It will probably change as I add more functions. I'm getting used to using scalable CSS length units such as em, rem, and vw. I'm really enjoying scalable units and it feels really good to use them. I don't quite want to use Bootstrap on this site but I will most likely be playing with some sort of CSS framework. I want to add more customized functions using PHP and jQuery. I would want to hand code these myself, so don't let me just plug and play functions!</p>
 
		<p><strong>Update: 2/23/2017</strong> <br />
			I integrated bootstrap..</p>

		<h2>Projects</h2>
			<p>Here are some sites that I've worked on</p>
			<div class="list-of-work">
				<a href="http://byodcomp.com/"><figure><img src="css/images/byod-comp.png" alt="BYOD Computer Services"><figcaption>BYOD Computer Services</a></figcaption></figure>
			</div>

			<div class="form-container">
				<h2>Contact Me</h2>
					<p style="text-align:center;">Fill out the form if you like filling stuff out!</p>
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
					<div class="text-center">
						<input id="submit" name="submit" type="submit" value="Send Message" class="btn btn-start-order" action="submit.php">
					</div>
					<div class="form-group">
						<?php echo $result; ?>
					</div>
				</form>
			</div>
 	</main> <!-- End Main -->
 	<?php include_once('templates/footer.php');?>