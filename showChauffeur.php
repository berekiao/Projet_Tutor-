<?php 
    
    require("actions/chauffeur/showChauffeurAction.php");


?>

<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<body>

<?php include ('dashboard.php'); ?> <br><br>

<div class="container">
    <a href="newChauffeur.php" class="btn btn-primary">Ajouter un nouveau chauffeur</a>
    <br><br>
    <?php
    
        while ($liste = $getInfoChauffeur->fetch() ) { ?>
            <div class="card">
                <h5 class="card-header">@<?= $liste['pseudo']; ?></h5>

                <div class="card-body">
                    <p class="card-text">
                        <?= $liste['nomchauf'] ;?> <?= $liste['prenomchauf']; ?>
                    </p>

                    <a href="modifyChauffeur.php?modify=<?= $liste['idchauffeur']; ?>" class="btn btn-warning">Modifier </a>
                    <a href="actions/chauffeur/deleteChauffeurAction.php?idchauffeur=<?= $liste['idchauffeur']; ?>" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
            <br>
            <?php 
            
        }


    
    
    ?>
</div>
    
</body>
</html>