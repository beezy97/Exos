<?php
$requete = $conn->prepare("SELECT * FROM Employe
                            WHERE date_embauche = '2023-03-20'");
$requete->execute();
?>