<?php

require_once '../Models/Client.php';

// echo '<pre>';
// var_dump(fetchClients());
// echo '</pre>';

$clients = fetchClients();

include '../Views/clients/index.php';
