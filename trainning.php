<?php
    include "sqlconnect.php";
?>
<html>
    <body>
    <label for="">Nom du champ </label>
    <select name=""  id="" required>
        <?php
        $reponse = $connection->query('SELECT * FROM "workout"');
        while ($donnees = $reponse->fetch())
        {
            ?>
            <option value="<?php echo $donnees['category']; ?>">
            </option>
        <?php } ?>
    </select>
    <button type="submit">Choisis</button>
    </body>
</html>
