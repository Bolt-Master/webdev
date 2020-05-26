<?php
require("components/header.php");
?>
<!DOCTYPE html>
<html>
	<head lang = "en">
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	</head>
	<body>
		<div id="vue" >
			<table border=1>
				<thead>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Tariff</th>
				</thead>
				<tbody>
					<tr v-for="user in users">
						<td v-for="data in user">{{ data }}</td>
					</tr>
				</tbody>
			</table>
	</div>
<?php
require("components/footer.php");
?>

		<script type="text/javascript">
			new Vue({
				el:'#vue',
				data: {
					users: [],
				},
				created: function(){
					this.getUsers();
				},
				methods: {
					getUsers(){
						axios.get('http://localhost/php/assignment7/users.json').then(response => {
							this.users = response.data;
						}) 
					}
				}
				
			});
		</script>

