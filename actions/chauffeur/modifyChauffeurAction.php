<?php

    require("actions/dbconnexion.php");

    $showcategorie = $bdd->query("SELECT * FROM categorie");
    $table = $showcategorie->fetchAll(PDO::FETCH_OBJ);

    if (isset($_GET['modify'])) {
        
        $id = $_GET['modify'];

        $check = $bdd->prepare("SELECT * FROM chauffeur INNER JOIN categorie WHERE idchauffeur = $id AND chauffeur.idcategorie = categorie.idcategorie ");
        $check->execute(array($id));

        if ($check->rowCount() == 1) {

            $data = $check->fetch();
            $nomchau = $data['nomchauf'];
            $prenomchau = $data['prenomchauf'];
            $pseudo = $data['pseudo'];
            $sexe = $data['sexe'];
            $categoriee = $data['nomcategorie'];
        }
    }

    if (isset($_POST["save"])) {

        if (!empty($_POST['nomchauf']) && !empty($_POST['prenomchauf']) && !empty($_POST['pseudo']) && !empty($_POST['sexe']) && !empty($_POST['idcategorie']))  {
           
            $nomchauffeur = htmlspecialchars($_POST["nomchauf"]);
            $prenomchauffeur = htmlspecialchars($_POST["prenomchauf"]);
            $pseudochauffeur = htmlspecialchars($_POST["pseudo"]);
            $sexechauffeur = htmlspecialchars($_POST["sexe"]);
            $idcate = htmlspecialchars($_POST["idcategorie"]);
            $id = $_GET['modify'];

            $update = $bdd->exec("UPDATE chauffeur SET nomchauf = '$nomchauffeur', prenomchauf = '$prenomchauffeur', pseudo = '$pseudochauffeur', sexe = '$sexechauffeur', idcategorie = '$idcate' WHERE idchauffeur = $id");
            
            header("location:showChauffeur.php");

        }
    }

?>