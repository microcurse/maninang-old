<?php

$name = $_POST["name"];
$email = $_POST["email"];
$pokemon = $_POST["pokemon"];
$level = $_POST["level"];
$explain = $_POST["explain"];

?>
<html>
	<body>
		Welcome Pokemon trainer <strong><?php echo $name; ?></strong>!<br>
		Your email address is <strong><?php echo $email; ?></strong><br>
		Your starter Pokemon was <strong><?php echo $pokemon; ?></strong><br>
		You chose <strong><?php echo $pokemon; ?></strong> because <strong><?php echo $explain ?></strong><br>
		Your <strong><?php echo $pokemon ?></strong> is now level <strong><?php echo $level; ?></strong><br>
		Congratulations trainer!

		<!--<img src="" alt="">-->
	</body>
</html>