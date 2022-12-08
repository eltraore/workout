<?php
require "header.php";
?>

<head>
    <title>Workout | Connexion </title>
</head>

    
    <form method="GET" action="connexionCompte.php">
        <fieldset>
            <legend>Connexion</legend>
            <?php 
            session_start();
            

            if(!isset($_SESSION['erreurConnect']) || $_SESSION['erreurConnect'])
            {
                echo "<p> Login ou mot de passe incorect </p>" ;
            }
            
            
            ?>
            <div>
                <label for="mail">Adresse email : </label><!--on créer un label donc un objet que lon peut reutiliser avec for il pointe sur l'id name   -->
                <input id="name" name="mail" type="text"/>
            </div>
            <br>
            <div>
                <label for="password">Mot de passe : </label><!--on créer un label donc un objet que lon peut reutiliser avec for il pointe sur l'id name   -->
                <input id="password" name="password" type="password"/>
            </div>
            <br>    
            <div>
                <button type="reset">Annuler</input><!--autre forme de bouton-->
                <button type="submit">Se connecter</input><!--autre forme de bouton-->      
            </div>
        </fieldset>
    </form>
    <a href="accueil.php"><button>Retour</button></a>
</html>
