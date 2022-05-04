<?php

    require("actions/voitures/modifyVoitureAction.php");


?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<body>
<?php include 'dashboard.php'; ?>

    <br><br>
    <form class="container" method="POST">
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Marque</label>
            <input type="text" class="form-control" name="marque" value="<?php echo $lamarque; ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Modele</label>
            <input type="text" class="form-control" name="modele" value="<?php echo $lemodele; ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Annee de Fabrication</label>
            <input type="text" class="form-control" name="anneefabrication" value="<?php echo $anneefabr; ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date de mise en service</label>
            <input type="date" class="form-control" name="datemiseservice" value="<?php echo $miseservice; ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date assurance</label>
            <input type="date" class="form-control" name="dateassurance" value="<?php echo $assurance; ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tarif Horaire</label>
            <input type="text" class="form-control" name="tarifhoraire"value="<?php echo $horaire; ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Immatriculation</label>
            <input type="text" class="form-control" name="immatriculation" value="<?php echo $imma; ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom Catégorie</label>
            <select class="form-control" id="exampleFormControlSelect1" name= "idcategorie" >
                <option><?php echo $cat; ?></option>
                <?php foreach($recover as $rec) : ?>
                <option value="<?= $rec->idcategorie; ?>"><?= $rec->nomcategorie; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>
    </form>

</body>
</html>