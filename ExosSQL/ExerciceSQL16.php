<?php
$requete = $conn->prepare("SELECT DISTINCT Client.*
                            FROM Client
                            INNER JOIN (
                                SELECT sum(montant)
                                FROM Commande)
                                AS totalC ON Client.id");
                            
$requete->execute();
?>