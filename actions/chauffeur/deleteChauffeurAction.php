<?php
    include("../../actions/dbconnexion.php");

    if (isset($_GET['idchauffeur']) AND !empty($_GET['idchauffeur'])) {
        
        $idchauff = $_GET['idchauffeur'];

        $check = $bdd->prepare("SELECT idchauffeur FROM chauffeur WHERE idchauffeur = ?");
        $check->execute(array($idchauff));

        if ($check->rowCount() > 0 ) {
            
            $data = $check->fetch();

            $delete = $bdd->prepare("DELETE FROM chauffeur WHERE idchauffeur = ?");
            $delete->execute(array($idchauff));

            header("location: ../../showChauffeur.php");
        }
    }
?>