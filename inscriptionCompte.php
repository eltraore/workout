<?php

    $pdo= new PDO('mysql:host=localhost;dbname=workout','root','');
    $pdo->query("SET CHARACTER SET utf8");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try{
        $pdo->beginTransaction();
        
        $pdo->exec("INSERT INTO produit values('".$_REQUEST["nom"]."','".$_REQUEST["prenom"]."','".$_REQUEST["poste"]."','".$_REQUEST["mail"]."','".$_REQUEST['MDP']."','".$_REQUEST['entreprise']."')");

        $pdo->commit();
        echo "tout est OK";
        header("location: ../index.php");
    }catch(Exception $e){
        $pdo->rollback();

        echo "ERREUR !!! ";
        echo "Erreur: ".$e->getMessage()."<br/>";
        echo "N°: ".$e->getCode();

        exit();
    }







?>