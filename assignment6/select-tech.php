<!DOCTYPE html>
<html>
<head></head>

<body>
	<form>
		<!--TABLE-->
		<table border=1> 
			<thead>
				<th>Name</th>
				<th>Location</th>
				<th>Field</th>
				<th>Rank(out of 5)</th>
			</thead>
			<tbody>
				<tr>
<?php
$connection = new mysqli("localhost", "root", "", "test");

if($connection->connect_error){
	die("connection failed".$connection->connect_error);
}

include("tech-rank.php");


if(isset($_POST['tech'])){
	$sql = "SELECT * FROM univ WHERE field = 'Technical' OR field = 'IT' ORDER BY rank DESC";
	$result = $connection->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$univ = new TechRank($row['name'], $row['location'], $row['field']);
			echo "<td>".$univ->getName()."</td><td>".$univ->getLocation()."</td><td>".$univ->getField()."</td><td>".$row['rank']."</td></tr>";
		}
	}
}

?>
		</tbody>
	</table><br>
	<input type="submit" name="tech" value="Global Univ Ranking" formaction="select.php" formmethod="post">
	<input type="submit" name="science" value="Science Univ Ranking" formaction="select-sciences.php" formmethod="post"> 
	</form> 
</body>
</html>