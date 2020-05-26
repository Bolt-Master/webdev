<?php
require("components/header.php");
?>
<body>
		<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<form  method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					    <legend>Application form</legend>
					    <label>User id</label><br>
					    <input type="text" name = "id" value="" required/><br>
					    <label>Password</label><br>
					    <input type="password" name = "password" value="" required/><br>
				  <input type = "submit" name = "submit" value = "Login"/>
				</form>
			</div>
		</div>
	</div>

<?php
include("user.php");
$connection = new mysqli("localhost", "root", "", "test");

if($connection->connect_error){
	die("Error connection".$connection->connect_error);
}
if(isset($_POST['submit'])){
	$stmt = $connection->prepare("SELECT fname, lname, tariff FROM users WHERE id = ? and password = ?");
	$stmt->bind_param("is", $_POST['id'], $_POST['password']);
	$stmt->execute();
	$result = $stmt->get_result();

	if($result->num_rows > 0){
		ob_start();
		while($row = $result->fetch_assoc()){
			$user = new User($row['fname'], $row['lname'], $row['tariff']);
			$array = Array(Array("fname" => $user->getFName(), "lname" => $user->getLName(), "tariff" => $user->getTariff()));
			}
		$json = json_encode($array);
		file_put_contents("data.json", $json);
		header('Location: '."userPage.php");
		ob_end_flush();
		} else{
			echo "Wrong id of password";
		}
	}
require("components/footer.php");
?>