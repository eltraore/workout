<?php
    include "sqlconnect.php";
?>
<html>
    <body>
    <label for="">Nom du champ </label>
    <select name=""  id="" required>
        <?php
        $reponse = $connection->query("SELECT * FROM `categorie`");
        while ($donnees = $reponse->fetch())
        {
            ?>
            <option value="categorie">
                <?php echo $donnees['nom']; ?>
            </option>
        <?php } ?>
    </select>
    <br>
    <label for="">Nom du champ </label>
    <select name=""  id="" required>
        <?php
        $reponse = $connection->query("SELECT * FROM `echauffement`");
        while ($donnees = $reponse->fetch())
        {
            ?>
            <option value="categorie">
                <?php echo $donnees['nom']; ?>
            </option>
        <?php } ?>
    </select>
    <button type="submit">Choisis</button>
    </body>
</html>
