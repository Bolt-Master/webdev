<?php
require("components/header.php");
?>
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<form action="support-process.php" method="post">
					    <legend>Form to fill</legend>
					    <label>First name:</label><br>
					    <input type="text" name="fname" value=""><br>
					    <label>Last name:</label><br>
					    <input type="text" name="lname" value=""><br>
					    <label>Email:</label><br>
					    <input type="text" name="email" value=""><br>
					    <label>What product have dissapointed you</label><br>
					    <input type="text" name="productName" value=""><br>
					      <label>What type of problem:</label><br>
						  <select name="problemType">
						    <option>App termination</option>
						    <option>No internet</option>
						    <option>Problems with update</option>
						    <option>Other</option>
						  </select><br><br>
				  <input type="submit" name="submit">
				</form>
			</div>

			<div class="col-lg-6 ">
				<p>This form is used to collect data about some problem that you have faced while using of our products. Also
				here you can list some imporovements that can be done for our software. If you have any question feel free to contact us in our social network or just feel this form. We will answer for your request in 3 - 5 days.</p>
			</div>
		</div>
	</div>
<?php
require("components/footer.php");
?>