<?php
$requete = $conn->prepare("SELECT AVG(montant)
                            FROM Commande");
$requete->execute();
?>