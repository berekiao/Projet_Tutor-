<?php

    session_start();

    // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['auth'])){
        header('Location: login.php');
        die();
    }

?>