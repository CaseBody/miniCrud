<?php
 
/*
* Write your logic to manage the data
* like storing data in database
*/
 
require_once("../includes/connect.php");
/**
* @var PDO $connect
*/

$sql = 'SELECT * FROM MENU WHERE ID=:id';
$stmt = $connect->prepare($sql);
$stmt->bindParam(":id", $_POST["id"]);
$stmt->execute();
$result = $stmt->fetchAll();
 
echo json_encode($result);

exit;
 
?>