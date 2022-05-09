<?php

    require('actions/dbconnexion.php');

    $requete = $bdd->query("SELECT * FROM categorie INNER JOIN voiture WHERE voiture.idcategorie = categorie.idcategorie AND nomcategorie = 'citadine'");
    $recover = $requete->fetchAll(PDO::FETCH_OBJ);

?>