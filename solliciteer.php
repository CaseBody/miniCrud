<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="styles.css" />
		<link
			href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Roboto+Mono:wght@100;400;700&display=swap"
			rel="stylesheet"
		/>
		<title>Cicek Solliciteer</title>
	</head>
	<body>
		<main class="solliciteer">
		<?php 	
			include_once("header.php");
		?>

			<p class="titel">Solliciteer</p>

			<form action="" method="post">
				<div class="col-1">
					<div class="text-label">
						<label>Naam</label>
						<input type="text" name="naam" id="" />
					</div>
					<div class="text-label">
						<label>Geboortedatum</label>
						<input type="text" name="geboorte" id="" />
					</div>
				</div>

				<div class="col-2">
					<div class="text-label">
						<label>Email</label>
						<input type="text" name="email" id="" />
					</div>
					<div class="text-label">
						<label>Telefoonnummer</label>
						<input type="text" name="telefoon" id="" />
					</div>
				</div>

				<div class="col-3">
					<div class="text-label">
						<label>Toelichting</label>
						<textarea name="toelichting" cols="40" rows="5"></textarea>
					</div>
				</div>

				<input class="submit" type="submit" value="Verstuur" />
			</form>
		</main>
	</body>

	<script src="script_solliciteer.js"></script>
</html>
