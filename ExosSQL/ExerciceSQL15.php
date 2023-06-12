<?php
$requete = $conn->prepare("SELECT DISTINCT Client.*
                            FROM Client
                            INNER JOIN Commande
                            ON Client.id = Client.client_id AND Commande.montant > 100");
$requete->execute();
?>