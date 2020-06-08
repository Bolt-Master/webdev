<!DOCTYPE html>
<html>
<head></head>

<body>
	<!--TABLE-->
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

$sql = "SELECT * FROM univ ORDER BY rank DESC";
$result = $connection->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "<td>".$row['name']."</td><td>".$row['location']."</td><td>".$row['field']."</td><td>".$row['rank']."</td></tr>";
		}
	}
?>
		</tbody>
	</table><br> 
	<input type="submit" name="tech" value="Technical Univ Ranking" formaction="select-tech.php" formmethod="post">
	<input type="submit" name="science" value="Science Univ Ranking" formaction="select-sciences.php" formmethod="post"> 
	</form>
</body>
</html>