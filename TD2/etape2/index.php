<!-- Etape 2 : Lecture de la base de données avec formulaire :
si la date saisie est 0000-00-00, afficher le contenu de la base de données sinon 
afficher juste ce qui vient d'être saisi (voir étape 1)-->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>TD2-SIN 2020</title>
		<style type="text/css"></style>
	</head>
	<body>
        <form action="" method ="POST">
            <input type="text" name="nom" value="">
            <input type="text" name="prenom" value="">
            <input type="text" name="statut" value="">
            <input type="text" name="date" value="0000-00-00">
            <input type="submit" value="Envoyer">
        </form>
        <?php
            // récupération des données du formulaire
            $nom= $_POST['nom'];	
            $prenom= $_POST['prenom'];
            $statut= $_POST['statut'];
            $date= $_POST['date'];
            //afficher les données ici dans des div 
            echo "<div>$nom<div>";
            echo "<div>$prenom<div>";
            echo "<div>$statut<div>";
            // si la date est 0000-00-00 on affiche le contenu de la tables
            // sinon on affiche la valeur saisie
            if ($date==='0000-00-00) {
                lireContenu();
            }
            else echo "<div>$date<div>";
        ?>
    </body>
  
</html>

<?php
function lireContenu() {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "td1;
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset('utf8');
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	// lecture de toutes les données (TD1)
	$sql = "select* from famille_tbl"; 
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row['nom']. "  " . $row['prenom']. "   (" .$row['statut'] ."),    date de naissance : " . $row['date']."<br>";
		}
	} else {
		echo "0 results";
	}	
	$conn->close();  
}
?>



