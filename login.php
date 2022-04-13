<?php
	session_start(); 

	if (isset($_SESSION["loggedin"]))
	{
		header("location: admin.php");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login</title>
		<link
			href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Roboto+Mono:wght@100;400;700&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body class="login">
		<?php 	
		include_once("includes/header.php");
		?>
		<main>
			<form action="authenticate.php" method="post">
				<p>Login</p>
				<div class="label-input">
					<label for="">Gebruikersnaam</label>
					<input type="text" name="username" id="username" />
				</div>

				<div class="label-input">
					<label for="">Wachtwoord</label>
					<input type="text" name="password" id="password" />
				</div>

				<input type="submit" value="Login" />
			</form>
		</main>
	</body>
</html>
