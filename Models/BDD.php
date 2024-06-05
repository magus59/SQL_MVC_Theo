<?php

class BDD
{
    function connect()
    {
        try {
            $pdo = new PDO('mysql:host=127.0.0.1; dbname=exo', 'root', '');
            // echo 'connexion réussie';
            // echo '<br/>';
            // echo '<br/>';
            return $pdo;
        } catch (PDOException $e) {
            echo 'une erreur est survenue' . $e->getMessage();
        }
    }
}
