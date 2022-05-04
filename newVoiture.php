<?php

    require("actions/voitures/newVoitureAction.php");

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
            <input type="text" class="form-control" name="marque">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Modele</label>
            <input type="text" class="form-control" name="modele">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Annee de Fabrication</label>
            <input type="text" class="form-control" name="anneefabrication">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date de mise en service</label>
            <input type="date" class="form-control" name="datemiseservice">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date assurance</label>
            <input type="date" class="form-control" name="dateassurance">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tarif Horaire</label>
            <input type="text" class="form-control" name="tarifhoraire">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Immatriculation</label>
            <input type="text" class="form-control" name="immatriculation">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom Catégorie</label>
            <select class="form-control" id="exampleFormControlSelect1" name= "idcategorie" >
                <option>Selectionner la categorie de vehicule</option>
                <?php foreach ($views as $view) : ?>
                <option  value="<?= $view->idcategorie ?>" ><?= $view->nomcategorie ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>
    </form>

</body>
</html>