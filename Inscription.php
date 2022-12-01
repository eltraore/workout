<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout | Inscription </title>
</head>

    <body>
        <?php require "header.php"?>
        <h1>Inscription</h1>
        <form method="GET" action="inscriptionCompte.php">
            
            <div>
                <label for="nom">Nom </label>
                <input type="text" name="nom" id="nom" onfocusout="TestNom()">
            </div>

                <div id="erreurNom"></div>   
                    <br>
                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="Prenom" onfocusout="verifPrenom()">
                </div>

            <div id="erreurPrenom"></div>

            <div>
                <label for="Poste">Poste :</label>
                <!--Connecter à la base de donnee pour afficher les differents postes-->
                <input type="text" name="poste" id="poste">
            </div>

            <div>
                <label for="entreprise">Entreprise :</label>
                <!--Connecter à la base de donnee pour afficher les differentes entreprises-->
                <select name="entreprise" id="entreprise">
                    <?php 
                        require 'sqlconnect.php';

                        $sql = 'SELECT COUNT(*) AS NB_LIVRE FROM books WHERE '. $_REQUEST["attribut"].' LIKE '."'%".$_REQUEST['chainCar']."%'" ;
                        $table = $connection->query($sql);
                        while ($ligne = $table->fetch()) {
                            echo 'Nombre de livre trouvés: '.$ligne["NB_LIVRE"];
                        }    
                        $table->closeCursor();    
                    ?>

                    <option value="">--Choisir une entreprise--</option>
                    <option value="1">Choix 1</option>
                    <option value="choix2">Choix 2</option>
                    <option value="choix3">Choix 3</option>
                </select>
            </div>

            <div>
                <label for="mail">Mail :</label>
                <input type="text" name="mail" id="Mail" onfocusout="verifMail()">
                <div id="erreurMail"></div>
            </div>


            <div>
            <label for="Cfmail">Confirmation mail :</label>
                <input type="text" id="CfMail" onfocusout="verifCfMail()">
                 <div id ="erreurCfMail"></div>
            </div>

            

            <div>
                <label for="mdp">Mot de passe </label>
                <input type="password" name="password" id="mdp" >
            </div>

            <div>
                <label for="mdp_verif">Confirmation mot de passe </label>
                <input type="password" id="mdp_verif" onfocusout="TestMdp_verif()">
            </div>

                <div id="erreurMdp"></div>
                    <br>
                <div>
                    <input type="reset" value="Annuler">

                    <button id="inscrire">S'inscrire</button>
                </div>
            </fieldset>
        </form>
        <a href="index.php"><button>Retour</button></a>
    </body>

</html> 