<!--Header-->
<?php include_once('templates/header.php'); ?>
	
<body> 
	<header id="header">
		<img id="logo" src="css/images/mnm.png" alt="Logo" />
		<h1 class="header-text">Welcome to my quiet paradise.</h1>
		<div class="name">Marc Maninang</div>
	</header>
	<div class="main">
 		<h2>Homepage</h2>
 			<h3>Section 1</h3>
 			<p>Lorem Khaled Ipsum is a major key to success. The key is to enjoy life, because they don’t want you to enjoy life. I promise you, they don’t want you to jetski, they don’t want you to smile. Give thanks to the most high. Find peace, life is like a water fall, you’ve gotta flow. They don’t want us to eat. The first of the month is coming, we have to get money, we have no choice. It cost money to eat and they don’t want you to eat. Hammock talk come soon. Special cloth alert.</p>
		
			<p>Special cloth alert. Let’s see what Chef Dee got that they don’t want us to eat. You see the hedges, how I got it shaped up? It’s important to shape up your hedges, it’s like getting a haircut, stay fresh. Stay focused. You should never complain, complaining is a weak emotion, you got life, we breathing, we blessed. Surround yourself with angels. Surround yourself with angels, positive energy, beautiful people, beautiful souls, clean heart, angel. The other day the grass was brown, now it’s green because I ain’t give up. Never surrender.</p>
			
			<h3>Section 2</h3>
			<p><strong>Don’t ever play yourself.</strong> Surround yourself with angels, positive energy, beautiful people, beautiful souls, clean heart, angel. How’s business? Boomin. Fan luv. How’s business? Boomin. Lion! They don’t want us to eat. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. You do know, you do know that they don’t want you to have lunch. I’m keeping it real with you, so what you going do is have lunch.</p>

			<p>Bless up. You do know, you do know that they don’t want you to have lunch. I’m keeping it real with you, so what you going do is have lunch. Find peace, life is like a water fall, you’ve gotta flow. Watch your back, but more importantly when you get out the shower, dry your back, it’s a cold world out there. Give thanks to the most high. Special cloth alert. Let me be clear, you have to make it through the jungle to make it to paradise, that’s the key, Lion!</p>
			
			<p>Check out this site I built!</p>
			<a href="http://maninang.com/byod">BYOD Computer Services</a>
			
			<div class="form-container">
				<img src="/css/images/charmander.png" alt="Charmander" width="150px">
				<form action="submit.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					Name: <input type="text" name="name"><br>
					E-mail: <input type="text" name="email"><br>
					Who's your starting Pokemon?: <input type="text" name="pokemon"><br>
					Explain why: <textarea name="explain" rows="4" cols="40"></textarea><br>
					What level is it now?: <input type="number" name="level"><br>
					<input type="submit">
				</form>
			</div>
 	</div> <!--End Container-->
 	<footer>
		<h3>Marc Maninang</h3>
	</footer>
 </body>
