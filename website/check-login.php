<?php
require("components/header.php");
$connection = new mysqli("localhost", "root", "", "test");
$connection2 = new mysqli("localhost", "root", "", "test");
if($connection->connect_error){
	die("Connection failed: ".$connection->connect_error);
}

if(!empty($_GET['username']) AND !empty($_GET['pwd'])){
	$user = $_GET['username'];
	$stmt = $connection->prepare("SELECT username FROM login WHERE username = ?");
	$stmt->bind_param("s", $_GET['username']);
	$stmt->execute();
	$stmt->bind_result($username);
	$stmt->fetch();
	$stmt2 = $connection2->prepare("SELECT password FROM login WHERE username = ?");
	$stmt2->bind_param("s", $_GET['username']);
	$stmt2->execute();
	$stmt2->bind_result($password);
	$stmt2->fetch();

	if($username == $user && $_GET['pwd'] == $password){
		echo '<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
			<p>Hello
			'.$user.'
			</p></div>
		</div>
	</div>';
	} else{
		echo '<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
			<p>Login or password is incorrect
			</p></div>
		</div>
	</div>';
	}
}
$connection->close();
require("components/footer.php");
?>