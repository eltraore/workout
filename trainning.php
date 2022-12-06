<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories</title>
</head>
<body>
    <?php
    include "sqlconnect.php";
    $sql= $connection->prepare("SELECT * FROM categorie") ; 
    $sql->execute();
    $ligne = $sql->fetchall();

    foreach($ligne as $categorie){
        echo "<a href=\"echauffement.php?id=".$categorie['id']."\">hello
        <div>
            <h3>".$categorie['nom']."</h3>
        </div>
        </a>";
    }
    ?>
</body>
</html>

