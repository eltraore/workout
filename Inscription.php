<?php require "header.php"?>


    <title>Workout | Inscription </title>
    <script src="script\Inscription.js"></script>
</head>

    <body>

        <div class=bg-top></div>

        <form method="GET" action="inscriptionCompte.php">
            <div class="connexion-wrapper">
                <div class="img-top">
                    <a href="accueil.php">
                        <img src="assets\logo.png" height="120" width="120">
                    </a>
                </div>

                <div class="form-container gap-2">
                    <div class="w-80">
                        <div class="red-text" for="nom">Nom :</div>
                        <input type="text" name="nom" id="Nom" onfocusout="verifNom()">
                        <div id="erreurNom"></div>   
                    </div>

                    <div class="w-80">
                        <div class="red-text" for="prenom">Prénom :</div>
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
                        <div class="red-text" for="mdp">Mot de passe :</div>
                        <input type="password" name="password" id="mdp" >
                    </div>

                    <div class="w-80">
                        <div class="red-text" for="mdp_verif">Confirmation mot de passe </div>
                        <input type="password" id="mdp_verif" onfocusout="TestMdp_verif()">
                    </div>
                </div>
                
                
                <div class="connexion-btn">
                    <button type="submit" class="btn-wrapper"><img src="assets/locationtick.png" alt=""></button>
                    <button type="reset" class="btn-wrapper"><img src="assets/locationcross.png" alt=""></button>
                </div> 

                <div id="erreurMdp"></div>
            </div>  
        </form>

    </body>
</html> 