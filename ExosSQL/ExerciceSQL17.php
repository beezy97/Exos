<?php 
$requete = $conn->prepare("CREATE TABLE PRODUIT (id INT, nom VARCHAR(50), prix FLOAT)");
$requete->execute();
?>