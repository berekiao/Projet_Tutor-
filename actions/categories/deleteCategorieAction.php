<?php

    include('../../actions/dbconnexion.php');

    if (isset($_GET['idcategorie']) AND !empty($_GET['idcategorie'])) {

        $idcateg = $_GET['idcategorie'];

        $check = $bdd->prepare("SELECT idcategorie FROM categorie WHERE idcategorie = ?");
        $check->execute(array($idcateg));

        if ($check->rowCount() > 0) {
            
            $data = $check->fetch();

            if ($data['idcategorie'] == $_GET['idcategorie']) {
                
                $delete = $bdd->prepare("DELETE FROM categorie WHERE idcategorie = ?");
                $delete->execute(array($idcateg));

                header('location: ../../showCategorie');
            }
        }
    }
?>