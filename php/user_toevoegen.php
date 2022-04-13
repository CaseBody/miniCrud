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
'INSERT INTO ACCOUNTS (username, password, super_user)
VALUES (:username, :password, :super_user)';
$stmt = $connect->prepare($sql);
$stmt->bindParam(":username", $_POST["username"]);
$stmt->bindParam(":password", password_hash($_POST["password"], PASSWORD_BCRYPT));
$stmt->bindParam(":super_user", $_POST["superuser"]);
$result = $stmt->execute();
 
echo json_encode($result);

exit;
 
?>