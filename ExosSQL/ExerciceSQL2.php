<?php
$id = 1;
$nom = "Alex";
$email = "alex.robert@gmail.com";

$requete = $conn->prepare("INSERT INTO Client (id, nom, email)
                    VALUES (:id, :nom, :email)");
$requete->bindParam(':id', $id);
$requete->bindParam(':nom', $nom);
$requete->bindParam(':email', $email);
$requete->execute();
?>