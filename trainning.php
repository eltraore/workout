
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

<div class="container">

    <br>
    <div class="row">
        <div class="col-4"></div>
            <div class="col-4" style="text-align: center;">
                <a href="accueil.php"><img src="logo.png" height="80" width="80"></a> </br></br>
            </div>
        <div class="col-4"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 case coin-arrondi">
            <?php
                include "sqlconnect.php";

                $sql= $connection->prepare("SELECT * FROM employer") ; 
                $sql->execute();
                $ligne = $sql->fetchall();

                foreach($ligne as $employer){

                    echo "<h3 class=\"text\"> ".$employer['prenom']." ".$employer['nom']."</h3>";
                    
                }
            ?>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    
    <br>
    <br>
    <div class="container">
        <div class="row">
        <?php
            include "sqlconnect.php";

            $sql= $connection->prepare("SELECT * FROM categorie") ; 
            $sql->execute();
            $ligne = $sql->fetchall();

            foreach($ligne as $categorie){
                echo'
                    <div class="col-2"></div>
                    <div class="col-8 categorie coin-arrondi">
                        <a class="lien" href="echauffement.php?id="'.$categorie['id'].'">
                            <img src="'.$categorie["categ_icons"].'" height="50px"/ width="50px">
                            <h3 class="nom_categ">'.$categorie['nom'].'</h3>
                        </a>
                    </div>  
                    <div class="col-2"></div>

                ';  
            }
        ?>
        </div>
    </div>
    
</div>
    
</body>
</html>

