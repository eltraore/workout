
<?php 
    session_start();
    if(!$_SESSION['estConnecte']|| !isset($_SESSION['estConnecte'])){
        echo $_SESSION['estConnecte'];
        //header("Location: connexion.php");
    }else{
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
                    
                

                        echo "<h3> Salut  ".$_SESSION['prenom']." !</h3>";
                        
                    
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
        <br>
        <div class="container">
            <div class="row">
                <div class="col-3">

                </div>

                <div class="col-6">
                    <!--bulle-->
                    <div class="chat-bubble">
                        C'est parti !
                        <div class="chat-bubble-arrow-border"></div>
                        <div class="chat-bubble-arrow"></div>
                    </div>
                </div>
                <div class="col-3">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">

                </div>

                <div class="col-6">
                    <img src="assets\coach.png" alt="" height="150px" width="150px">

                </div>
                <div class="col-3">

                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>

<?php
    }
?>


