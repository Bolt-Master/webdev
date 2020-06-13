<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<a href="adminLogin.php">Admin page</a>
		<form method="post" action="application.php">
			<h2>Apply for startup funding</h2><br>
			<label>What is your company's legal name</label><br>
			<input type="text" name="legalName"/><br>
			<label>Does your company has another name</label><br>
			<input type="radio" name="anotherName" value="yes">Yes<br>
			<input type="radio" name="anotherName" value="no">No<br>
			<label>Do you have a product</label><br>
			<input type="radio" name="product" value="yes">Yes<br>
			<input type="radio" name="product" value="beta">Beta<br>
			<input type="radio" name="product" value="no">No<br>
			<label>Describe your company in one sentence</label><br>
			<input type="text" name="description"/><br>
			<h2>Business</h2><br>
			<input type="radio" name="business" value="tech">Tech<br>
			<input type="radio" name="business" value="fin">Financial<br>
			<input type="radio" name="business" value="bio">Biomedical<br>
		   	<h3>Money</h3>
		   	<label>Revenue 6 months ago</label>
		   	<input type="text" name="revenue6">
		   	<label>Revenue 3 months ago</label>
		   	<input type="text" name="revenue3"><br>
		   	<label>Revenue 1 months ago</label>
		   	<input type="text" name="revenue1">
		   	<br><br>
		   	<h3>Customers</h3>
		   	<label>Customers 6 months ago</label>
		   	<input type="text" name="customer6m">
		   	<label>Customers 3 months ago</label>
		   	<input type="text" name="customer3m">
		   	<label>Customers 1 months ago</label>
		   	<input type="text" name="customer1m">
		   	<h3>Team</h3>
		   	<label>How many people founded the company</label>
		   	<input type="text" name="founders"><br>
		   	<label>Why you decided to start company</label>
		   	<input type="text" name="decision"><br>
		   	<label>What is your email</label>
		   	<input type="text" name="email">
		   	<br><br>
		   	<input type="submit" name="submit">
		   </form>
		</body>
		</html>





