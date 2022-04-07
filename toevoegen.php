<?php 
	include_once("includes/session.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Cicek - Bewerk item</title>
		<link rel="stylesheet" href="styles.css" />
		<link
			href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Roboto+Mono:wght@100;400;700&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body class="admin_panel">
		<?php 
        include_once("includes/header.php");
        require_once("includes/connect.php");

        $sql = "SELECT * FROM MENU";
		$stmt = $connect->prepare($sql); 
        $stmt->execute(); 
        $result = $stmt->fetchAll(); ?>
        
		<div class="bewerk_panel">
			<div class="item_bewerk">
				<form action="">
					<div class="label-item">
						<label for="naam">Product Naam</label>
						<input type="text" name="naam" id="naam" />
					</div>
					<div class="label-item">
						<label for="afbeelding">Afbeelding</label>
						<input type="text" name="afbeelding" id="afbeelding" />
					</div>
					<div class="label-item">
						<label for="prijs">Prijs</label>
						<input type="text" name="prijs" id="prijs" />
					</div>
					<div class="label-item">
						<label for="categorie">Categorie</label>
						<input type="text" name="categorie" id="categorie" />
					</div>
					<div class="buttons toevoegen">
                        <input id="submit" type="submit" value="Toevoegen">
                    </div>
					<div class="label-item">
						<label   id="status_text">Item is bij gewerkt</label>
					</div>
				</form>
			</div>
		</div>
        <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
		<script src="js/script_toevoegen.js"></script>
	</body>
</html>
