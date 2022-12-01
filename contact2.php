<?php
    $serveur = "localhost";
    $dbname = "flutter";
    $user = "root";
    $pass = "";
    
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $date = $_POST["datenaiss"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $sexe = $_POST["sexe"];
    $pays = $_POST["pays"];
    $com = $_POST["com"];
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO form(prenom, nom, datenaiss, mail, phone, age, sexe, pays, com)
            VALUES(:prenom,:nom, :datenaiss, :mail, :phone, :age, :sexe, :pays, :com)");
        $sth->bindParam(':prenom',$prenom);
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':datenaiss',$date);
        $sth->bindParam(':mail',$mail);
        $sth->bindParam(':phone',$phone);
        $sth->bindParam(':age',$age);
        $sth->bindParam(':sexe',$sexe);
        $sth->bindParam(':pays',$pays);
        $sth->bindParam(':com',$com);
        $sth->execute();
        

        header("Location:check.php");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
