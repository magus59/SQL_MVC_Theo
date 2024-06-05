<?php

require_once '../Models/Comptes.php';

// echo '<pre>';
// var_dump(fetchClients());
// echo '</pre>';




if (!isset($_GET['action'])){
    $comptes = fetchComptes();
    include '../Views/comptes/index.php';
}
else{
    if ($_GET["action"]=="create"){
        include '../Views/Comptes/create.php';
    }
    if ($_GET["action"]=="insert"){
        // var_dump($_POST);
        $NumeroCompte = $_POST['NumeroCompte'];
        $Solde = $_POST['Solde'];
        $id_client = $_POST['id_client'];
        insertCompte($NumeroCompte, $Solde, $id_client);
        header('Location: CompteController.php');
        }
}

