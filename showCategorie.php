<?php require ('actions/categories/showCategorieAction.php');

    // Me rappeller de mettre la session

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<body>
    <?php include 'dashboard.php'; ?>

    <br><br>

<div class="container">
<a href="newCategorie.php" class="btn btn-primary">Ajouter une nouvelle categorie</a>
<br><br>
<?php

    while($liste = $getInfoCategorie->fetch()){
        ?>
        <div class="card">
            <h5 class="card-header"> @<?= $liste['idcategorie']; ?></h5>



            <div class="card-body">
                <p class="card-text">
                    <?= $liste['nomcategorie']; ?>

                </p>
                <a href="modifyCategorie.php?modify=<?= $liste['idcategorie']; ?>" class="btn btn-warning">Modifier </a>
                <a href="actions/categories/deleteCategorieAction.php?idcategorie=<?= $liste['idcategorie']; ?>" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
        <br>
        <?php


    }

?>

</div>
</body>
</html>

