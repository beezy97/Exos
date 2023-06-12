<?php
$requete = $conn->prepare("SELECT Commande.*
                            FROM Commande
                            INNER JOIN Client
                            ON Commande.nom = Client.nom");
$requete->execute();
?>