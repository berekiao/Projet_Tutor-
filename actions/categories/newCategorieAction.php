
<?php
    
    require ("actions/dbconnexion.php");

    if (isset($_POST["save"])) {
        
        //Verifier si tous les champs sont bien mis 
        if (!empty($_POST["nomcategorie"])) {

            $categorie = htmlspecialchars($_POST["nomcategorie"]);

            //On verifie si la categorie la existe 
            $check = $bdd->prepare('SELECT nomcategorie FROM categorie WHERE nomcategorie = ?');
            $check->execute(array($categorie));
           

            if ($check->rowCount() == 0) {
                
                //On insert dans la base de donnée
                $insert = $bdd->prepare("INSERT INTO categorie(nomcategorie) VALUES(?)");
                $insert->execute(array($categorie));

                header("location:showCategorie.php");

            } else {

                echo ('Deja enregistrer');
            }

                          
        }

    }
?>



