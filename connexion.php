<?php
require "header.php";
?>

<head>
    <title>Workout | Connexion </title>
    <script src="script\connexion.js"></script>
</head>
    <body>
        <div class=bg-top></div>

        <form method="GET" action="connexionCompte.php">
            <div class="connexion-wrapper">
                <div class="img-top">
                    <a href="accueil.php">
                        <img src="assets\logo.png" height="120" width="120">
                    </a>
                </div>

                <div class="form-container gap-'">
                    <div class="w-80">
                        <div class="red-text" for="mail">Mail : </div>                      
                        <input name="mail" type="text"  id="Mail" onfocusout="verifMail()"/>
                        <div id="erreurMail"></div>   
                    </div>

                    <div class="w-80">
                        <div class="red-text" for="password">Mot de passe : </div>                   
                        <input id="password" name="password" type="password"/>
                        <div id="erreurMail"></div>   
                    </div>
                </div>
                
                
                <div class="connexion-btn">
                    <button type="submit" class="btn-wrapper"><img src="assets/locationtick.png" alt=""></button>
                    <button type="reset" class="btn-wrapper"><img src="assets/locationcross.png" alt=""></button>
                </div> 
            </div>  
        </form>
        
    </body>
</html>
