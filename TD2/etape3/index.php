<!-- Etape 3 : Ecriture dans la base des données saisies via
le formulaire suivie d'un affichage du contenu de la base -->

<?php
    // récupération des données du formulaire
    $nom= $_POST['nom'];	
    $prenom= $_POST['prenom'];
    $statut= $_POST['statut'];
    $date= $_POST['date'];

    EcritureData($nom, $prenom, $statut, $date);
    lireContenu();

?>
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
 
    </body>
  
</html>

<?php

// Fonction d'ajout
function EcritureData($nom, $prenom, $statut, $date) {
	$servername = ______________
	$username = ______________
	$password = ______________
	$dbname = ______________
	// Create connection
	_____________________________________________
	$conn->set_charset('utf8');
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	// ajout d'une entité
	$sql = "INSERT INTO famille_tbl (nom, prenom, statut, date) VALUES ('$nom', '$prenom', '$statut', '$date')";
	___________________________

	$conn->close();  
}

// consultation des données
function lireContenu() {
	$servername = ______________
	$username = ______________
	$password = ______________
	$dbname = ______________
	// Create connection
	_____________________________________________
	$conn->set_charset('utf8');
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	// lecture des données (TD1)
	_____________________________________________
	_____________________________________________
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo _____________________________________________
		}
	} else {
		echo "0 results";
	}	
	$conn->close();  
}
?>



