<!DOCTYPE html>
<html>

    <head>
        <Title>Inscription</Title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <script src="Inscription.js"></script>
    </head>

    <body>

        <h1>Inscription</h1>
        <form>
            
            <div>
                <label for="id">Identifiant </label>
                <input type="text" id="nada" id="identifiant">
            </div>

            <div>
                <label for="nom">Nom </label>
                <input type="text" id="nada" id="nom" onfocusout="TestNom()">
            </div>

            <div id="erreurNom"></div>   

            <div>
                <label for="prenom">Prénom </label>
                <input type="text" id="prenom" onfocusout="TestPrenom()">
            </div>

            <div id="erreurPrenom"></div>

            <div>
                <label for="Poste">Poste </label>
                <!--Connecter à la base de donnee pour afficher les differents postes-->
                <select name="poste" id="poste">
                    <option value="">--Choisir un poste--</option>
                    <option value="choix1">Choix 1</option>
                    <option value="choix2">Choix 2</option>
                    <option value="choix3">Choix 3</option>
                </select>
            </div>

            <div>
                <label for="entreprise">Entreprise </label>
                <label for="entreprise">Entreprise </label>
                <!--Connecter à la base de donnee pour afficher les differentes entreprises-->
                <select name="entreprise" id="entreprise">
                    <option value="">--Choisir une entreprise--</option>
                    <option value="choix1">Choix 1</option>
                    <option value="choix2">Choix 2</option>
                    <option value="choix3">Choix 3</option>
                </select>
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

            <div>
                <input type="reset" value="Annuler">
                <input type="submit" value="S'inscrire" id="inscrire" disabled>
            </div>

        </form>

    </body>

</html>