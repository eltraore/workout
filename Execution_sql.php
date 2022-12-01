//prépare la requête
            $reponse = $connection->prepare("SELECT * FROM `utilisateur` WHERE `adresse_mail`= ? AND `mot_de_passe`= PASSWORD(?)");
            $auth = $_REQUEST['name'];
            $password = $_REQUEST['MDP'];
            $reponse->bindparam(1, $auth, PDO::PARAM_STR);
            $reponse->bindparam(2, $password, PDO::PARAM_STR);

            //lance la requete
            $reponse->execute();

            //vérifie si un tel utilisateur existe
            $row_cnt = $reponse->rowCount();
            if ($row_cnt != 0) {
                while ($resultat = $reponse->fetch()) {
                    $mail = $resultat["adresse_mail"];
                    $_SESSION['login'] = $mail; //entre dans une variable de session le mail
                }
                $reponsePanier = $connection->prepare("SELECT * FROM `panier` WHERE `adresse_mail`= ?");
                $reponsePanier->bindparam(1, $auth, PDO::PARAM_STR);
                $reponsePanier->execute();
                while ($resultatPanier = $reponsePanier->fetch()) {
                    $_SESSION['panier'] = $resultatPanier["code_panier"];
                }

                header('Location: index.php');
            } else {
                header('Location: connection.php?error=2'); //si données incorrectes, retour page connexion
            }