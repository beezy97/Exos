<?php
$id = 1;
$nom = "Livre1";
$prix = "25,5";

$requete = $conn->prepare("INSERT INTO Produit (id, nom, prix)
                            VALUES (:id, :nom, :prix)");
$requete->bindParam(':id', $id);
$requete->bindParam(':nom', $nom);
$requete->bindParam(':prix', $prix);
$requete->execute();
?>