<?php
require "header.php";
?>
<head>
    <title>Workout | Echauffement</title>

    <?php
    include "sqlconnect.php";

    $sql= $connection->prepare("SELECT e.nom, e.video, c.categ_icons 
                                FROM echauffement e 
                                INNER JOIN categorie c ON e.id_Categorie = c.id 
                                WHERE e.id_Categorie = :idCateg
                                ") ;
    $sql->bindParam(":idCateg", $_REQUEST['id']);
    $sql->execute();
    $ligne = $sql->fetchall();

    foreach($ligne as $echauffement){
        $nom = $echauffement['nom'];
        $video = $echauffement['video'];
        $categ_icons = $echauffement['categ_icons'];
    }
    ?>

</head>

    <body>

    <div class="training-container">
        <div class="top-container">
            <div>
                <a href="#" onclick="history.back()"><svg width="50px" height="50px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.9998 8L6 14L12.9998 21" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 14H28.9938C35.8768 14 41.7221 19.6204 41.9904 26.5C42.2739 33.7696 36.2671 40 28.9938 40H11.9984" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></a>
            </div>
            <div class="img-top">
                <a href="accueil.php">
                    <img src="assets\logo.png" height="120" width="120">
                </a>
            </div>
        </div>

        <div class="training-wrapper">
            <?php 
                echo '
                <div class="categorie-card mb-3">
                    <div class="categorie-img"><img src="'.$categ_icons.'" alt="" width="100%"></div>
                    <div class="categorie-content">'.$nom.'</div>
                </div>
                '
            ?>
        </div>

        <div class="video-container">
            <div class="video-wrapper">
                <video controls width="100%" height="100%">
                    <source src="<?php echo $video?>" type="video/webm">
                </video>
            </div>
        </div>

        <div class="mb-80 text-center">
            <form action="qr_code.php">
                <button type="submit" class="btn-wrapper">J’ai finis !</button>
            </form>
        </div>

    </div>










    <!-- <div class="container"> 

        <br>

        <div class="row">
            <div class="col-4"></div>
                <div class="col-4"  style="text-align: center;">
                    <img src="assets\logo.png" height="80" width="80">
                </div>
            <div class="col-4"></div>
        </div>

        <br>

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 categorie coin-arrondi">
                <?php echo"<h3>".$nom."</h3>"?>
            </div>
            <div class="col-4"></div>
        </div>

        <br>

        <div class="row">
            <div class="col-1"> </div>
                <div class="col-10">
                    <video class="coin-arrondi" controls width="320">
                        <source src="<?php echo $video?>" type="video/webm">
                    </video>
                </div>
            <div class="col-1"> </div>
        </div>
                
        <br>

        <div class="row">
            <div class="col-4"> </div>
                <div class="col-4" style="text-align: center;">
                    <form action="qr_code.php">
                        <button type="submit" style="color: white;" class="btn btn-dark rounded-pill">J'ai finis !</button>
                    </form>
                </div>
            <div class="col-4"> </div>
        </div>

    </div> -->

    </body>
</html>

