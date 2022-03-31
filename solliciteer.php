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
			include_once("includes/header.php");
		?>

			<p class="titel">Solliciteer</p>

			<form action="" method="post">
				<div class="col-1">
					<div class="text-label">
						<label>Naam</label>
						<input type="text" placeholder="John Doe" name="naam" id="naam" />
					</div>
					<div class="text-label">
						<label>Geboortedatum</label>
						<input type="text" placeholder="13-03-2004" name="geboorte" id="geboorte" />
					</div>
				</div>

				<div class="col-2">
					<div class="text-label">
						<label>Email</label>
						<input type="text" placeholder="example@example.com"  name="email" id="email" />
					</div>
					<div class="text-label">
						<label>Telefoonnummer</label>
						<input type="text" placeholder="0601010101"  name="telefoon" id="telefoon" />
					</div>
				</div>

				<div class="col-3">
					<div class="text-label">
						<label>Toelichting</label>
						<textarea name="toelichting" placeholder="Motivatie, cv, etc"  id="toelichting" cols="40" rows="5"></textarea>
					</div>
				</div>

				<input class="submit" type="submit" value="Verstuur" />
			</form>

			<p class="titel" id="success_text">Sollicitatie is verstuurd!</p>

			<?php 
			include_once("includes/footer.php");
			?>
		</main>
	</body>

	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
	<script src="script_solliciteer.js"></script>
</html>
