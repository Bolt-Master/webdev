<?php
include("emailException.php");
include("ucaughtException.php");

//--db connection
$connection = new mysqli("localhost", "root", "", "startups");

//--die
if($connection->connect_error){
	die("Connection error".$connection->connect_error);
}

if(isset($_POST['submit'])){
	if($_POST['legalName'] == ""){
		throw new Exception("Filled should be filled");
	}

	//exception
	if($_POST['product'] == ""){
		throw new Exception("Boxes should be checked");
	}

	//set_error_handler("lengthError");

	if(strlen($_POST['description']) == 0){
		throw new Exception("too short ");
	}

	//--try-catch
	try{
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === FALSE){
			throw new emailException($_POST['email']);
		}
	} catch(emailException $ex){
		echo $ex->errorMessage();
	}

	set_exception_handler('myException');

	//--try catch finally
	try{
		if($_POST['founders'] < 0){
			throw new Exception("Uncaght exception occured");
		}
	} catch(uncaughtException $ex){
		echo "Exception";
	} finally{
		$founders = $_POST['founders'];
	}

	//--insert
	$stmt = $connection->prepare("INSERT INTO applicants VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssiiiiiiiss", $_POST['legalName'], $_POST['anotherName'], $_POST['product'], $_POST['description'], $_POST['business'], $_POST['revenue6'], $_POST['revenue3'], $_POST['revenue1'], $_POST['customer6m'], $_POST['customer3m'], $_POST['customer1m'], $founders, $_POST['decision'], $_POST['email']);
	$stmt->execute();
}

?>