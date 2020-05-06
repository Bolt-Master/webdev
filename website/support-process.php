<?php
require("components/header.php");

$connection = new mysqli("localhost", "root", "", "test");

if($connection->connect_error){
	die("Connection failed: ".$connection->connect_error);
}


if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['productName'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$productName = $_POST['productName'];
	$problemType = $_POST['problemType'];
	$data = array($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['productName']);

	$stmt = $connection->prepare("INSERT INTO reports () VALUES(?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $fname, $lname, $email, $productName, $problemType);
	$stmt->execute();

	echo "<p>Hello ".$fname."</p>";
	echo "<p>You have submitted your report with the following data</p>";
	$i = 0;
	
	while($i < count($data)){
		echo "<p>".$data[$i]."</p>";
		$i++;
	}

	switch($problemType){
		case "App termination":
			echo "<p>Your problem is: App termination</p>";
			break;

		case "No internet":
			echo "<p>Your problem is: No internet</p>";
			break;

		case "Problems with update":
			echo "<p>Your problem is: Problems with update</p>";
			break;

		case "Other":
			echo "<p>Your problem is: Other</p>";
			break;
	}

	echo "Submitted successfully";
	
} else{
	$error = "All the fields should be filled";
	echo "<p>".$error."<p>";
}
$connection->close();
require("components/footer.php");
?>