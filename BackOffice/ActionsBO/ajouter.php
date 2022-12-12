<?php




switch ($_REQUEST['table']) {
    case 0: //Entreprises
        
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("INSERT INTO entreprise (nom,adresse) VALUES 
            (:nom, :adresse)") ;
        
            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
            $sql->bindParam(':adresse',$_REQUEST["adresse"],PDO::PARAM_STR);         

            $sql->execute();
        
            echo "Entreprise ajoutée";
        
            header("location: ../BackOfficeChoose.php?table=0.php");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=0\">Retour à l'accueil</a>";
        }catch(Exeption $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=0\">Retour à l'accueil</a>";
        }

        break;
    case 1: //Employers
        echo "i égal 1";
        break;
    case 2: //Catégories
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("INSERT INTO categorie (nom) VALUES 
            (:nom)") ;
        
            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);


            $sql->execute();
        
            echo "Catégorie ajoutée";
        
            header("location: ../BackOfficeChoose.php?table=2.php");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2\">Retour à l'accueil</a>";
        }catch(Exeption $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2\">Retour à l'accueil</a>";
        }

        break;
    case 3: //Echauffements
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("INSERT INTO echauffement (nom,video,id_Categorie) VALUES 
            (:nom,:video,:id_Categorie)") ;
        
            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
            $sql->bindParam(':video',$_REQUEST["video"],PDO::PARAM_STR);
            $sql->bindParam(':id_Categorie',$_REQUEST["categorieEchauff"],PDO::PARAM_STR);


            $sql->execute();
        
            echo "Echauffement ajoutée";
        
            header("location: ../BackOfficeChoose.php?table=2.php");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2\">Retour à l'accueil</a>";
        }catch(Exeption $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2\">Retour à l'accueil</a>";
        }
        break;
}



?>