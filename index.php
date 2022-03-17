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
				include_once("header.php");
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

				<a class="blok-link" href="">Bestel</a>
			</div>

			<div class="blok">
				<p class="titel">SOLLICITEREN</p>
				<p class="desc">Zoek je een leuke baan? Kom ons dan versterken.</p>

				<a class="blok-link" href="">Solliciteer</a>
			</div>
		</div>

		<div class="menu">
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
				<div class="item">
					<p class="titel">Shoarma Friet</p>
					<img src="https://overetengesproken.nl/blog/wp-content/uploads/2019/08/shoarma-van-oesterzwam-1.jpg" alt="" />
					<div class="bottom">
						<p class="prijs">€ 7.50</p>
						<button type="button">Bestel</button>
					</div>
				</div>

				<div class="item">
					<p class="titel">Shoarma Schotel</p>
					<img src="https://overetengesproken.nl/blog/wp-content/uploads/2019/08/shoarma-van-oesterzwam-1.jpg" alt="" />
					<div class="bottom">
						<p class="prijs">€ 10.00</p>
						<button type="button">Bestel</button>
					</div>
				</div>

				<div class="item">
					<p class="titel">Lamsshoarma Schotel</p>
					<img src="https://overetengesproken.nl/blog/wp-content/uploads/2019/08/shoarma-van-oesterzwam-1.jpg" alt="" />
					<div class="bottom">
						<p class="prijs">€ 10.00</p>
						<button type="button">Bestel</button>
					</div>
				</div>

				<div class="item">
					<p class="titel">Doner Schotel</p>
					<img src="https://overetengesproken.nl/blog/wp-content/uploads/2019/08/shoarma-van-oesterzwam-1.jpg" alt="" />
					<div class="bottom">
						<p class="prijs">€ 10.00</p>
						<button type="button">Bestel</button>
					</div>
				</div>

				<div class="item">
					<p class="titel">Kipfilet Schotel</p>
					<img src="https://overetengesproken.nl/blog/wp-content/uploads/2019/08/shoarma-van-oesterzwam-1.jpg" alt="" />
					<div class="bottom">
						<p class="prijs">€ 11.00</p>
						<button type="button">Bestel</button>
					</div>
				</div>

				<div class="item">
					<p class="titel">Fantasie Shoarma Schotel</p>
					<img src="https://overetengesproken.nl/blog/wp-content/uploads/2019/08/shoarma-van-oesterzwam-1.jpg" alt="" />
					<div class="bottom">
						<p class="prijs">€ 10.50</p>
						<button type="button">Bestel</button>
					</div>
				</div>

				<div class="item">
					<p class="titel">Schnitzel Schotel</p>
					<img src="https://overetengesproken.nl/blog/wp-content/uploads/2019/08/shoarma-van-oesterzwam-1.jpg" alt="" />
					<div class="bottom">
						<p class="prijs">€ 9.00</p>
						<button type="button">Bestel</button>
					</div>
				</div>

				<div class="item">
					<p class="titel">Hamburger Schotel</p>
					<img src="https://overetengesproken.nl/blog/wp-content/uploads/2019/08/shoarma-van-oesterzwam-1.jpg" alt="" />
					<div class="bottom">
						<p class="prijs">€ 9.00</p>
						<button type="button">Bestel</button>
					</div>
				</div>

				<div class="item">
					<p class="titel">Mix Schotel</p>
					<img src="https://overetengesproken.nl/blog/wp-content/uploads/2019/08/shoarma-van-oesterzwam-1.jpg" alt="" />
					<div class="bottom">
						<p class="prijs">€ 15.00</p>
						<button type="button">Bestel</button>
					</div>
				</div>

				<div class="item">
					<p class="titel">Doner Schotel Fantasie</p>
					<img src="https://overetengesproken.nl/blog/wp-content/uploads/2019/08/shoarma-van-oesterzwam-1.jpg" alt="" />
					<div class="bottom">
						<p class="prijs">€ 11.00</p>
						<button type="button">Bestel</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
