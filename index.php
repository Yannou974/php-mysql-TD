<head>
<meta charset="utf-8" />
<title>mysql-php</title>
</head>
<body>
<h1>mysql test</h1>
		<?php
		$username = 'sinbrive'; 
		$pass = "tsin2020"; 
		$host = "db4free.net:3306"; 
		$dbname = 'sinbase'; 

		$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 

		try 
		{ 
			$db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $pass, $options); 
		} 
		catch(PDOException $ex) 
		{ 
			die("Failed to connect to the database: " . $ex->getMessage()); 
		} 
				
		$stm = $db->query("SELECT * FROM table_mesures");

		$rows = $stm->fetchAll(PDO::FETCH_NUM);

		foreach($rows as $row) {

			echo $row[0].' '.$row[1].' '.$row[2].' '.$row[3].'<br>';
		}
		
		?>	
	</body>
</html>
