<?php
require "header.php";
?>
<head>
    <title>Workout | Echauffement</title>
</head>
<body>
    <?php
    include "sqlconnect.php";

    $sql= $connection->prepare("SELECT * FROM echauffement WHERE id_Categorie= :idCateg") ;
    $sql->bindParam(":idCateg", $_REQUEST['id']);
    $sql->execute();
    $ligne = $sql->fetchall();

    foreach($ligne as $echauffement){
        echo "<a href=\"Detail_activite.php?id=".$echauffement['id']."\">
        <div>
            <h3>".$echauffement['nom']."</h3>
        </div>
        </a>";
    }
    ?>
</body>
</html>

