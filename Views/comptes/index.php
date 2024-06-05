
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
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

