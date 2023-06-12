<?php
 $requete = $conn->prepare("SELECT AVG(salaire)
                            FROM Employe");
$requete->execute();
?>