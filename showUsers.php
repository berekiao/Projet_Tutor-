<?php 
    
    require("actions/utilisateur/showUsersAction.php");


?>

<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<body>

<?php include ('dashboard.php'); ?> <br><br>

<div class="container">
    <a href="showClient.php" class="btn btn-primary">Ajouter un nouveau administrateur</a>
    <br><br>
    <?php
    
        while ($liste = $getInfoUsers->fetch() ) { ?>
            <div class="card">
                <h5 class="card-header">@<?= $liste['email']; ?></h5>

                <div class="card-body">
                    <p class="card-text">
                        <?= $liste['nomutilisateur'] ;?> <?= $liste['prenomutilisateur']; ?>
                    </p>

                    <a href="#" class="btn btn-warning">Modifier </a>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
            <br>
            <?php 
            
        }


    
    
    ?>
</div>
    
</body>
</html>