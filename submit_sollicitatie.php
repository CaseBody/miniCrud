<?php
 
/*
* Write your logic to manage the data
* like storing data in database
*/
 
require_once("includes/connect.php");
/**
* @var PDO $connect
*/

$sql = 'INSERT INTO sollicitaties (naam, geboorte_datum, email, telefoonnummer, toelichting)
VALUES (:naam, :geboorte_datum, :email, :telefoonnummer, :toelichting)';
$stmt = $connect->prepare($sql);
$stmt->bindParam(":naam", $_POST["naam"]);
$stmt->bindParam(":geboorte_datum", $_POST["geboorte_datum"]);
$stmt->bindParam(":email", $_POST["email"]);
$stmt->bindParam(":telefoonnummer", $_POST["telefoon"]);
$stmt->bindParam(":toelichting", $_POST["toelichting"]);
$stmt->execute();
$result = $stmt->fetchAll();
 
echo json_encode($result);

exit;
 
?>