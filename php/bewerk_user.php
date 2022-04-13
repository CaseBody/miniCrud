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
'UPDATE ACCOUNTS 
SET super_user=:super_user
WHERE id=:id
';
$stmt = $connect->prepare($sql);
$stmt->bindParam(":id", $_POST["id"]);
$stmt->bindParam(":super_user", $_POST["super_user"]);
$result = $stmt->execute();
 
echo json_encode($result);

exit;
 
?>