<?php
    include "sqlconnect.php";
?>
<html>
    <body>
    <label for="">Nom de la categorie </label>
    <select name="categorie"  id="categorie" required>
        <?php
        $reponse = $connection->query("SELECT * FROM `categorie`;");
        while ($donnees = $reponse->fetch()){
        ?>
        <option value="categorie">
            <?php echo $donnees['nom']; ?>
        </option>
        <?php } ?>
    </select>
    <button type="submit">Choisis</button>
    </body>
</html>
