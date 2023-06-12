<?php
$id = 1;
$nom = "Livre1";
$salaire = 2000;
$date_embauche = date_create('2023-03-20');

$requete = $conn->prepare("INSERT INTO Employe (id, nom, salaire, date_embauche)
                            VALUES (:id, :nom, :salaire, :date_embauche)");
$requete->bindParam(':id', $id);
$requete->bindParam(':nom', $nom);
$requete->bindParam(':salaire', $salaire);
$requete->bindParam(':date_embauche', $date_embauche);
$requete->execute();
?>