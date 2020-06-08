<?php
//--FINAL--CLASS
final class Admin{
	private $admin;
	private $password;

	//--CONSTRUCTOR--
	public function _construct($admin, $password){
		$this->admin = $admin;
		$this->password = $password;
	}

	//--GETTER
	public function getAdmin(){ return $this->admin; }
}
require("components/header.php");
?>

	<body>
		<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<form  method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					    <legend>Application form</legend>
					    <label>Admin</label><br>
					    <input type="text" name = "admin" value="" required/><br>
					    <label>Password</label><br>
					    <input type="password" name = "password" value="" required/><br>
				  <input type = "submit" name = "submit" value = "Login"/>
				</form>
			</div>
		</div>
	</div>

<?php
//--DB CONNECTION--
$connection = new mysqli("localhost", "root", "", "test");
$counter = 0;
include("user.php");
if($connection->connect_error){
	die("Error connection".$connection->connect_error);
}

if(isset($_POST['submit'])){
	$admin = new Admin($_POST['admin'], $_POST['password']);
	$stmt = $connection->prepare("SELECT admin, password FROM admin WHERE admin = ? and password = ?");
	$stmt->bind_param("ss", $_POST['admin'], $_POST['password']);
	$stmt->execute();
	$result = $stmt->get_result();
	$array = Array();
	if($result->num_rows > 0){
		$select = $connection->query("SELECT fname, lname, tariff FROM users");
		while($row = $select->fetch_assoc()){
			//--CLASS--
			$user = new User($row['fname'], $row['lname'], $row['tariff']);
			array_push($array, Array("fname" => $user->getFName(), "lname" => $user->getLName(), "tariff" => $user->getTariff()));
			$counter++;
			}
		//--JSON--
		$json = json_encode($array);
		file_put_contents("users.json", $json);
		ob_start();
		//--REDIRECTING--
		header('Location: '."adminPage.php");
		ob_end_flush();
		} else{
			echo "Wrong id of password";
		}
	}
require("components/footer.php");
?>

		


