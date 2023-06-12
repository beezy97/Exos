<?php
$requete = $conn->prepare("SELECT DISTINCT Client.*
                            FROM Client
                            INNER JOIN Commande
                            ON Client.id = Client.client_id");
$requete->execute();
?>