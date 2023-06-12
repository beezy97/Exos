<?php
$requete = $conn->prepare("SELECT * FROM Commande
                            WHERE montant > 100");
$requete->execute();
?>