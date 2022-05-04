<?php

    try {
        $bdd = new PDO("mysql:host=localhost;dbname=autocars;charset=utf8", "root", "");

    } catch (PDOException $e) {

        die("Erreur" .$e->getMessage());

    }

?>