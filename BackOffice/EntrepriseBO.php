<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entreprise</title>
</head>
<body>
    <?php
    include "../sqlconnect.php";

    $sql= $connection->prepare("SELECT * FROM entreprise") ; 
    $sql->execute();
    $ligne = $sql->fetchall();
    echo"<h3>Entreprise</h3>";
    foreach($ligne as $entreprise){
        echo "<div>".$entreprise['nom']."<a href=\"ActionsBO/ModifierPO.php?table=0&id=".$entreprise['id']."\"><button>Modifier</button></a><a href=\"ActionsBO/supprimer.php?id=".$entreprise['id']."&table=0\"><button>Supprimer</button></a></div>";
    }
    ?>
    <a href="ActionsBO/AjouterBO.php?table=0"><button>Ajouter</button></a>
    
</body>
</html>