<?php
$requete = $conn->prepare("SELECT * FROM Produit
                            WHERE montant > 50");
$requete->execute();
?>