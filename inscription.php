<?php 
    require("actions/utilisateur/newUser.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<body>


    <br><br>

    
        <form style="margin: 45px;" method="POST" >
        
            <h1 style="color:blue">Inscription</h1>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Nom</label>
                <input type="text" class="form-control" id="inputEmail4" name="nomutilisateur" placeholder="Your Surname">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Prenom</label>
                <input type="text" class="form-control" id="inputPassword4" name="prenomutilisateur" placeholder="Your Name">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Contact</label>
                <input type="text" class="form-control" id="inputEmail4" name="tel" placeholder="+229 90000000">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">email</label>
                <input type="email" class="form-control" id="inputPassword4" name="email" placeholder="abc@gmail.com">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAddress">Mot de Passe</label>
                <input type="password" class="form-control" id="inputAddress" name="password" placeholder="***********">
            </div>
            
            <button type="submit" class="btn btn-primary" name="save">Inscription</button>

            <br><br>
            <p><a href="login.php">Connectez-vous </a> </p>
        </form>

</body>
</html>
