<?php
$id = 1;
$nom = 'Alex';
$requete = $conn->prepare("UPDATE Client 
                            SET nom = :nom
                            WHERE id = :id");
$requete->bindParam(':id', $id);
$requete->bindParam(':nom', $nom);
$requete->execute();
?>