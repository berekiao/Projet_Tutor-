<?php
    session_start();

    require("actions/dbconnexion.php");

    if (isset($_POST["save"])) {
        
        if (!empty($_POST["email"]) && !empty($_POST["password"])) {
            
            $user_email = htmlspecialchars($_POST['email']);
            $user_password = htmlspecialchars($_POST['password']);

            $check = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ? AND password = ?");
            $check->execute(array($user_email, $user_password));
            $data = $check->fetch();

            if ($check->rowCount() > 0) {
                
                if ($user_password === $data["password"]) {

                    $_SESSION['auth'] = true;
                    $_SESSION["user"] = $data['prenomutilisateur'];

                    if ($data['statut'] == 'user') {
                        header("location: index.php");
                    } else {
                        header("location: dashboard.php");
                    }
                    
                }
            }
        }
    }

    


?>