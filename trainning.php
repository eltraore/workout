<?php
    include "sqlconnect.php";
    require "header.php";
?>
<html>
    <body>
    <label for="">Choisir mon échauffement : </label>
    <select name=""  id="" required>
        <?php
        $reponse = $connection->query('SELECT * FROM "workout"');
        while ($donnees = $reponse->fetch())
        {
            ?>
            <option value="<?php echo $donnees['categorie']; ?>">
            </option>
        <?php } ?>
    </select>
    <button type="submit">Choisir</button>
    </body>
</html>
