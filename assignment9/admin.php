<?php
$connection = mysqli_connect("localhost", "root", "", "startups");
if($connection->connect_error){
	exit();
}

?>
<!DOCTYPE html>
<html>
<head></head>

<body>
<table border=1px>
	<thead>
		<th>legalName</th>
		<th>anotherName</th>
		<th>hasProduct</th>
		<th>description</th>
		<th>sphere</th>
		<th>revenue6</th>
		<th>revenue3</th>
		<th>revenue1</th>
		<th>customer6</th>
		<th>customer3</th>
		<th>customer1</th>
		<th>founders</th>
		<th>decision</th>
		<th>base</th>
	</thead>
	<tbody>
		<tr>

<?php
	$counter;
	$sql = "SELECT * FROM applicants";
	$result = mysqli_query($connection, $sql);
	while($row = mysqli_fetch_array($result)){
		for($counter = 0; $counter < 14; $counter++){
			echo "<th>".$row[$counter]."</th>";
		}
	}

?>

</tbody>
</table>
</body>
</html>


