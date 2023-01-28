<?php
require "header.php";

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
        

        $nom = $ligne["nom"];
        $prenom = $ligne["prenom"];
        $poste = $ligne["poste"];
        $mail = $ligne["mail"];
        $mdp = $ligne["MDP"];

?>
<head>
    <title>Workout | Profil</title>
</head>
<body>
    

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

<?php } ?>