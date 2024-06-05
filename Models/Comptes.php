<?php

require_once 'BDD.php';

function fetchComptes()
{
    $bdd = new BDD;
    $conn = $bdd->connect();
    $request =  $conn->prepare('SELECT id, NumeroCompte, Solde, id_client FROM Comptes;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

