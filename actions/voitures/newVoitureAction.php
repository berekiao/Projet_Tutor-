<?php

    require ('actions/dbconnexion.php');

    $showcategorie = $bdd->query("SELECT * FROM categorie");
    $views = $showcategorie->fetchAll(PDO::FETCH_OBJ);

    if (isset($_POST["save"])) {
        
        if (!empty($_POST["marque"]) && !empty($_POST["modele"]) && !empty($_POST["anneefabrication"]) && !empty($_POST["datemiseservice"]) && !empty($_POST["dateassurance"]) && !empty($_POST["tarifhoraire"]) && !empty($_POST["immatriculation"]) && !empty($_POST["idcategorie"])) {
            
            $marque = htmlspecialchars($_POST["marque"]);
            $modele = htmlspecialchars($_POST["modele"]);
            $anneefabrication = htmlspecialchars($_POST["anneefabrication"]);
            $dateservice = htmlspecialchars($_POST["datemiseservice"]);
            $dateassurance = htmlspecialchars($_POST["dateassurance"]);
            $tarif = htmlspecialchars($_POST["tarifhoraire"]);
            $immatriculation = htmlspecialchars($_POST["immatriculation"]);
            $idcat = htmlspecialchars($_POST["idcategorie"]);

            $check = $bdd->prepare("SELECT * FROM voiture WHERE modele = ?");
            $check->execute(array($modele));

            if ($check->rowCount() == 0) {
                
                $insert = $bdd->prepare("INSERT INTO voiture(marque,modele,anneefabrication,datemiseservice,dateassurance,tarifhoraire,immatriculation,idcategorie) VALUES(?,?,?,?,?,?,?,?) ");
                $insert->execute(array($marque, $modele, $anneefabrication, $dateservice, $dateassurance, $tarif, $immatriculation, $idcat));

                header("location: showVoiture");
            }
        }
    }       

?>