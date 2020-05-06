<?php
require("components/header.php");
?>

<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<form method="get" action="check-login.php">
					    <legend>User registration form</legend>
					    <label>Username:</label><br>
					    <input type="text" name="username" value=""><br>
					    <label>Enter your password</label><br>
					    <input type="password" name="pwd" value=""><br><br>
				  <input type="submit" name="submit">
				</form>
			</div>

			<div class="col-lg-6 ">
				<p><a href = "change-password.php">You can change your password here</a></p>
				<p><a href = "delete-user.php">You can delete your user account here</a></p>
			</div>
		</div>
	</div>

<?php
require("components/footer.php");
?>