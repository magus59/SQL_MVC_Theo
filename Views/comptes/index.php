
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
            echo '<td>' . $client["id"] . '</td>';
            echo '<td>' . $client["NumeroCompte"] . '</td>';
            echo '<td>' . $client["Solde"] . '</td>';
            echo '<td>' . $client["id_client"] . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

