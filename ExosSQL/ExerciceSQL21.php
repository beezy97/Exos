<?php 
$requete = $conn->prepare("CREATE TABLE Employe (id INT, nom VARCHAR(50), salaire FLOAT, date_embauche DATE)");
$requete->execute();
?>