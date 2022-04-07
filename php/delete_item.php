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
'DELETE FROM MENU 
WHERE ID=:id
';
$stmt = $connect->prepare($sql);
$stmt->bindParam(":id", $_POST["id"]);
$result = $stmt->execute();
echo json_encode($result);

exit;
 
?>