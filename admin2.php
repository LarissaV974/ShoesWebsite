<?php
    $serveur = "localhost";
    $dbname = "flutter";
    $user = "root";
    $pass = "";
    
    $nomprod = $_POST["nomprod"];
    $descprod = $_POST["descprod"];
    $taille = $_POST["taille"];
    $prix = $_POST["prix"];
   
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO article(nomprod, descprod, taille, prix)
            VALUES(:nomprod, :descprod, :taille, :prix)");
        $sth->bindParam(':nomprod',$nomprod);
        $sth->bindParam(':descprod',$descprod);
        $sth->bindParam(':taille',$taille);
        $sth->bindParam(':prix',$prix);
        $sth->execute();


        header("Location:admin.php");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
