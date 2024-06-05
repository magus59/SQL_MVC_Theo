<form action="../Controllers/ClientController.php?action=insert" method="post">
    <label for="nom">NOM</label>
    <input type="text" name="nom" placeholder="renseigner le nom du client" require>
    <label for="prenom">PRENOM</label>
    <input type="text" name="prenom" placeholder="renseigner le prenom du client" require>
    <label for="mail">MAIL</label>
    <input type="email" name="mail" placeholder="renseigner le mail du client">
    <label for="telephone">TELEPHONE</label>
    <input type="text" name="telephone" placeholder="renseigner le telephone du client">
    <input type="submit" value="ENVOYER">
</form>