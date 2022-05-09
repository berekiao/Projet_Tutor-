<?php

    require("actions/dbconnexion.php");

    $getInfoUser = $bdd->query('SELECT * FROM utilisateur WHERE statut = "user" ');
?>