<?php

    require("actions/dbconnexion.php");

    if (isset($_POST["save"])) {
        
        
        if (!empty($_POST["nomutilisateur"]) && !empty($_POST["prenomutilisateur"]) && !empty($_POST["tel"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {

            $nom = htmlspecialchars($_POST["nomutilisateur"]);
            $prenom = htmlspecialchars($_POST["prenomutilisateur"]);
            $telephone = htmlspecialchars($_POST["tel"]);
            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST['password']);


            $check = $bdd->prepare('SELECT * FROM utilisateur WHERE email = ?');
            $check->execute(array($email));

            $data = $check->fetch();
           

            if ($check->rowCount() == 0) {
                
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                    $insert = $bdd->prepare("INSERT INTO utilisateur(nomutilisateur, prenomutilisateur, tel, email, password, statut) VALUES(?,?,?,?,?,?)");
                    $insert->execute(array($nom, $prenom, $telephone, $email, $password, "user"));

                    echo ('Vous vous êtes bien inscrit');
                } 

            } else {

                echo ('Deja enregistrer');
            }

                          
        }

    }

?>