<?php 
$requete = $conn->prepare("CREATE TABLE Commande (id INT, client_id INT, montant FLOAT)");
$requete->execute();
?>