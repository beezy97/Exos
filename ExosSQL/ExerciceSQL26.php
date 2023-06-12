<?php 
$requete = $conn->prepare("CREATE TABLE Projets (id INT, nom VARCHAR(50), date_debut DATE)");
$requete->execute();
?>