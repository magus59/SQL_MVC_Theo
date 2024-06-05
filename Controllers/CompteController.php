<?php

require_once '../Models/Comptes.php';

// echo '<pre>';
// var_dump(fetchClients());
// echo '</pre>';

$clients = fetchClients();

include '../Views/comptes/index.php';
