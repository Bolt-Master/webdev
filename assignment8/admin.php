
<!DOCTYPE html>
<html>
<head></head>

<body>
<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<form method="POST" action="upload.php" enctype="multipart/form-data">
					    <legend>Enter clothes parameters</legend>
					    <label>Name</label><br>
					    <input type="text" name="name"><br>
					    <label>Price</label><br>
					    <input type="text" name="price"><br>
					      Select image to upload:
						<input type="file" name="image">
						<input type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>
</body>
</html>