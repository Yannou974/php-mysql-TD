<!-- Etape 4 : Eviter d'effectuer une écriture si l'un des champs n'est pas saisi. -->

<?php
    // récupération des données du formulaire
    if (_____________________________________) {
        $nom= $_POST['nom'];	
        $prenom= $_POST['prenom'];
        $statut= $_POST['statut'];
        $date= $_POST['date'];

        EcritureData($nom, $prenom, $statut, $date);
        lireContenu();
    }
    else {
        echo "Un des paramètres est vides";
    }
    
    
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
    __________
    ......
}

// fonction de consultation des données
function lireContenu() {
    ______________
    .....
}
?>



