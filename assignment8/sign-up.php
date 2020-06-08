<?php
require("components/header.php");
?>

<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					    <legend>User registration form</legend>
					    <label>username:</label><br>
					    <input type="text" name="username" value=""><br>
					    <label>First name:</label><br>
					    <input type="text" name="fname" value=""><br>
					    <label>Last name:</label><br>
					    <input type="text" name="lname" value=""><br>
					    <label>Password:</label><br>
					    <input type="password" name="email" value=""><br>
					    <label>Enter your email</label><br>
					    <input type="text" name="password" value=""><br><br>
				  <input type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>

<?php
$connection = new mysqli("localhost", "root", "", "shop");
if($connection->connect_error){
	die("Connection failed: ".$connection->connect_error);
}

if(!empty($_POST['username']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['password']) && !empty($_POST['email'])){
	class User{
		private $username;
		private $fname;
		private $lname;
		private $password;
		private $email;

		function __construct($username, $fname, $lname, $password, $email){
			$this->username = trim($username);
			$this->fname = trim($fname);
			$this->lname = trim($lname);
			$this->password = trim($password);
			$this->email = trim($email);
		}

		function getusername(){
			return $this->username;
		}

		function getFirstName(){
			return $this->fname;
		}

		function setFirstName($fname){
			$this->fname = trim($fname);
		}

		function getLastName(){
			return $this->lname;
		}

		function getEmail(){
			return $this->email;
		}

		function getPassword(){
			return $this->password;
		}

		function displayInfoAboutUser() : vousername {
			print ("<p>Hello ".$this->getFirstName()."</p>");
		}
	}

	$user = new User($_POST['username'], $_POST['fname'], $_POST['lname'], $_POST['password'], $_POST['email']);

	$stmt = $connection->prepare("INSERT INTO users(username, firstName, lastName, email, password) VALUES (?, ?, ?, ?, ?)");
	$uname = $user->getusername();
	$fname = $user->getFirstName();
	$lname = $user->getLastName();
	$pass = $user->getPassword();
	$email = $user->getEmail();

	$stmt->bind_param("sssss", $uname, $fname, $lname, $pass, $email);
	$stmt->execute();
	$connection->close();

	echo '<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
			<p>Hello
			'.$user->getFirstName().'
			</p></div>
		</div>
	</div>';
} else{
	echo "<p>All fields should be filled</p>";
}
include("components/footer.php");
?>