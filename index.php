<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ma page web</title>
</head>
<body>
<h1>Ma page web</h1>
		
		
		<?php
		$username = "sinbrive"; 
		$pass = "tsin2020"; 
		$host = "db4free.net:3306"; 
		$dbname = "sinbase"; 
		
		$con = mysqli_connect($host, $username, $pass);
		if (!$con) {
		  die('Could not connect: ' . mysqli_error($con));
		}

		mysqli_select_db($con, $dbname) or die ('Can\'t use db : ' . mysqli_error($con));
		
		$query = "SELECT * FROM table_mesures";

		$result = mysqli_query( $con, $query ); 
		if (!$result) {
			echo "Erreur : " . mysqli_error($con);
		} else {
			while ($record = mysqli_fetch_row($result)) {
				echo "$record[1]  $record[0] \n";
			}
		}
		mysqli_close($con);
		?>			
		
	</body>
</html>
