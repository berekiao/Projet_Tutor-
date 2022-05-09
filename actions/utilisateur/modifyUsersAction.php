<?php
    
    require('actions/dbconnexion.php');

        if (isset($_GET['modify'])) {

            $id=$_GET['modify'];

            $check= $bdd->prepare("SELECT * from utilisateur where idutilisateur=$id");
            $check->execute(array($id));

        if($check->rowCount() ==1 ){
            $liste = $check->fetch();
            $statut = $liste['statut'];
        }

        

      }

      if (isset($_POST["save"])) {
        
        if (!empty($_POST['statut'])) {
            
            $status = htmlspecialchars($_POST['statut']);
            $id = $_GET['modify'];

            $update = $bdd->prepare("UPDATE utilisateur SET statut = ? WHERE idutilisateur = ?");
            $update->execute(array($status, $id));

            header('location:showUsers.php');
        }

        
    }






    
    
?>