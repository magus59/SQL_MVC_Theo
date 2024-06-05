<?php
// echo '<pre>';
// var_dump($clients);
// echo '</pre>';
?>


<table>
    <thead>
        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Mail</th>
        <th>Téléphone</th>
    </thead>
    <tbody>
        <?php
        foreach ($clients as $client) {
            echo '<tr>';
            echo '<td>' . $client["id"] . '</td>';
            echo '<td>' . $client["nom"] . '</td>';
            echo '<td>' . $client["prenom"] . '</td>';
            echo '<td>' . $client["mail"] . '</td>';
            echo '<td>' . $client["téléphone"] . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>