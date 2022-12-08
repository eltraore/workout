<?php

switch ($_REQUEST['table']) {
    case 0: //Entreprises

        include "../../sqlconnect.php";

        $id= $_REQUEST['id'];

        $sql= $connection->prepare("SELECT * FROM entreprise WHERE id=$id") ; 
        $sql->execute();
        $ligne = $sql->fetchall();

        
        foreach($ligne as $entreprise){
            echo"<h3>Entreprise ".$entreprise['nom']."</h3>";
            ?>
            <form method="GET" action="modifier.php"=>
                <input type="text" name="table" value= "<?php echo$_REQUEST['table'];?>" hidden>
                <div>
                    <label>nom</label>
                    <input type="text" name="nom" value="<?php echo $entreprise['nom'];?>">
                </div>
                <div>
                    <label>adresse</label>
                    <input type="text" name="adresse" value="<?php echo $entreprise['adresse'];?>">
                </div>


                <button type="submit">Modifier</button>
                <button type="reset">Annuler</button>
            </form>
            <a href="EntrepriseBO.php"><button>Retour</button></a>
            <?php

            
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
    default:
        echo "erreur";
        break;
}



?>