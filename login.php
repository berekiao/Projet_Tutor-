<?php 
    require("actions/utilisateur/loginAction.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<body>


    <br><br>

    
        <form style="margin: 45px;" method="POST" >
        
            <h1 style="color:blue" >Connexion</h1>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="abc@gmail.com">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputPassword4">Mot de Passe</label>
                <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="******">
                </div>
            </div>            
            <button type="submit" class="btn btn-primary" name="save">Connexion</button>

            <br><br>

            <p>Si vous n'avez pas un compte inscrivez-vous <a href="inscription.php">Inscrivez-vous</a> </p> 
        </form>

</body>
</html>
