<?php

try{

    require "sqlconnect.php" ;
   
    $sql= $connection->prepare("SELECT mail,MDP FROM employer WHERE mail = :mail AND MDP = :MDP") ;

    $sql->bindParam(':mail', $_REQUEST["mail"], PDO::PARAM_STR);
    $sql->bindParam(':MDP', SHA1($_REQUEST['password']), PDO::PARAM_STR);

  
    $sql->execute();
    $ligne = $sql->fetchall();

    if(!empty($ligne))
    {
        if ($_REQUEST["mail"]==$ligne[0]['mail'] && SHA1($_REQUEST['password'])==$ligne[0]['MDP'] ) {  

            //$_SESSION['id'] = $id;
            //$_SESSION['mdp'] = $mdp;
            //$_SESSION['erreurConnect']=false;
            header("Location: trainning.php");
        
    }
    }else{

        //$_SESSION['erreurConnect']=true;
        header("Location: connexion.php");
        
        }

}catch (PDOException $e){
    echo "Erreur: ".$e->getMessage();
    echo"<a href =\"index.php\">Retour à l'accueil</a>";
}

?>