<?php




switch ($_REQUEST['table']) {
    case 0: //Entreprises
        
        try{
            require "sqlconnect.php";
            $sql= $connection->prepare("INSERT INTO enrreprise (nom,adresse) VALUES 
            (:nom, :adresse") ;
        
            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
            $sql->bindParam(':adresse',$_REQUEST["adresse"],PDO::PARAM_STR);         
        
        
            $sql->execute();
        
            echo "Vos informations ont bien été ajoutées à notre base de données ! Vous êtes maintenant inscris !";
        
            header("location: trainning.php");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"EntrepriseBO.php\">Retour à l'accueil</a>";
        }

        break;
    case 1: //Employers
        echo "i égal 1";
        break;
    case 2: //Catégories
        echo "i égal 2";
        break;
    case 3: //Echauffements
        echo "i égal 2";
        break;
}



?>