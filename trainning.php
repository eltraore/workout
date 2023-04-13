
<?php 
    session_start();
    if(!$_SESSION['estConnecte']|| !isset($_SESSION['estConnecte'])){
        echo $_SESSION['estConnecte'];
        //header("Location: connexion.php");
    }else{
        require "header.php";
        require "sqlconnect.php" ;

        $sql= $connection->prepare("SELECT * FROM employer WHERE id = :id ") ;

        $sql->bindParam(':id', $_SESSION["idUser"], PDO::PARAM_STR);
    
        $sql->execute();
        $ligne = $sql->fetch();
        
        ?>
<head>
    <title>Workout | Catégories</title>
</head>
    <body>

    <!-- <div class="container"> -->

        <div class="training-container">
            <div class="top-container">
                <div>
                    <a href="accueil.php"><svg width="50px" height="50px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.9998 8L6 14L12.9998 21" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 14H28.9938C35.8768 14 41.7221 19.6204 41.9904 26.5C42.2739 33.7696 36.2671 40 28.9938 40H11.9984" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></a>
                </div>
                <div class="img-top">
                    <a href="accueil.php">
                        <img src="assets\logo.png" height="120" width="120">
                    </a>
                </div>
            </div>

            <div class="training-wrapper">
                <div class="training-card">
                    <div class="text-default mb-3">
                        Hey
                        <span class="red-text">
                            <?php
                                echo "".$ligne['prenom']."";
                            ?>
                        </span>
                        !<br><br>
                        Es-tu prêt à t’échauffer ?
                    </div>
                </div>
            </div>

            <div class="training-wrapper mb-80">
                <div class="training-card">
                    <?php
                        include "sqlconnect.php";

                        $sql= $connection->prepare("SELECT * FROM categorie") ; 
                        $sql->execute();
                        $ligne = $sql->fetchall();

                        foreach($ligne as $categorie){
                            echo'
                                <a class="lien" href="echauffement.php?id='.$categorie['id'].'">
                                    <div class="categorie-card mb-3">
                                        <div class="categorie-img"><img src="'.$categorie["categ_icons"].'" alt="" width="100%"></div>
                                        <div class="categorie-content">'.$categorie['nom'].'</div>
                                    </div>
                                </a>

                            ';  
                        }
                    ?>
                </div>
            </div>

        </div>






























        <!-- <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="behindCase"></div>
                <div class="col-10 case coin-arrondi inFrontOfCase">
                <?php
                    echo "<h3> Salut  ".$ligne['prenom']." !</h3>";
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
                            <a class="lien" href="echauffement.php?id='.$categorie['id'].'">
                                <img class=" bounce2" src="'.$categorie["categ_icons"].'" height="50px"/ width="50px">
                                <h3 class="nom_categ">'.$categorie['nom'].'</h3>
                            </a>
                        </div>  
                        <div class="col-2"></div>

                    ';  
                }
            ?>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="behindCase"></div>
                <div class="col-10 case coin-arrondi inFrontOfCase">
                    <p id="qEchauffement">On échauffe quoi aujourd'hui ?</p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

    </div> -->
    
    </body>
</html>

<?php
    }
?>


