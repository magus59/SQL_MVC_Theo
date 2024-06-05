<?php 

// include './Controllers/ClientController.php';


?>

<button onclick="redirectToClients()">CLIENTS</button>
<button onclick="redirectToComptes()">COMPTES</button>

<script type="text/javascript">
    function redirectToClients(){
        window.location.replace('./Controllers/ClientController.php');
    }
    function redirectToComptes(){
        window.location.replace('./Controllers/CompteController.php');
    }
</script>
