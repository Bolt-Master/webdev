<?php
session_start();
if(isset($_SESSION["user"])){
	$_SESSION["user"] = time();
	if((time() - $_SESSION["user"]) > 900){
		session_destroy();
		session_unset();
	}
}
include("components/header.php");
?>

<div class="container-fluid padding">
	<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Our latest collections</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class="lead">Summer collection</p>
	</div>
	</div>
</div>

<div class="container-fluid padding">
	<div class="row text-center padding">
		<?php
		$conn = mysqli_connect("localhost", "root",'',"shop");
		if($conn->connect_error){
			die("Connection failed".$conn->connect_error);
		  }

		  $sql = "SELECT * FROM clothes";
		  $result = mysqli_query($conn, $sql);
		  while($row = mysqli_fetch_array($result)){
		  	echo "<div>";
		  	echo "<h3>".$row['name']."</h3>";
		  	echo "<p>".$row['price']."</p>";
		  	echo "<img src='uploads/".$row['img']."'>";
		  	echo "</div>";
		  }
		?>
	</div>
	<hr class="my-4">
</div>
</body></html>