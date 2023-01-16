
<?php 
    session_start();
    if(!$_SESSION['estConnecte']|| !isset($_SESSION['estConnecte'])){
        header("Location: connexion.php");
    }



require "header.php"?>
<head>
    <title>Workout | Catégories</title>
</head>
<body>
    <?php
    include "sqlconnect.php";

    $sql= $connection->prepare("SELECT * FROM categorie") ; 
    $sql->execute();
    $ligne = $sql->fetchall();

    foreach($ligne as $categorie){
        echo "<a href=\"echauffement.php?id=".$categorie['id']."\">
        <div>
            <h3>".$categorie['nom']."</h3>
        </div>
        </a>";
    }
    ?>
</body>
</html>

