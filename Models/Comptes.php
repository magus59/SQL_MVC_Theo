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

function insertCompte($NumeroCompte, $Solde, $id_client)
{
    $bdd = new BDD;
    $conn = $bdd->connect();
    $request =  $conn->prepare('INSERT INTO Comptes ( NumeroCompte, Solde, id_client) VALUES (?,?,?)');
    $request->execute([$NumeroCompte, $Solde, $id_client]);
}

function getComptesById($id_client)
{
    $bdd = new BDD;
    $conn = $bdd->connect();
    $request =  $conn->prepare('SELECT id, NumeroCompte, Solde FROM Comptes WHERE id_client = ?;');
    $request->execute([$id_client]);
    return $request->fetch(PDO::FETCH_ASSOC);
}
