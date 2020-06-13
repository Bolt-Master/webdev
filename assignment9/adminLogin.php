<!DOCTYPE html>
<html>
<head></head>
<body>
<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					    <legend>Enter website</legend>
					    <label>Admin login</label><br>
					    <input type="text" name="admin" value=""><br>
					    <label>Enter your password</label><br>
					    <input type="password" name="password" value=""><br><br>
				  <input type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>

<?php
$connection = new mysqli("localhost", "root", "", "startups");
if($connection->connect_error){
	die("Connection failed: ".$connection->connect_error);
}
if(isset($_POST['admin']) AND isset($_POST['password'])){
	$admin = $_POST['admin'];
	$stmt = $connection->prepare("SELECT admin, password FROM admin WHERE admin = ? and password = ?");
	$stmt->bind_param("ss", $_POST['admin'], $_POST['password']);
	$stmt->execute();
	$result = $stmt->get_result();

	if($result->num_rows > 0){
		ob_start();
		header('Location: '."admin.php");
		ob_end_flush();
	} else{
		echo "Password is not correct";
	}
} else{
	echo "Fill all fields";
}
?>
</body>
</html>