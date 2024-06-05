<?php

require_once '../Models/Comptes.php';

// echo '<pre>';
// var_dump(fetchClients());
// echo '</pre>';

$comptes = fetchComptes();

include '../Views/comptes/index.php';
