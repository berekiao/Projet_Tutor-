<?php

    require('actions/dbconnexion.php');

    $getVoiture = $bdd->query("SELECT * FROM voiture");
    

?>