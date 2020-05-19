<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<legend>University adding form</legend>
	    <label>Name:</label><br>
	    <input type="text" name="name" value=""><br>
	    <label>Location:</label><br>
	    <input type="text" name="location" value=""><br>
	    <label>Field:</label><br>
	    <input type="text" name="field" value=""><br>
	    <label>Academic Reputation:</label><br>
 		<input type="text" name="academicReputation" value=""><br>
	    <label>Employer Reputation</label><br>
	    <input type="text" name="employerReputation" value=""><br>
	    <label>FC Ratio</label><br>
	    <input type="text" name="FCRatio" value=""><br><br>
	    <input type="submit" name="submit">
	</form>

<?php
include("global-rank.php");
$connection = new mysqli("localhost", "root", "", "test");
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
$univ = new GlobalRank($_POST['name'], $_POST['location'], $_POST['field']);
$academicReputation = (int)$_POST['academicReputation'];
$employerReputation = (int)$_POST['employerReputation'];
$FCRatio = (int)$_POST['FCRatio'];
$overall = $univ->calculateRanking($academicReputation, $employerReputation, $FCRatio);
$stmt = $connection->prepare("INSERT INTO univ(name, location, field, rank) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssd",$_POST['name'], $_POST['location'], $_POST['field'], $overall);
$stmt->execute();
?>

	</body>
</html>