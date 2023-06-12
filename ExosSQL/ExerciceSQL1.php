<?php 
$requete = $conn->prepare("CREATE TABLE Client (id INT, nom VARCHAR(50), email VARCHAR(50))");
$requete->execute();
?>