<?php
$id = 5;
$requete = $conn->prepare("DELETE FROM Client
                        WHERE id = :id");
$requete->bindParam('id', $id);
$requete->execute();
?>