<?php
require "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout | Connexion </title>
</head>


    <form method="GET" action=" on c pas " enctype="multipart/form-data">
        <fieldset>
            <legend>Connexion</legend>
            <div>
                <label for="name">Adresse email : </label><!--on créer un label donc un objet que lon peut reutiliser avec for il pointe sur l'id name   -->
                <input id="name" name="name" type="text"/>
            </div>
            <br>
            <div>
                <label for="MDP">Mot de passe : </label><!--on créer un label donc un objet que lon peut reutiliser avec for il pointe sur l'id name   -->
                <input id="MDP" name="MDP" type="text"/>
            </div>
            <br>    
            <div>
                <button type="reset">Annuler</input><!--autre forme de bouton-->
                <button type="submit">Se connecter</input><!--autre forme de bouton-->      
            </div>
        </fieldset>
    </form>
    <a href="index.php"><button>Retour</button></a>
</html>
