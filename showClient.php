<?php 
    
    require("actions/client/showClientAction.php");


?>

<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
<body>

<?php include ('dashboard.php'); ?> <br><br>

<div class="container">
   
    <br><br>
    <?php
    
        while ($liste = $getInfoUser->fetch() ) { ?>
            <div class="card">
                <h5 class="card-header">@<?= $liste['email']; ?></h5>

                <div class="card-body">
                    <p class="card-text">
                        <?= $liste['nomutilisateur'] ;?> <?= $liste['prenomutilisateur']; ?>
                    </p>

                    <a href="modifyClient.php?modify=<?= $liste['idutilisateur']; ?>" class="btn btn-warning">Modifier </a>                </div>
            </div>
            <br>
            <?php 
            
        }


    
    
    ?>
</div>
    
</body>
</html>