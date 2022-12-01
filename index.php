<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    
    <title>Formulaire</title>
</head>
<body>


<div id="form">
    <form action="verification.php" method="post">
        <h1>CONNEXION</h1>
        <label for="username">Pseudo :</label><br>
        <input type="text" id="username" name="username" placeholder="Entrer le nom d'utilisateur" required><br>
        <label for="password">Password :</label><br>
        <input type="password" id="password" name="password" placeholder="Entrer le mot de passe" required><br>
        <br>
        <input type="submit" value="Se connecter"> 
        
        <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
                
      </form>
            </br>
            
      <form action="inscription.php" method="post">
      <p>Pas encore inscrit?</p>
        <button type="submit">S'inscrire</button>
        </form>


            </div>

</body>
</html>