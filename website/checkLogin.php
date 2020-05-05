<?php
require("components/header.php");
$connection = new mysqli("localhost", "root", "", "test");
if($connection->connect_error){
	die("Connection failed: ".$connection->connect_error);
}

if(!empty($_GET['username']) AND !empty($_GET['password'])){
	$stmt = $connection->prepare("SELECT username FROM login WHERE username = ?");
	$stmt->bind_param("s", trim($_GET['username']));
	$stmt2 = $connection->prepare("SELECT password FROM login WHERE username = ?");
	$stmt->bind_param("s", trim($_GET['password']));
	$stmt->execute();
	$stmt2->execute();
	$stmt->bind_result($username);
	$stmt2->bind_result($pass);
	$stmt->fetch();
	$stmt2->fetch();
	if($username == $_GET['username'] && $pass == $_GET['password']){
		echo "Hello ".$username;
	} else{
		echo "Login or password is incorrect";
	}
}

require("components/footer.php");
?>