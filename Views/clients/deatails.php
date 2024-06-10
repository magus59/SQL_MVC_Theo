<h5>Nom : <?php echo $client['nom'] ?></h5>
<h5>Prenom : <?php echo $client['prenom'] ?></h5>
<h5>Mail : <?php echo $client['mail'] ?></h5>
<h5>Numéro de téléphone : <?php echo $client['téléphone'] ?></h5>

<h4>Comptes</h4>
<table>
    <thead>
        <th>ID</th>
        <th>Numéro de compte</th>
        <th>Solde</th>
    </thead>
    <tbody>
        <?php
        foreach ($comptes as $compte) {
            echo '<tr>';
            echo '<td>' . $compte['id']. '</td>';
            echo '<td>' . $compte['NumeroCompte']. '</td>';
            echo '<td>'. $compte['Solde'] . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>