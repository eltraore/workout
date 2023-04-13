<?php require "header.php"?>


    <title>Workout | Inscription </title>
    <script src="script\Inscription.js"></script>
</head>

    <body>

        <div class=bg-top></div>

        <form method="GET" action="inscriptionCompte.php">
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

                <div class="form-container gap-2">
                    <div class="w-80">
                        <label class="red-text" for="nom">Nom :</label>
                        <input type="text" name="nom" id="Nom" onfocusout="verifNom()">
                        <div id="erreurNom"></div>   
                    </div>

                    <div class="w-80">
                        <label class="red-text" for="prenom">Prénom :</label>
                        <input type="text" name="prenom" id="Prenom" onfocusout="verifPrenom()">
                        <div id="erreurPrenom"></div>
                    </div>

                    <div class="w-80">
                        <label class="red-text" for="mail">Mail :</label>
                        <input type="text" name="mail" id="Mail" onfocusout="verifMail()">
                        <div id="erreurMail"></div>
                    </div>

                    <div class="w-80">
                        <label class="red-text" for="Cfmail">Confirmation mail :</label>
                        <input type="text" id="CfMail" onfocusout="verifCfMail()">
                        <div id ="erreurCfMail"></div>
                    </div>

                    <div class="w-80">
                        <label class="red-text" for="mdp">Mot de passe :</label>
                        <input type="password" name="password" id="mdp" >
                    </div>

                    <div class="w-80">
                        <label class="red-text" for="mdp_verif">Confirmation mot de passe </label>
                        <input type="password" id="mdp_verif" onfocusout="TestMdp_verif()">
                    </div>
   
                    <div id="erreurMdp"></div>
                </div>
                
                
                <div class="connexion-btn">
                    <button type="submit" class="btn-wrapper"><img src="assets/locationtick.png" alt=""></button>
                    <button type="reset" class="btn-wrapper"><img src="assets/locationcross.png" alt=""></button>
                </div> 

            </div>  
        </form>

    </body>
</html> 