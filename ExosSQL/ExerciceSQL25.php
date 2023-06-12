<?php
 $requete = $conn->prepare("SELECT *
                            FROM Employe
                            ORDER BY salaire 
                            DESC LIMIT 10");
$requete->execute();
?>