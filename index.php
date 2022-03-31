<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="styles.css" />
		<title>Cafetaria Cicek</title>

		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Roboto+Mono:wght@100;400;700&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body class="home">
		<main>
			<?php 	
				// include_once("includes/header.php");
				// require_once("includes/connect.php");
				// /**
				//  * @var PDO $connect
				//  */

				// $sql = "SELECT * FROM MENU WHERE Categorie='Vleesgerechten'";
				// $stmt = $connect->prepare($sql);
				// $stmt->execute();
				// $result = $stmt->fetchAll();
			?>

			<div class="content">
				<p class="titel">Welkom bij cafetaria Cicek in Nijmegen</p>
			</div>
			<!-- <footer>
				<ul>
					<li><a href="">Telefoon nummer</a></li>
					<li><p>-</p></li>
					<li><a href="">Email</a></li>
					<li><p>-</p></li>
					<li><a href="">Adres</a></li>
				</ul>
			</footer> -->
		</main>

		<div class="info-blokken">
			<div class="blok">
				<p class="titel">OPENINGSTIJDEN</p>
				<p class="desc">Op deze tijden zijn wij geopened</p>

				<table>
					<tr>
						<th>Afhalen</th>
						<th>Bezorgen</th>
					</tr>
					<tr>
						<td>15:00 - 23:59</td>
						<td>16:00 - 23:45</td>
					</tr>
				</table>
			</div>

			<div class="blok">
				<p class="titel">BESTELLEN</p>
				<p class="desc">Bestel nu uw favorite gerechten.</p>

				<a class="blok-link" href="#menu">Bestel</a>
			</div>

			<div class="blok">
				<p class="titel">SOLLICITEREN</p>
				<p class="desc">Zoek je een leuke baan? Kom ons dan versterken.</p>

				<a class="blok-link" href="solliciteer.php">Solliciteer</a>
			</div>
		</div>

		<div class="menu" id="menu">
			<div class="categories">
				<ul>
					<li>
						<button class="selected_catagorie" type="button">Vleesgerechten</button>
					</li>
					<li>
						<button type="button">Pizza's</button>
					</li>
					<li>
						<button type="button">Kapsalon's</button>
					</li>
					<li>
						<button type="button">Turkse Pizza's</button>
					</li>
					<li>
						<button type="button">Broodjes</button>
					</li>
					<li>
						<button type="button">Bijgerechten</button>
					</li>
					<li>
						<button type="button">Friet</button>
					</li>
					<li>
						<button type="button">Snacks</button>
					</li>
					<li>
						<button type="button">Sauzen</button>
					</li>
					<li>
						<button type="button">Dranken</button>
					</li>
				</ul>
			</div>
			<div class="items">
				<?php  
					foreach ($result as $res)
					{
						?>
						<div class="item">
							<p class="titel"><?php echo $res['titel']?></p>
							<img src="<?php echo $res["image_link"] ?>" alt="" />
							<div class="bottom">
								<p class="prijs">€ <?php echo $res["prijs"] ?></p>
								<button type="button">Bestel</button>
							</div>
						</div>
						<?php 
					}
				?>
			</div>
		</div>

		<?php 
			include_once("includes/footer.php");
		?>

	</body>

	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="script_index.js"></script>
</html>
