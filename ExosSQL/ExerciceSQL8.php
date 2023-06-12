<?php
    $id = 1;
    $clientID = "3555";
    $montant = "105,3";
    
    $requete = $conn->prepare("INSERT INTO Commande (id, client_id, montant)
                        VALUES (:id, :client_id, :montant)");
    $requete->bindParam(':id', $id);
    $requete->bindParam(':client_id', $clientID);
    $requete->bindParam(':montant', $montant);
    $requete->execute();
?>