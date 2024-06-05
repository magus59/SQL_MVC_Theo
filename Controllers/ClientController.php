<?php

require_once '../Models/Client.php';

if (!isset($_GET['action'])){
    $clients = fetchClients();
    include '../Views/clients/index.php';
}
else{
    if ($_GET["action"]=="create"){
        include '../Views/clients/create.php';
    }
    if ($_GET["action"]=="insert"){
        // var_dump($_POST);
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $telephone = $_POST['telephone'];
        insertClient($nom, $prenom, $mail, $telephone);
        header('Location: ClientController.php');
        }
}

// echo '<pre>';
// var_dump(fetchClients());
// echo '</pre>';


