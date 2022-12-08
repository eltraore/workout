<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echauffement</title>
</head>
<body>
    <?php
    include "sqlconnect.php";

    $sql= $connection->prepare("SELECT * FROM echauffement WHERE id_Categorie= :idCateg") ;
    $sql->bindParam(":idCateg", $_REQUEST['id']);
    $sql->execute();
    $ligne = $sql->fetchall();

    foreach($ligne as $echauffement){
        echo "<a href=\"exercice.php?id=".$echauffement['id']."\">
        <div>
            <h3>".$echauffement['nom']."</h3>
        </div>
        </a>";
    }
    ?>
</body>
</html>

