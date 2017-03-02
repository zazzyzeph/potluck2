<!DOCTYPE html>
<html>
<head>
	<title>at</title>
	<link rel="stylesheet" type="text/css" href="/static/css/style.css">
</head>
<body>
	<style type="text/css">
		html,body{
			position:relative;
			height:100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		h1{
			margin:0;
			font-size:82px;
			text-align:center;
			color:white;
		}
	</style>
	<div class="container">
		<h1>HELL YEAH</h1>
		<?php
		$mysqli = new mysqli("localhost", "zazzy", "garbageboy", "potluckdb");

		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}

		$city = "Amersfoort";

		/* create a prepared statement */
		if ($stmt = $mysqli->prepare("SELECT * FROM users")) {


			/* bind parameters for markers */
    // $stmt->bind_param("s", $city);

			/* execute query */
			$stmt->execute();

			/* bind result */
			$result = $stmt->get_result();

			while ($myrow = $result->fetch_assoc()) {

        // use your $myrow array as you would with any other fetch
				printf("<p>%s</p>", $myrow['name']);

			}

			/* close statement */
			$stmt->close();
		}

		/* close connection */
		$mysqli->close();
		?>
	</div>
</body>
</html>