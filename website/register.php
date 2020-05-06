<?php
require("components/header.php");
?>

<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					    <legend>User registration form</legend>
					    <label>Username:</label><br>
					    <input type="text" name="username" value=""><br>
					    <label>First name:</label><br>
					    <input type="text" name="fname" value=""><br>
					    <label>Last name:</label><br>
					    <input type="text" name="lname" value=""><br>
					    <label>Email:</label><br>
					    <input type="text" name="email" value=""><br>
					    <label>Enter your password</label><br>
					    <input type="password" name="password" value=""><br><br>
				  <input type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>

<?php
$connection = new mysqli("localhost", "root", "", "test");
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

		function getUsername(){
			return $this->username;
		}

		function getFirstName(){
			return $this->fname;
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

		function displayInfoAboutUser() : void {
			echo "<p>Hello ".$this->getUsername()."</p>";
			print ("<p>Your name is ".$this->getFirstName()."</p>");
			printf ("<p>Your last name is %s </p>", $this->getLastName());
			echo "<p>Your email is ".$this->getEmail()."</p>";
		}
	}

	$user = new User($_POST['username'], $_POST['fname'], $_POST['lname'], $_POST['password'], $_POST['email']);

	$stmt = $connection->prepare("INSERT INTO login(username, firstName, lastName, password, email) VALUES (?, ?, ?, ?, ?)");
	$uname = $user->getUsername();
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
			'.$user->getUsername().'
			</p></div>
		</div>
	</div>';
} else{
	echo "<p>All fields should be filled</p>";
}
$connection->close();
require("components/footer.php");
?>