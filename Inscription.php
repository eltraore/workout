<!DOCTYPE html>
<html>

    <head>
        <Title>Inscription</Title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <script src="Inscription.js"></script>
    </head>

    <body>
        <?php require "header.php"?>
        <h1>Inscription</h1>
        <form method="GET" action="inscriptionCompte.php">
            
            <div>
                <label for="nom">Nom </label>
                <input type="text" id="nada" id="nom" onfocusout="TestNom()">
            </div>

                <div id="erreurNom"></div>   
                    <br>
                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="Prenom" onfocusout="verifPrenom()">
                </div>

            <div id="erreurPrenom"></div>

            <div>
                <label for="Poste">Poste :</label>
                <!--Connecter à la base de donnee pour afficher les differents postes-->
                <input type="text" id="poste">
            </div>

            <div>
                <label for="entreprise">Entreprise :</label>
                <!--Connecter à la base de donnee pour afficher les differentes entreprises-->
                <select name="entreprise" id="entreprise">
                    <option value="">--Choisir une entreprise--</option>
                    <option value="choix1">Choix 1</option>
                    <option value="choix2">Choix 2</option>
                    <option value="choix3">Choix 3</option>
                </select>
            </div>

            <div>
                <label for="mail">Mail :</label>
                <input type="text" id="Mail" onfocusout="verifMail()">
                <div id="erreurMail"></div>
            </div>


            <div>
            <label for="Cfmail">Confirmation mail :</label>
                <input type="text" name="Mail" id="CfMail" onfocusout="verifCfMail()">
                 <div id ="erreurCfMail"></div>
            </div>

            

            <div>
                <label for="mdp">Mot de passe </label>
                <input type="text" id="mdp" >
            </div>

            <div>
                <label for="mdp_verif">Confirmation mot de passe </label>
                <input type="text" id="mdp_verif" onfocusout="TestMdp_verif()">
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