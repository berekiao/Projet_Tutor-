<?php 

    require('actions/chauffeur/newChauffeurAction.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<body>
<?php include 'dashboard.php'; ?>

    <br><br>
    <form class="container" method="POST">
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom Chauffeur</label>
            <input type="text" class="form-control" name="nomchauf">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom Chauffeur</label>
            <input type="text" class="form-control" name="prenomchauf">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sexe</label>
            <input type="text" class="form-control" name="sexe">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlSelect" class="form-label">Catégorie de Voiture</label>
            <select class="form-control" id="exampleFormControlSelect1" name= "idcategorie" >
                <option>Selectionner la categorie de vehicule</option>
                <?php foreach ($data as $affiche) : ?>
                <option value="<?= $affiche->idcategorie ?>" ><?= $affiche->nomcategorie ?></option>
                <?php endforeach; ?>
            </select>
                
        </div>

        <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>
    </form>

</body>
</html>


