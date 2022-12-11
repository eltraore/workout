<?php

switch ($_REQUEST['table']) {
    case 0: //Entreprises

        ?>
        <form method="GET" action="ajouter.php"=>
            <input type="text" name="table" value= "<?php echo$_REQUEST['table'];?>" hidden>
            <div>
                <label>nom</label>
                <input type="text" name="nom">
            </div>
            <div>
                <label>adresse</label>
                <input type="text" name="adresse">
            </div>


            <button type="submit">Ajouter</button>
            <button type="reset">Annuler</button>
        </form>
        <a href="../BackOfficeChoose.php"><button>Retour</button></a>
        <?php
        break;
    case 1: //Employers
        echo "i égal 1";
        break;
    case 2: //Catégories
        ?>
        <form method="GET" action="ajouter.php">
            <input type="text" name="table" value= "<?php echo$_REQUEST['table'];?>" hidden>
            <div>
                <label>Nom</label>
                <input type="text" name="nom">
            </div>


            <button type="submit">Ajouter</button>
            <button type="reset">Annuler</button>
        </form>
        <a href="../BackOfficeChoose.php"><button>Retour</button></a>
        <?php
        break;
    case 3: //Echauffements
        ?>
        <form method="GET" action="ajouter.php">
            <input type="text" name="table" value= "<?php echo$_REQUEST['table'];?>" hidden>
            <div>
                <label>Nom</label>
                <input type="text" name="nom">
            </div>
            <div>
                <label>Catégorie</label>
                <select>
                <?php    

                include "../../sqlconnect.php";
                $sql= $connection->prepare("SELECT * FROM categorie") ; 
                $sql->execute();
                $ligne = $sql->fetchall();

                
                foreach($ligne as $categorie){ 
                    echo "<option name=\"categorieEchauff\" value=".$categorie['id'].">".$categorie['nom']."</option>";
                }
                ?>
                </select>
            </div>
            
            <button type="submit">Ajouter</button>
            <button type="reset">Annuler</button>
        </form>
            <a href="../BackOfficeChoose.php"><button>Retour</button></a>
            <?php
        break;
    default:
        echo "erreur";
        break;
}



?>