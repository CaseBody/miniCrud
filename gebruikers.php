<?php 
	include_once("includes/session.php");
?>

<?php 
    if ($_SESSION["super_user"] === 0)
    {
        header("location: not_authorized.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link
			href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Roboto+Mono:wght@100;400;700&display=swap"
			rel="stylesheet"
		/>
</head>
<body class="admin_panel">
<?php 
        include_once("includes/header.php");
        require_once("includes/connect.php");

        $sql = "SELECT * FROM ACCOUNTS";
		$stmt = $connect->prepare($sql); 
        $stmt->execute(); 
        $result = $stmt->fetchAll();
        ?>

        
        
		<div class="bewerk_panel">
			<div class="item_bewerk">
				<form action="">
					<div class="label-item">
						<label for="naam">Gebruikersnaam</label>
						<select name="naam" id="naam">
							<?php 
                            foreach ($result as $res){
                                ?>

							<option value="<?php echo $res["id"] ?>"><?php echo $res["username"] ?></option>
							<?php 

                            }

                            ?>
						</select>
					</div>
					<div class="label-item">
						<label for="super_user">SuperUser</label>
                        <input type="checkbox" name="superuser" id="superuser">
					</div>
					<div class="buttons">
                        <input id="submit" type="submit" value="Wijzig">
                        <button id="delete">Verwijder</button>
                    </div>
					<div class="label-item">
						<label   id="status_text">Item is bij gewerkt</label>
					</div>
				</form>
			</div>

            <div class="item_bewerk">
				<form id="form_toevoegen" action="">
					<div class="label-item">
						<label for="naam">Gebruikersnaam</label>
						<input type="text" name="naam_toevoegen" id="naam_toevoegen"/>
					</div>
                    <div class="label-item">
						<label for="password">Wachtwoord</label>
						<input type="text" name="password" id="password"/>
					</div>
					<div class="label-item">
						<label for="super_user">SuperUser</label>
                        <input type="checkbox" name="superuser_toevoegen" id="superuser_toevoegen">
					</div>
					<div style="justify-content: flex-start;" class="buttons">
                        <input id="submit_toevoegen" type="submit" value="Toevoegen">
                    </div>
					<div class="label-item">
						<label id="status_text_toevoegen">Item is bij gewerkt</label>
					</div>
				</form>
			</div>
		</div>
        <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
		<script src="js/script_gebruikers.js"></script>
</body>
</html>