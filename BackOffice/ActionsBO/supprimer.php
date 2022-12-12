<?php

switch ($_REQUEST['table']) {
    case 0: //Entreprises
        
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("DELETE FROM entreprise WHERE id = :id");
        
            $sql->bindParam(':id',$_REQUEST["id"],PDO::PARAM_STR);
            $sql->execute();
        
            echo "L'Entreprise a bien été supprimé";
        
            header("location: ../BackOfficeChoose.php?table=0.php");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=0\">Retour à l'accueil</a>";
        }catch(Exeption $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=3\">Retour à l'accueil</a>";
        }

        break;
    case 1: //Employers
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("DELETE FROM employer WHERE id = :id");
        
            $sql->bindParam(':id',$_REQUEST["id"],PDO::PARAM_STR);
            $sql->execute();
        
            echo "L'Employer a bien été supprimé";
        
            header("location: ../BackOfficeChoose.php?table=1.php");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=1\">Retour à l'accueil</a>";
        }catch(Exeption $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=3\">Retour à l'accueil</a>";
        }
        break;
    case 2: //Catégories
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("DELETE FROM categorie WHERE id = :id");
        
            $sql->bindParam(':id',$_REQUEST["id"],PDO::PARAM_STR);
            $sql->execute();
        
            echo "La Catégorie a bien été supprimé";
        
            header("location: ../BackOfficeChoose.php?table=2.php");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2\">Retour à l'accueil</a>";
        }catch(Exeption $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=3\">Retour à l'accueil</a>";
        }
        break;
    case 3: //Echauffements
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("DELETE FROM echauffement WHERE id = :id");
        
            $sql->bindParam(':id',$_REQUEST["id"],PDO::PARAM_STR);
            $sql->execute();
        
            echo "'L'Echauffement a bien été supprimé";
        
            header("location: ../BackOfficeChoose.php?table=3.php");
        
        }catch (PDOException $e ){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=3\">Retour à l'accueil</a>";
        }catch(Exeption $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=3\">Retour à l'accueil</a>";
        }
        break;
    default:
        echo "erreur";
        break;
}



?>