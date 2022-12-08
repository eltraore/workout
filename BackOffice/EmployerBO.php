<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employers</title>
</head>
<body>
    <?php
    include "../sqlconnect.php";

    $sql= $connection->prepare("SELECT * FROM employer ORDER BY id_Entreprise") ; 
    $sql->execute();
    $ligne = $sql->fetchall();
    echo"<h3>Employers</h3>";
    foreach($ligne as $employer){
        echo "<div>".$employer['mail']."<a href=\"#\"><button>Modifier</button></a><a href=\"#\"><button>Supprimer</button></a></div>";
    }
    ?>
    <a href="#"><button>Ajouter</button></a>
    
</body>
</html>