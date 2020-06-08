<?php
require("components/header.php");
?>

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

			<div class="col-lg-6 ">
				<p><a href = "login.php">Login as user</a></p>
			</div>
		</div>
	</div>

<?php
$connection = new mysqli("localhost", "root", "", "shop");
if($connection->connect_error){
	die("Connection failed: ".$connection->connect_error);
}
if(!empty($_POST['admin']) AND !empty($_POST['password'])){
	$admin = $_POST['admin'];
	$stmt = $connection->prepare("SELECT adminLogin, password FROM admin WHERE adminLogin = ? and password = ?");
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
require("components/footer.php");
?>