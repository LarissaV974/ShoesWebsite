<?php
include('header.php'); ?>


<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=flutter", "root", "");
$articles = $bdd->query('SELECT * FROM article');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>

    
        <h4> Ajout d'un article</h4>

    
    <form action="admin2.php" method="post">
        
            <label for="nomprod">Nom du produit : </label>
            <input type="text" id="nomprod" name="nomprod">

        
            <label for="descprod">Description : </label>
            <input type="text" id="descprod" name="descprod">

        
            <label for="taille">Taille : </label>
            <input type="number" id="taille" name="taille" value="35" min="35" max="47">


            <label for="prix">Prix : </label>
            <input type="text" id="prix" name="prix">

            <input type="submit" value="Ajouter">


        </form>

        <br/>

        <h4>Listes des produits disponibles</h4>
        <ul>

            <?php while($a = $articles->fetch()) { ?>
      <li><a href="article.php?id=<?= $a['nomprod'] ?>"><?= $a['nomprod'] ?> | <?= $a['descprod'] ?> | <?= $a['taille'] ?>| <?= $a['prix'] ?></a> | <a href="modif.php?edit=<?= $a['id'] ?>">Modifier</a> | <a href="supprimer.php?id=<?= $a['id'] ?>">Supprimer</a></li>
      <?php } ?>
        </ul>
</body>
</html>

<?php
include('footer.php');
?>