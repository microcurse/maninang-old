<!--Header-->
<?php include_once('templates/header.php'); ?>
	
<body> 
	<header id="header">
		<img id="logo" src="css/images/mnm.png" alt="Logo" />
		<h1 class="header-text">Welcome to my quiet paradise.</h1>
		<div class="name">Marc Maninang</div>
	</header>
	<div class="main">
 		<h2>Starting off point</h2>
 			<p>So I had all this filler "Khaled Ipsum" text in here but I figured I would actually write out the purpose of this site. I'm using a very common blog style layout for this site. It will probably change as I add more functions. I'm getting used to using scalable CSS length units such as em, rem, and vw. I really enjoy using scalable units and it feels really good to use them. I don't quite want to use Bootstrap on this site but I will most likely be playing with some sort of CSS framework. I want to add more customized functions using PHP and Javascript or jQuery. I would want to hand code these myself, so don't let me just plug and play functions!</p>
			
			<p>Here's a recent site I did for one of my clients.</p>
			<a href="http://byodcomp.com/"><img src="css/images/byod-comp.png" alt="BYOD Computer Services">BYOD Computer Services</a>

		<h3>PHP Form</h3>
			<p>This form isn't connected to a database just yet. I'm still currently working on that right now.</p>
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
