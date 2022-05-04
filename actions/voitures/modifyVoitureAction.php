<?php

    require("actions/dbconnexion.php");

    $showcategorie = $bdd->query("SELECT * FROM categorie");
    $recover = $showcategorie->fetchAll(PDO::FETCH_OBJ);

    if (isset($_GET["modify"])) {
        
        $id = $_GET["modify"];

        $check = $bdd->prepare("SELECT * FROM voiture INNER JOIN categorie WHERE idvoiture = $id AND voiture.idcategorie = categorie.idcategorie ");
        $check->execute(array($id));

        if ($check->rowCount() == 1) {

            $data = $check->fetch();

            $lamarque = $data['marque'];
            $lemodele = $data['modele'];
            $anneefabr = $data['anneefabrication'];
            $miseservice = $data['datemiseservice'];
            $assurance = $data['dateassurance'];
            $horaire = $data['tarifhoraire'];
            $imma = $data['immatriculation'];
            $cat = $data['nomcategorie'];
            

        }
    }

    if (isset($_POST["save"])) {
        
        if (!empty($_POST["marque"]) && !empty($_POST["modele"]) && !empty($_POST["anneefabrication"]) && !empty($_POST["datemiseservice"]) && !empty($_POST["dateassurance"]) && !empty($_POST["tarifhoraire"]) && !empty($_POST["immatriculation"]) && !empty($_POST["idcategorie"])) {
            
            $marque = htmlspecialchars($_POST["marque"]);
            $modele = htmlspecialchars($_POST["modele"]);
            $anneefabrication = htmlspecialchars($_POST["anneefabrication"]);
            $miseservice = htmlspecialchars($_POST["datemiseservice"]);
            $dateassurance = htmlspecialchars($_POST["dateassurance"]);
            $tarif = htmlspecialchars($_POST["tarifhoraire"]);
            $immatriculation = htmlspecialchars($_POST["immatriculation"]);
            $idcateg = htmlspecialchars($_POST["idcategorie"]);
            $id = $_GET["modify"];
            
            $update = $bdd->prepare("UPDATE voiture SET marque=?, modele=?, anneefabrication=?, datemiseservice=?, dateassurance=?, tarifhoraire=?, immatriculation=?, idcategorie=? WHERE idvoiture = ?");
            $update->execute(array($marque, $modele, $anneefabrication, $miseservice, $dateassurance, $tarif, $immatriculation, $idcateg, $id));
        }

    }


?>