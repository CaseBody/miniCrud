<?php
 
/*
* Write your logic to manage the data
* like storing data in database
*/
 
require_once("includes/connect.php");
/**
* @var PDO $connect
*/

$sql = 
'UPDATE MENU 
SET image_link=:afbeelding,prijs=:prijs,categorie=:categorie
WHERE ID=:id
';
$stmt = $connect->prepare($sql);
$stmt->bindParam(":id", $_POST["id"]);
$stmt->bindParam(":afbeelding", $_POST["afbeelding"]);
$stmt->bindParam(":prijs", $_POST["prijs"]);
$stmt->bindParam(":categorie", $_POST["categorie"]);
$result = $stmt->execute();
 
echo json_encode($result);

exit;
 
?>