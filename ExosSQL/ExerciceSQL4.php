<?php 
    $requete = $conn->prepare("SELECT nom FROM Client");
    $requete->execute();
?>