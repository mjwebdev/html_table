<html>
<head>
	<title>Generating an HTML Table in PHP</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>HTML Table in PHP</h1><hr />
		</header>
		<table class="table">
			<thead>
				<th>User #</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Full Name</th>
				<th>Full Name in UPPERCASE</th>
				<th>Length of Name</th>
			</thead>
			<tbody>
					<?php
						$counter = 1;

						$users = array( 
						   array('first_name' => 'Michael', 'last_name' => ' Baughman '),
						   array('first_name' => 'David', 'last_name' => 'Karp'),
						   array('first_name' => 'Joe', 'last_name' => ' Wu'),
						   array('first_name' => 'Brian', 'last_name' => 'Bailey') 
						);

						foreach ($users as $user) {
							echo "<tr>";
							echo "<td>" . $counter . "</td>";
							echo "<td>" . $user["first_name"] . "</td>";
							echo "<td>" . $user["last_name"] . "</td>";
							echo "<td>" . $user["first_name"] . " " . $user["last_name"] . "</td>";
							echo "<td>" . strtoupper($user["first_name"]) . " " . strtoupper($user["last_name"]) . "</td>";
							$name_length = strlen($user["first_name"]) + strlen($user["last_name"]);
							echo "<td>" . $name_length . "</td>";
							echo "</tr>";
							$counter++;
						}
					?>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>