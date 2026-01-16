CREATE DATABASE jour8;
use jour8;
CREATE etudaint (
    id INT ,
    prenom VARCHAR(255),
    nom VARCHAR (255),
    naissance DATE,
    sexe VARCHAR(25),
    email VARCHAR(255)
);
CREATE etage (
    id INT,
    nom VARCHAR(255),
    numero INT,
    superficie INT
);
CREATE salles(
    id INT,
    nom VARCHAR(255),
    id_etage INT,
    capacite INT
);