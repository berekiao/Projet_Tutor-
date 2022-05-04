<?php
    require ("actions/dbconnexion.php");
    // Recupérer les informations dans la table categorie
    $getInfoCategorie = $bdd->query("SELECT * FROM categorie");

?>