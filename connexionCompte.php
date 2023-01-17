<?php

try{
    session_start();
    require "sqlconnect.php" ;
    $psw=password_hash($_REQUEST['password'],PASSWORD_DEFAULT);
   
    $sql= $connection->prepare("SELECT * FROM employer WHERE mail = :mail AND MDP = :MDP") ;

    $sql->bindParam(':mail', $_REQUEST["mail"], PDO::PARAM_STR);
    $sql->bindParam(':MDP', $psw, PDO::PARAM_STR);
  
    $sql->execute();
    $ligne = $sql->fetchall();

    if(!empty($ligne))
    {
        if ($_REQUEST["mail"]==$ligne[0]['mail'] && password_hash($_REQUEST['password'],PASSWORD_DEFAULT)==$ligne[0]['MDP'] ) {  

            $_SESSION['nom']=$ligne[0]['nom'];
            $_SESSION['prenom']=$ligne[0]['prenom'];

            $_SESSION['estConnecte']=true;
            $_SESSION['erreurConnect']=false;

            header("Location: trainning.php");
        
    }
    }else{

        $_SESSION['erreurConnect']=true;
        header("Location: connexion.php");
        
        }

}catch (PDOException $pdo){
    echo "Erreur: ".$pdo->getMessage();
    echo"<a href =\"index.php\">Retour à l'accueil</a>";
}



?>