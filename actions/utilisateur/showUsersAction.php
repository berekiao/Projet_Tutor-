<?php

    require('actions/dbconnexion.php');

    $getInfoUsers = $bdd->query('SELECT * FROM utilisateur WHERE statut = "admin" ');



?>