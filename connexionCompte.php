<?php

try{
    session_start();
    require "sqlconnect.php" ;
   
    $sql= $connection->prepare("SELECT * FROM employer WHERE mail = :mail LIMIT 1") ;

    $sql->bindParam(':mail', $_REQUEST["mail"], PDO::PARAM_STR);
  
    $sql->execute();
    $ligne = $sql->fetch();
    echo "here ";
    
    if(!empty($ligne))
    {
        var_dump(password_verify($_REQUEST['password'],$ligne['MDP']));
        if (password_verify($_REQUEST['password'],$ligne['MDP']) ) {  
            
            $_SESSION['nom']=$ligne['nom'];
            $_SESSION['prenom']=$ligne['prenom'];

            $_SESSION['estConnecte']=true;
            $_SESSION['erreurConnect']=false;
            echo "done";
            header("Location: trainning.php");
        }
 
    }else{
        $_SESSION['erreurConnect']=true;
        echo "failed";
        header("Location: connexion.php");
        
        }

}catch (PDOException $pdo){
    echo "Erreur: ".$pdo->getMessage();
    echo"<a href =\"index.php\">Retour à l'accueil</a>";
}



?>