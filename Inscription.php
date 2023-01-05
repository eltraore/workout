<?php require "header.php"?>


    <title>Workout | Inscription </title>
    <script src="Inscription.js"></script>
</head>

    <body>

        <div style="text-align: center; margin-top: 20px">
            <a href="accueil.php">
                <img src="logo.png" height="80" width="80">
            </a>
        </div>    
        <form method="GET" action="inscriptionCompte.php">
            
            <div class="row"  style="margin-top: 10px">
                <div class="col-6">
                    <div class="col-sm-">
                        <div style="text-align: center;">
                            <label for="nom">Nom</label>
                        </div>
                    </div>
                    <div class="col-sm-">
                        <div class="align-input" width="140px">
                            <input class="coin-arrondi" type="text" name="nom" id="Nom" onfocusout="verifNom()">
                        </div>
                    </div>

                    <div id="erreurNom"></div> 
                </div>  
                <br>
                <div class="col-6">
                    <div  class="col-sm-">
                        <div style="text-align: center;">
                            <label for="prenom">Prénom</label>
                        </div>
                    </div>
                    <div  class="col-sm-">
                        <div class="align-input">
                            <input class="coin-arrondi" type="text" name="prenom" id="Prenom" onfocusout="verifPrenom()">
                        </div>
                    </div>

                    <div id="erreurPrenom"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-">
                    <div class="col-sm-">
                        <div style="text-align: center;">
                            <label for="Poste">Poste</label>
                        </div>
                    </div>
                    <div class="col-sm-">
                        <div class="align-input">
                            <input class="coin-arrondi" type="text" name="poste" id="poste">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-">
                    <div class="col-sm-">
                        <div style="text-align: center;">
                            <label for="entreprise">Entreprise</label>
                        </div>
                    </div>
                            <!--Connecter à la base de donnee pour afficher les differentes entreprises-->
                    <div class="col-sm-">
                        <div class="align-input">
                            <select class="coin-arrondi" name="entreprise" id="entreprise">
                                <option value="">---Choisir une entreprise---</option>
                                <?php 
                                    require 'sqlconnect.php';

                                    $sql = 'SELECT id, nom FROM entreprise' ;
                                    $table = $connection->query($sql);
                                    while ($ligne = $table->fetch()) {
                                        echo '<option value="'.$ligne["id"].'">'.$ligne["nom"].'</option>';
                                    }    
                                    $table->closeCursor();    
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-">
                    <div class="col-sm-">
                        <div style="text-align: center;">
                            <label for="mail">Mail </label>
                        </div>
                    </div>
                    <div class="col-sm-">
                        <div class="align-input">
                            <input class="coin-arrondi" type="text" name="mail" id="Mail" onfocusout="verifMail()">
                            <div id="erreurMail"></div>
                        </div>
                    </div>
                </div>
            </div>    


            <div class="row">
                <div class="col-">
                    <div class="col-sm-">
                        <div style="text-align: center;">
                            <label for="Cfmail">Confirmation mail </label>
                        </div>
                    </div>
                    <div class="col-sm-">
                        <div class="align-input">
                            <input class="coin-arrondi" type="text" id="CfMail" onfocusout="verifCfMail()">
                            <div id ="erreurCfMail"></div>
                        </div>
                    </div>
                </div>
            </div>
           

            <div class="row">
                <div class="col-">
                    <div class="col-sm-">
                        <div style="text-align: center;">
                            <label for="mdp">Mot de passe </label>
                        </div>
                    </div>
                    <div class="col-sm-">
                        <div class="align-input">
                            <input class="coin-arrondi" type="password" name="password" id="mdp" >
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-">
                    <div class="col-sm-">
                        <div style="text-align: center;">
                            <label for="mdp_verif">Confirmation mot de passe </label>
                        </div>
                    </div>
                    <div class="col-sm-">
                        <div class="align-input">
                            <input class="coin-arrondi" type="password" id="mdp_verif" onfocusout="TestMdp_verif()">
                        </div>
                    </div>
                </div>
            </div>

                <div id="erreurMdp"></div>
                    <br>
                
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-4">    
                        <div style="text-align: center;">
                            <input class="btn btn-dark rounded-pill" type="reset" id="reset" value="Annuler">
                        </div>
                    </div>
                    <div class="col-4">    
                        <div style="text-align: center;">
                            <button class="btn btn-dark rounded-pill" id="inscrire">S'inscrire</button>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>

            </fieldset>
        </form>
       
    </body>
</html> 