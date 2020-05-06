<?php
require("components/header.php");
$connection = new mysqli("localhost", "root", "", "test");
#$connection2 = new mysqli("localhost", "root", "", "test");


if($connection->connect_error){
	die("Connection failed: ".$connection->connect_error);
}

if(!empty($_POST['username']) && !empty($_POST['pwd'])){
	$stmt = $connection->prepare("SELECT password FROM login WHERE username = ?");
	$stmt->bind_param("s", $_POST['username']);
	$stmt->execute();
	$stmt->bind_result($password);
	$stmt->fetch();
	$stmt->close();

	if($password == $_POST['pwd']){
		$stmt2 = $connection->prepare("DELETE FROM login WHERE username = ?");
		$stmt2->bind_param("s", $_POST['username']);
		$stmt2->execute();
		echo "Successfully";
	} else{
		echo "Failed";
	}
}
?>

<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					    <legend>Deleting account</legend>
					    <label>Username:</label><br>
					    <input type="text" name="username" value=""><br>
					    <label>Enter your  password</label><br>
					    <input type="password" name="pwd" value=""><br>
				  <input type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>

<?php
require("components/footer.php");
?>