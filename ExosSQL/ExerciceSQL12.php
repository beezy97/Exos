<?php
$requete = $conn->prepare("SELECT SUM(montant)
                            FROM Commande");
$requete->execute();
?>