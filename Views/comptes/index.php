<button onclick="redirectToCreatCompte()">Ajouter un compte</button>

<table>
    <thead>
        <th>Id</th>
        <th>NumeroCompte</th>
        <th>Solde</th>
        <th>id_client</th>
    </thead>
    <tbody>
        <?php
        foreach ($comptes as $compte) {
            echo '<tr>';
            echo '<td>' . $compte["id"] . '</td>';
            echo '<td>' . $compte["NumeroCompte"] . '</td>';
            echo '<td>' . $compte["Solde"] . '</td>';
            echo '<td>' . $compte["id_client"] . '</td>';
            echo '<td><button onClick="redirectToDetailsCompte(' . $compte['id'] . ')"> Voir compte </button></td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    function redirectToCreatCompte() {
        window.location.replace('../Controllers/CompteController.php?action=create')
    }

    function redirectToDetailsCompte(id) {
        window.location.replace('../Controllers/CompteController.php?action=details&id=' + id);
    }
</script>