<html>

    <head>
    	<title> Connexion </title>
    </head>


    <body>
        <form method="GET" action="Execution_sql.php" enctype="multipart/form-data">
    
    
            <div>
                <label for="name"> adresse email : </label><!--on créer un label donc un objet que lon peut reutiliser avec for il pointe sur l'id name   -->
                <input id="name" name="name" type="text"/>
            </div>
    
            <div>
                <label for="MDP"> mot de passe : </label><!--on créer un label donc un objet que lon peut reutiliser avec for il pointe sur l'id name   -->
                <input id="MDP" name="MDP" type="text"/>
            </div>
    
            <div>
                <button type="submit"> se connecter </input><!--autre forme de bouton-->
            </div>
        </form>
    
        <?php
        
        // Indique que des caractères interdits sont entrés
        if (isset($_REQUEST['error'])) {
            if ($_REQUEST['error'] == '1') {
                echo "<br/><div class='result'>
                        Echec de l'authentification : caractères interdits";
                echo "</div>";
            }
            // Indique que les identifiants sont incorrects
            if ($_REQUEST['error'] == '2') {
                echo "<br/><div class='result'>
                    Identifiant ou mot-de-passe incorrect";
                echo "</div>";
            }
        }
        //invoque le programme pour vérifier les données
        if (isset($_REQUEST['auth']) && isset($_REQUEST['password'])) {
            echo "<br/><div class='result'>";
            $dbname = 'laFleur';
            include 'sessions.php';
            echo "</div>";
        }
        ?>
    </body>

</html>












