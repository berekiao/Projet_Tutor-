<?php

    require("actions/voitures/showVoitureAction.php");


?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<body>

<?php include ('dashboard.php'); ?> <br><br>

<div class="container">
    <a href="newVoiture.php" class="btn btn-primary">Ajouter une nouvelle voiture</a>
    <br><br>
    <?php
    
        while ($liste = $getVoiture->fetch() ) { ?>
            <div class="card">
                <h5 class="card-header">@<?= $liste['marque']; ?></h5>

                <div class="card-body">
                    <p class="card-text">
                        <?= $liste['modele'] ;?>
                    </p>

                    <a href="modifyVoiture.php?modify=<?= $liste['idvoiture']; ?>" class="btn btn-warning">Modifier </a>
                    <a href="actions/voitures/deleteVoitureAction.php?idvoiture=<?= $liste['idvoiture']; ?>" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
            <br>
            <?php 
            
        }


    
    
    ?>
</div>
    
</body>
</html>