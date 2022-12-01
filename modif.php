<?php
         $bdd = new PDO("mysql:host=127.0.0.1;dbname=flutter", "root", "");
         $mode_edition = 0;
         if(isset($_GET['edit']) AND !empty($_GET['edit'])) {
            $mode_edition = 1;
            $edit_id = htmlspecialchars($_GET['edit']);
            $edit_article = $bdd->prepare('SELECT * FROM article WHERE id = ?');
            $edit_article->execute(array($edit_id));
            if($edit_article->rowCount() == 1) {
               $edit_article = $edit_article->fetch();
            } else {
               die('Erreur : l\'article n\'existe pas...');
            }
         }

         
         if(isset($_POST['nomprod'], $_POST['descprod'])) {
            if(!empty($_POST['nomprod']) AND !empty($_POST['descprod'])) {
               
               $nomprod = htmlspecialchars($_POST['nomprod']);
               $descprod = htmlspecialchars($_POST['descprod']);
               $taille = htmlspecialchars($_POST['taille']);
               $prix = htmlspecialchars($_POST['prix']);

               if($mode_edition == 0) {
                  $ins = $bdd->prepare('INSERT INTO article (nomprod, descprod, taille, prix) VALUES (?, ?, ?, ?, ?)');
                  $ins->execute(array($nomprod, $descprod, $taille ,$prix, $edit_id));
                  $message = 'Votre article a bien été posté';
               } else {
                  $update = $bdd->prepare("UPDATE article SET nomprod = ?, descprod = ?, taille = ?, prix = ? WHERE id = ?");
                          
                  header('Location: http://127.0.0.1/flutter/admin.php');
                  $message = 'Votre article a bien été mis à jour !';
               }
            } else {
               $message = 'Veuillez remplir tous les champs';
            }
         }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Rédaction / Edition</title>
   <meta charset="utf-8">
</head>
<body>
   <form method="POST">
      <input type="text" name="nomprod" placeholder="Nom"<?php if($mode_edition == 1) { ?> value="<?=$edit_article['nomprod'] ?>"<?php } ?> /><br />
      <input type="text" name="descprod" placeholder="Description"<?php if($mode_edition == 1) { ?> value="<?=$edit_article['descprod'] ?>"<?php } ?> /><br />
      <input type="number" name="taille"<?php if($mode_edition == 1) { ?> value="<?=$edit_article['taille'] ?>"<?php } ?> /><br />
      <input type="text" name="prix" placeholder="prix"<?php if($mode_edition == 1) { ?> value="<?=$edit_article['prix'] ?>"<?php } ?> /><br />
      
      <input type="submit" value="Valider l'article" />
   </form>
   <br />
   <?php if(isset($message)) { echo $message; } ?>
</body>
</html>