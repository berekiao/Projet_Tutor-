<?php
    
    require('actions/dbconnexion.php');

        if (isset($_GET['modify'])) {

            $id=$_GET['modify'];

            $check= $bdd->prepare("SELECT * from categorie where idcategorie=$id");
            $check->execute(array($id));

        if($check->rowCount() ==1 ){
            $liste = $check->fetch();
            $categorie = $liste['nomcategorie'];
        }

        

      }

      if (isset($_POST["save"])) {
        
        if (!empty($_POST['nomcategorie'])) {
            
            $nomcategorie = htmlspecialchars($_POST['nomcategorie']);
            $id = $_GET['modify'];

            $update = $bdd->prepare("UPDATE categorie SET nomcategorie = ? WHERE idcategorie = ?");
            $update->execute(array($nomcategorie, $id));

            header('location:showCategorie.php');
        }

        
    }






    
    
?>