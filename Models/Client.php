<?php

require_once 'BDD.php';

function fetchClients()
{
    $bdd = new BDD;
    $conn = $bdd->connect();
    $request =  $conn->prepare('SELECT id, nom, prenom, mail, téléphone FROM Clients;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}