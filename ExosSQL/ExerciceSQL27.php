<?php
$id = 1;
$nom = "Alex";
$datedebut = date_create('2022-12-15');

$requete = $conn->prepare("INSERT INTO Projet (id, nom, date_debut)
                    VALUES (:id, :nom, :date_debut)");
$requete->bindParam(':id', $id);
$requete->bindParam(':nom', $nom);
$requete->bindParam(':date_debut', $datedebut);
$requete->execute();
?>