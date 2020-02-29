<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>TSIN</title>
</head>
<body>
<h1>Parc Informatique Réaumur</h1>
		
		
		<?php
		$username = "sinbrive"; 
		$pass = "xxxx"; 
		$host = "db4free.net:3306"; 
		$dbname = "sinbase"; 
		
		try 
		{ 
			$myPDO = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);
		}
		catch(PDOException $ex) 
		{ 
			die("Failed to connect to the database: " . $ex->getMessage()); 
		} 

		$result = $myPDO->query("SELECT * FROM table_mesures");
		
		$rows = $result->fetchAll();
		
		foreach($rows as $row) {

			echo $row[0].' '.$row[1].' '.$row[2].' '.$row[3].'<br>';
		}
		
		$myPDO=null;
		?>			
		
	</body>
</html>

<?php
/*		$username = "sinbrive"; 
		$pass = "xxxx"; 
		$host = "db4free.net:3306"; 
		$dbname = "sinbase"; 
		

		$mysqli = new mysqli($host, $username, $pass, $dbname);

		if (!$mysqli) {
		  die('Could not connect: ' . mysqli_error($mysqli));
		}

		$result = $mysqli->query("SELECT * FROM table_mesures");
		
		if (!$result) {
			echo "Erreur : " . mysqli_error($mysqli);
		} else {
			while ($record = mysqli_fetch_row($result)) {
				echo "$record[1]  $record[0] \n";
			}
		}
		mysqli_close($mysqli);
*/
		?>			
		

<?php 
/*
		$username = "sinbrive"; 
		$pass = "xxxx"; 
		$host = "db4free.net:3306"; 
		$dbname = "sinbase"; 
		
		$con = mysqli_connect($host, $username, $pass);
		if (!$con) {
		  die('Could not connect: ' . mysqli_error($con));
		}

		mysqli_select_db($con, $dbname) or die ('Can\'t use foo : ' . mysqli_error($con));
		
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
*/
		?>	

		
