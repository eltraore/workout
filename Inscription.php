<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout | Inscription </title>
</head>
<?php require "header.php"?>
    <body>
        <img src="logo.png">
        <form method="GET" action="inscriptionCompte.php">
            
            <div class="row">
                <div class="col-sm">
                    <div class="Nom">
                        <label for="nom">Nom </label>
                        <input class="coin-arrondi" type="text" name="nom" id="Nom" onfocusout="verifNom()">
                    </div>
                </div>
            </div>

                <div id="erreurNom"></div>   
                    <br>
                <div>
                    <label for="prenom">Prénom :</label>
                    <input class="coin-arrondi" type="text" name="prenom" id="Prenom" onfocusout="verifPrenom()">
                </div>

            <div id="erreurPrenom"></div>

            <div>
                <label for="Poste">Poste :</label>
                <!--Connecter à la base de donnee pour afficher les differents postes-->
                <input class="coin-arrondi" type="text" name="poste" id="poste">
            </div>

            <div>
                <label for="entreprise">Entreprise :</label>
                <!--Connecter à la base de donnee pour afficher les differentes entreprises-->
                <select class="coin-arrondi" name="entreprise" id="entreprise">
                    <option value="">--Choisir une entreprise--</option>
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

            <div>
                <label for="mail">Mail :</label>
                <input class="coin-arrondi" type="text" name="mail" id="Mail" onfocusout="verifMail()">
                <div id="erreurMail"></div>
            </div>


            <div>
            <label for="Cfmail">Confirmation mail :</label>
                <input class="coin-arrondi" type="text" id="CfMail" onfocusout="verifCfMail()">
                <div id ="erreurCfMail"></div>
            </div>
           

            <div>
                <label for="mdp">Mot de passe </label>
                <input class="coin-arrondi" type="password" name="password" id="mdp" >
            </div>

            <div>
                <label for="mdp_verif">Confirmation mot de passe </label>
                <input class="coin-arrondi" type="password" id="mdp_verif" onfocusout="TestMdp_verif()">
            </div>

                <div id="erreurMdp"></div>
                    <br>
                <div>
                    <input class="coin-arrondi" type="reset" value="Annuler">

                    <button class="coin-arrondi" id="inscrire">S'inscrire</button>
                </div>
            </fieldset>
        </form>
        <a href="accueil.php"><button class="coin-arrondi">Retour</button></a>
    </body>
</html> 