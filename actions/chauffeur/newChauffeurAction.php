<?php

    require('actions/dbconnexion.php');

    
    $showcategorie = $bdd->query("SELECT * FROM categorie");
    $data = $showcategorie->fetchAll(PDO::FETCH_OBJ);

    if (isset($_POST["save"])) {
        
        if (!empty($_POST["nomchauf"]) && !empty($_POST["prenomchauf"]) && !empty($_POST["pseudo"]) && !empty($_POST["sexe"]) && !empty($_POST["idcategorie"])) {
            
            $nomchauffeur = htmlspecialchars($_POST["nomchauf"]);
            $prenomchauffeur = htmlspecialchars($_POST["prenomchauf"]);
            $pseudochauffeur = htmlspecialchars($_POST["pseudo"]);
            $sexechauffeur = htmlspecialchars($_POST["sexe"]);
            $idcat = htmlspecialchars($_POST["idcategorie"]);

            $check = $bdd->prepare("SELECT * FROM chauffeur WHERE pseudo = ?");
            $check->execute(array($pseudochauffeur));

            if ($check->rowCount() == 0) {
                
                $insert = $bdd->prepare("INSERT INTO chauffeur(nomchauf, prenomchauf, pseudo, sexe, idcategorie) VALUES (?,?,?,?,?)");
                $insert->execute(array($nomchauffeur,$prenomchauffeur,$pseudochauffeur,$sexechauffeur,$idcat));

                header("location:showChauffeur.php");

            }else {

                echo ("Deja enregistrer");
            }
        }
    }         
            
    







?>