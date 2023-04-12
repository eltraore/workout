<?php
require "header.php";
?>

<head>
    <title>Workout | Connexion </title>
    <script src="script\connexion.js"></script>
</head>
    <body>
        <div class=bg-top></div>

        <div>
            <div class="text-end">
                <a href="accueil.php">
                    <img src="assets\logo.png" height="100" width="100">
                </a>
            </div>

            <div class="form-container" method="GET" action="connexionCompte.php">
                <div class="w-75">
                    <div class="red-text" for="mail">Mail : </div>                      
                    <input name="mail" type="text"  id="Mail" onfocusout="verifMail()"/>
                    <div id="erreurMail"></div>   
                </div>

                <div class="w-75">
                    <div class="red-text" for="password">Mot de passe : </div>                   
                    <input id="password" name="password" type="password"/>
                    <div id="erreurMail"></div>   
                </div>
            </div>
            
            
            <div class="text-center">
                <div class="" > 
                    <button type="reset" class="btn btn-dark rounded-pill btn-sm">Annuler</button>
                </div>
                <div class=""> 
                    <button type="submmit" class="btn btn-dark rounded-pill btn-sm">Se connecter</button>
                </div>
            </div> 
        </div>
        
    </body>
</html>
