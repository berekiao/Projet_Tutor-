<?php

    require('../../actions/dbconnexion.php');

    if (isset($_GET['idvoiture']) && !empty($_GET['idvoiture'])) {
        
        $voiture = $_GET['idvoiture'];

        $check = $bdd->prepare("SELECT idvoiture FROM voiture WHERE idvoiture = ?");
        $check ->execute(array($voiture));

        if ($check->rowCount() > 0) {
            
            $data = $check->fetch();

            $delete = $bdd->prepare("DELETE FROM voiture WHERE idvoiture = ?");
            $delete->execute(array($voiture));

            header("location: ../../showVoiture.php");
        }
        
    }


?>