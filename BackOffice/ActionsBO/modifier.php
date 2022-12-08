<?php




switch ($_REQUEST['table']) {
    case 0: //Entreprises
        
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("UPDATE entreprise SET nom=:nom, adresse=:adresse WHERE id=6") ;
        
            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
            $sql->bindParam(':adresse',$_REQUEST["adresse"],PDO::PARAM_STR);         

            $sql->execute();
        
            echo "Entreprise ajoutée";
        
            header("location: ../EntrepriseBO.php");
        
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