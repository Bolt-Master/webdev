<?php
require("components/header.php");
$connection = new mysqli("localhost", "root", "", "test");
if($connection->connect_error){
	die("Connection failed: ".$connection->connect_error);
}
$select = "SELECT firstName, lastName, email, productName, problemType FROM reports";
$result = $connection->query($select);

echo '<table><tr>
	  <th>FirtsName</th>
	  <th>LastName</th>
	  <th>Email</th>
	  <th>ProductName</th>
	  <th>ProblemType</th></tr>';

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "<tr>
			  <th>".$row['firstName']."</th>
			  <th>".$row['lastName']."</th>
			  <th>".$row['email']."</th>
			  <th>".$row['productName']."</th>
			  <th>".$row['problemType']."</th></tr>";
	}
	echo "</table>";
} else{
	echo "No reports";
}
$connection->close();
require("components/footer.php");
?>

