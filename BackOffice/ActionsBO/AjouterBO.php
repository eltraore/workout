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
        <a href="EntrepriseBO.php"><button>Retour</button></a>
        <?php
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