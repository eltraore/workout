<?php
require "header.php";
?>
<head>
    <title>Workout | Profil</title>
</head>
<body>
    <?php
    include "sqlconnect.php";

    $sql= $connection->prepare("SELECT * FROM employer WHERE mail = :mail LIMIT 1") ;

    $sql->bindParam(':mail', $_REQUEST["mail"], PDO::PARAM_STR);
  
    $sql->execute();
    $ligne = $sql->fetch();

    $req="SELECT * FROM employer WHERE employer.id=".$_REQUEST["id"];

    ?>
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


    </div>
</body>
</html>

