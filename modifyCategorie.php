<?php require('actions/categories/modifyCategorieAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<body>
<?php include 'dashboard.php'; ?>

    <br><br>
    <form class="container" method="POST">
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom Categorie</label>
            <input type="text" class="form-control" name="nomcategorie" value="<?php echo  $categorie; ?>">
        </div>
        
        <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>
    </form>

</body></html>
