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
                

                <div class="form-container gap-4">
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
