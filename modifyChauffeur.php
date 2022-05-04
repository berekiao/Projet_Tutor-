<?php require('actions/chauffeur/modifyChauffeurAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<body>
<?php include 'dashboard.php'; ?>

    <br><br>
    <form class="container" method="POST">
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom Chauffeur</label>
            <input type="text" class="form-control" name="nomchauf" value="<?php echo  $nomchau; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prenom Chauffeur</label>
            <input type="text" class="form-control" name="prenomchauf" value="<?php echo  $prenomchau; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" value="<?php echo  $pseudo; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sexe</label>
            <input type="text" class="form-control" name="sexe" value="<?php echo  $sexe; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categorie</label>
            <select class="form-control" id="exampleFormControlSelect1" name= "idcategorie" >
                <option><?php echo $categoriee ; ?></option>
                <?php foreach ($table as $tab) : ?>
                <option value="<?= $tab->idcategorie ?>" ><?= $tab->nomcategorie ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>
    </form>

</body></html>
