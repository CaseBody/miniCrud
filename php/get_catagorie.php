<?php
 
/*
* Write your logic to manage the data
* like storing data in database
*/
 
require_once("../includes/connect.php");
/**
* @var PDO $connect
*/

$sql = 'SELECT * FROM MENU WHERE Categorie=:categorie';
$stmt = $connect->prepare($sql);
$stmt->bindParam(":categorie", $_POST["categorie"]);
$stmt->execute();
$result = $stmt->fetchAll();
 
echo json_encode($result);

exit;
 
?>