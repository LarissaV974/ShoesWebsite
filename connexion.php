<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['username'] !== ""){
                    /*$user = $_SESSION['username'];
                    // afficher un message | afficher la page
                    echo "Bonjour <b>$user</b>, vous êtes connecté(e)";*/
                    require_once('accueil.php');
                }
            ?>
            
        </div>
    </body>
</html>