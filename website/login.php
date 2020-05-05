<?php
require("components/header.php");
?>

<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<form method="get" action="checkLogin.php">
					    <legend>User registration form</legend>
					    <label>Username:</label><br>
					    <input type="text" name="username" value=""><br>
					    <label>Enter your password</label><br>
					    <input type="password" name="password" value=""><br><br>
				  <input type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>

<?php
require("components/footer.php");
?>