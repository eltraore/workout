<html>

    <head>
    	<title> Connexion </title>
    </head>


    <body>
        <form method="GET" action="connexion.php" enctype="multipart/form-data">
    
    
            <div>
                <label for="mail"> adresse email : </label><!--on créer un label donc un objet que lon peut reutiliser avec for il pointe sur l'id name   -->
                <input id="mail" name="mail" type="text"/>
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
            $pdo= new PDO('mysql:host=localhost;dbname=workout','root','');
            $pdo->query("SET CHARACTER SET utf8");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //tente de se connecter à la base de donnée
            require 'sqlconnect.php';
            $auth = $_REQUEST['name'];
            $password = $_REQUEST['MDP'];
            $pdo->query("SELECT * FROM `employer` WHERE `mail` = $auth AND `MDP` = $password");
            $row_cnt = $pdo->rowCount();

            if($row_cnt != 0) {
                echo "connection reussit";
            }

        ?>
    </body>

</html>












