<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Cicek - Admin Panel</title>
		<link
			href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Roboto+Mono:wght@100;400;700&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body class="admin_panel">
		<?php 	
			include_once("includes/header.php");
			require_once("includes/connect.php");
			/**
			* @var PDO $connect
			*/

			$sql = "SELECT * FROM MENU";
			$stmt = $connect->prepare($sql); $stmt->execute(); $result = $stmt->fetchAll(); ?>

		<p class="titel">Cicek Admin Panel</p>
		<div class="buttons">
			<a href="">Nieuw item toevoegen</a>
			<a href="bewerk.php">Item bewerken</a>
		</div>
		<table>
			<tr>
				<th>ID</th>
				<th>Naam</th>
				<th>Afbeelding</th>
				<th>Prijs</th>
				<th>Categorie</th>
			</tr>
			<?php 
				foreach ($result as $res)
				{
					?>
			<tr>
				<td><?php echo $res["ID"] ?></td>
				<td><?php echo $res["titel"] ?></td>
				<td><?php echo $res["image_link"] ?></td>
				<td><?php echo $res["prijs"] ?></td>
				<td><?php echo $res["categorie"] ?></td>
			</tr>
			<?php
				}

			?>
		</table>
	</body>
</html>
