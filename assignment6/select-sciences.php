<!DOCTYPE html>
<html>
<head></head>

<body>
	<form>
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
$connection = new mysqli("localhost", "root", "", "univ");
if($connection->connect_error){
	die("connection failed".$connection->connect_error);
}

include("sciences-rank.php");

$sql = "SELECT * FROM univ WHERE field = 'Science' ORDER BY rank DESC";
$result = $connection->query($sql);

if(isset($_POST['science'])){
	$sql = "SELECT * FROM univ WHERE field = 'Science' ORDER BY rank DESC";
	$result = $connection->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$univ = new SciencesRank($row['name'], $row['location'], $row['field']);
			echo "<td>".$univ->getName()."</td><td>".$univ->getLocation()."</td><td>".$univ->getField()."</td><td>".$row['rank']."</td></tr>";
		}
	}
}
?>
		</tbody>
	</table><br>
	<input type="submit" name="tech" value="Technical Univ Ranking" formaction="select-tech.php" formmethod="post">
	<input type="submit" name="science" value="Global Univ Ranking" formaction="select.php" formmethod="post"> 
	</form> 
</body>
</html>