CREATE TABLE utilisateur(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Pseudo VARCHAR(100),
    Mdp VARCHAR(100)
)

CREATE TABLE form(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            prenom VARCHAR(100),
            nom VARCHAR(100),
            datenaiss DATE,
            mail VARCHAR(255),
            phone VARCHAR(30),
            age INT,
            sexe VARCHAR(15),
            pays VARCHAR(100),
            com TEXT)


CREATE TABLE article(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nomprod VARCHAR(100),
    descprod VARCHAR(100),
    taille VARCHAR(100),
    prix DECIMAL
)