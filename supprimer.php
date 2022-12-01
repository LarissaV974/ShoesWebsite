<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=flutter", "root", "");
if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $suppr_id = htmlspecialchars($_GET['id']);
   $suppr = $bdd->prepare('DELETE FROM article WHERE id = ?');
   $suppr->execute(array($suppr_id));
   header('Location: http://127.0.0.1/flutter/admin.php');
}
?>