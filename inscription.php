<?php
 session_start();


// S'il y a une session alors on ne retourne plus sur cette page
if (isset($_SESSION['id'])){
      
 exit;
                 }
 
                 // Si la variable "$_Post" contient des informations alors on les traitres
                 if(!empty($_POST)){
                          extract($_POST);
                          $valid = true;
 
                          // On se place sur le bon formulaire grâce au "name" de la balise "input"
                          if (isset($_POST['inscription'])){
                            
                                       $username = htmlentities(trim($username)); // on récupère le prénom
                                       $password = trim($password); // On récupère le mot de passe    
                                       $confmdp = trim($confmdp); //     On récupère la confirmation du mot de passe
 
                                                           
 
                                       //        Vérification du prénom
                                       if(empty($username)){
                                                $valid = false;
                                                $er_username = ("Le username d' utilisateur ne peut pas être vide");
                                       }                       
 
                                      
                                       // Vérification du mot de passe
                                       if(empty($password)) {
                                                $valid = false;
                                                $er_password = "Le mot de passe ne peut pas être vide";
 
                                       }elseif($password != $confmdp){
                                                $valid = false;
                                                $er_password = "La confirmation du mot de passe ne correspond pas";
                                       }
 
                                       // Si toutes les conditions sont remplies alors on fait le traitement
                                       if($valid){
 
                                                $password = crypt($password, "$6$rounds=5000$macleapersonnaliseretagardersecret$");
 
                                                // On insert nos données dans la table utilisateur
                                                $DB->insert("INSERT INTO utilisateur (Pseudo, Mdp) VALUES      
                                                                 (?, ?)",  
                                                                 array($username, $password));
 
                                       }
                          }
                 }
?>


<!DOCTYPE html>
<html lang="fr">
 <head>
 <meta charset="utf-8">
                          <meta http-equiv="X-UA-Compatible" content="IE=edge">
                          <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Inscription</title>
                 </head>
                 <body>               
 <div>Inscription</div>
 <form method="post">
             <?php
  // S'il y a une erreur sur le nom alors on affiche
  if (isset($er_username)){
  ?>
             <div><?= $er_username ?></div>
  <?php             
  }
             ?>
             <input type="text" placeholder="Votre username" name="username" value="<?php if(isset($username)){ echo $username; }?>" required>            
             <?php
  if (isset($er_password)){
  ?>
             <div><?= $er_password ?></div>
  <?php             
  }
             ?>
             <input type="password" placeholder="Mot de passe" name="password" value="<?php if(isset($password)){ echo $password; }?>" required>
             <input type="password" placeholder="Confirmer le mot de passe" name="confmdp" required>
             <button type="submit" name="inscription">Envoyer</button>
 </form>
                 </body>
</html>