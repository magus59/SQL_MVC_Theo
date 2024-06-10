<form action="../Controllers/CompteController.php?action=insert" method="post">
    <label for="NumeroCompte">Numero Compte</label>
    <input type="text" name="NumeroCompte" placeholder="renseigner le Numero Compte" require>
    <label for="Solde">Solde</label>
    <input type="text" name="Solde" placeholder="renseigner le Solde" require>
    <label for="id_client">ID client</label>
    <select name="client" id="client">
        <?php 
        foreach ($clients as $client){
            echo "<option value='" . $client["id"]. "'>";
            echo $client["nom"]." ".$client["prenom"];
            echo "</option>";
        }
        
        ?>
    </select>
    <input type="submit" value="ENVOYER">
</form>

