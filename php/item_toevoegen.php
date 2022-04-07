<?php 
	include_once("includes/session.php");
?>

<?php
 
/*
* Write your logic to manage the data
* like storing data in database
*/
 
require_once("../includes/connect.php");
/**
* @var PDO $connect
*/

$sql = 
'INSERT INTO MENU (titel, image_link, prijs, categorie)
VALUES (:titel, :image_link, :prijs, :categorie)';
$stmt = $connect->prepare($sql);
$stmt->bindParam(":titel", $_POST["titel"]);
$stmt->bindParam(":image_link", $_POST["afbeelding"]);
$stmt->bindParam(":prijs", $_POST["prijs"]);
$stmt->bindParam(":categorie", $_POST["categorie"]);
$result = $stmt->execute();
 
echo json_encode($result);

exit;
 
?>