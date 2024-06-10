<?php

require_once '../Models/Comptes.php';
require_once '../Models/Client.php';

// echo '<pre>';
// var_dump(fetchClients());
// echo '</pre>';




if (!isset($_GET['action'])) {
    $comptes = fetchComptes();
    include '../Views/comptes/index.php';
} else {
    if ($_GET["action"] == "create") {
        $clients = fetchClients();
        include '../Views/Comptes/create.php';
    }
    if ($_GET["action"] == "insert") {
        // var_dump($_POST);
        $NumeroCompte = $_POST['NumeroCompte'];
        $Solde = $_POST['Solde'];
        $id_client = $_POST['client'];
        insertCompte($NumeroCompte, $Solde, $id_client);
        header('Location: CompteController.php');
    }
    if ($_GET["action"] == "details") {
        $id = $_GET['id'];
        $comptes = getComptesById($id);
        $client = getClientById($id);
        include '../Views/comptes/details.php';
    }
}
