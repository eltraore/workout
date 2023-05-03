<?php
    require "header.php";
    include "sqlconnect.php";
    $sql= $connection->query("SELECT CURRENT_USER;") ;
    $sql->execute();
    $ligne = $sql->fetchall();

    $user = $ligne[0][0];

    preg_match('/(.*)@/', $user, $output_array);
?>
<html>

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
            <div class="training-card">
                <div class="text-default mb-3">
                    Félicitations!
                    <br>
                    Tu es maintenant bien échauffé,
                    <br>
                    Voici ta récompense
                </div>
            </div>
        </div>

        <div class="video-container">
            <div class="qr-wrapper text-center">
                <img class="qr-code" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=
                <?php
                    echo $output_array[1]."/".time();
                ?>" width="100%">
            </div>
        </div>

        <div class="mb-80 text-center">
            <form action="trainning.php">
                <button type="submit" class="btn-wrapper">Terminer</button>
            </form>
        </div>

    </div>













    





        <!-- <div class="container">

            <?php require "nav.php";?>

            <br>

            <div class="row">
                <div class="col-4"></div>
                    <div class="col-4" style="text-align: center;">
                        <a href="accueil.php"><img src="assets\logo.png" height="80" width="80"></a> </br></br>
                    </div>
                <div class="col-4"></div>
            </div>

            <br>

            <div class="row">
                <div class="col-3"></div>
                <div class="col-6" style="text-align: center;">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=
                    <?php
                        echo $output_array[1]."/".time();
                    ?>">
                </div>
                <div class="col-3"></div>
            </div>

            <br>

            <div class="row">
                <div class="col-4"> </div>
                    <div class="col-4" style="text-align: center;">
                        <form action="trainning.php">
                            <button type="submit" style="color: white;" class="btn btn-dark rounded-pill">Merci !</button>
                        </form>
                    </div>
                <div class="col-4"> </div>
            </div>


        </div> -->



        
    </body>
</html>
