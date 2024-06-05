<?php 

// include './Controllers/ClientController.php';


?>

<button onclick="redirectToClients()">CLIENTS</button>
<button>COMPTES</button>

<script type="text/javascript">
    function redirectToClients(){
        window.location.replace('./Controllers/ClientController.php');
    }
</script>
