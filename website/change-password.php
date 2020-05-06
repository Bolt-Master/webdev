<?php
require("components/header.php");
$connection = new mysqli("localhost", "root", "", "test");
$connection2 = new mysqli("localhost", "root", "", "test");


if($connection->connect_error){
	die("Connection failed: ".$connection->connect_error);
}

if(!empty($_POST['username']) && !empty($_POST['oldPwd']) && !empty($_POST['newPwd']) && !empty($_POST['reNewPwd'])){
	$stmt = $connection->prepare("SELECT password FROM login WHERE username = ?");
	$stmt->bind_param("s", $_POST['username']);
	$stmt->execute();
	$stmt->bind_result($password);
	$stmt->fetch();
	$username = $_POST['username'];

	if($_POST['newPwd'] == $_POST['reNewPwd']){
		$newPwd = $_POST['newPwd'];
	} else{
		echo "passwords does not match";
	}

	if($password == $_POST['oldPwd']){
		$newPwd = $_POST['newPwd'];
		$stmt2 = $connection2->prepare("UPDATE login SET password = ?
		WHERE username = ?");
		$stmt2->bind_param("ss", $newPwd, $username);
		$stmt2->execute();
		echo "Done";
	}
	else{
		echo "Password is incorrect";
	}
}
?>
<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					    <legend>Change password</legend>
					    <label>Username:</label><br>
					    <input type="text" name="username" value=""><br>
					    <label>Enter your old password</label><br>
					    <input type="password" name="oldPwd" value=""><br>
					     <label>Enter your new password</label><br>
					    <input type="password" name="newPwd" value=""><br>
					     <label>REtype your old password</label><br>
					    <input type="password" name="reNewPwd" value=""><br>
				  <input type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>

<?php
require("components/footer.php");
?>