<?php
$nom = 'Alex';
$requete = $conn->prepare("SELECT Produit.* 
                            FROM Produit
                            INNER JOIN Commande
                            ON Produit.id = Commande.id
                            INNER JOIN Client
                            ON Commande.client_id = Client.id
                        WHERE Client.nom = :nom ")

$requete->bindParam(':nom', $nom);
$requete->execute();
                                
$requete->execute();
?>