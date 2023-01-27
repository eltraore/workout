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
        $nom = $echauffement['nom'];
        $video = $echauffement['video'];
    }
    ?>

    <script src="https://kit.fontawesome.com/2d470788f0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container"> 
        <?php require "nav.php";?>
        <br>
        <div class="row">
            <div class="col-4"></div>
                <div class="col-4" style="text-align: center;">
                    <img src="assets\logo.png" height="80" width="80"> </br></br>
                </div>
            <div class="col-4"> </div>
        </div>

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <?php echo"<h3>".$nom."</h3>"?>
            </div>
            <div class="col-4"></div>
        </div>

        <div class="row">
            <div class="col-1"> </div>
                <div class="col-10">
                    <video controls width="320">
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

    </div>
</body>
</html>

