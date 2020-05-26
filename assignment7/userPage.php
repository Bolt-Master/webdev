<?php
require("components/header.php");
?>
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
					axios.get('http://localhost/php/assignment7/data.json').then(response => {
						this.users = response.data;
					}) 
				}
			}	
		});
	</script>
<?php
require("components/footer.php");
?>

