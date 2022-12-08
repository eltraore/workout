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

    $sql= $connection->prepare("SELECT * FROM echauffement WHERE id= :idEchauffement") ;
    $sql->bindParam(":idEchauffement", $_REQUEST['id']);
    $sql->execute();
    $ligne = $sql->fetchall();

    foreach($ligne as $echauffement){
        echo "
        <div>
            <h3>".$echauffement["nom"]."</h3>
            <iframe width=\"500\" height=\"320\" src=\"https://www.youtube.com/embed/lcZDWo6hiuI\"></iframe>
            <a href=\"publierVideo\"><button>J'ai finis</button>
        </div>
        ";
    }
    ?>


    
</body>
</html>