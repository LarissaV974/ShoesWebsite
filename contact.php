<?php
include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>Contact</title>
</head>
<body>
    


    <h1>Formulaire contact</h1>
        
        <form action="contact2.php" method="post">
            <div class="c100">
                <label for="prenom">Prénom </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="c100">
                <label for="nom">Nom </label>
                <input type="text" id="nom" name="nom">
            </div>

            <div><label for="datenaiss">Date de naissance</label>
            <input type="date" id="datenaiss" name="datenaiss"></div>

            <div class="c100">
                <label for="mail">Email </label>
                <input type="email" id="mail" name="mail">
            </div>


            <div><label for="phone">Numéro de téléphone </label>
            <input type="tel" id="phone" name="phone"
                pattern="[0-9]{10}"
                required>
            <small>Format: 0692567890</small></div>


            <div class="c100">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" value="0">
            </div>
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre">
                <label for="autre">Autre</label>
            </div>
            <div class="c100">
                <label for="pays">Pays de résidence :</label>
                <select id="pays" name="pays">
                    <optgroup label="Europe">
                        <option value="france">France</option>
                        <option value="belgique">Belgique</option>
                        <option value="suisse">Suisse</option>
                    </optgroup>
                    <optgroup label="Afrique">
                        <option value="algerie">Algérie</option>
                        <option value="tunisie">Tunisie</option>
                        <option value="maroc">Maroc</option>
                    </optgroup>
                    <optgroup label="Amerique">
                        <option value="canada">Canada</option>
                        <option value="Brésil">Brésil</option>
                    </optgroup>
                </select>
            </div>
            <div>
            <textarea id="com" name="com" rows="5" cols="33" placeholder="Formulez votre demande..."></textarea></div>
            <div><input type="checkbox" name="cond" id="cond"><label for="cond">Accepter les conditions d'utilisation</label></div>

            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
            <br/>
        </form>
</body>
</html>

<?php
include('footer.php');
?>