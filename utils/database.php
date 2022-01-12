<?php
// Initialisation des variables de connexion à la bdd
// dsn = Data Source Name

function connexion(){
    $dsn = 'mysql:host=localhost;dbname=hospitale2n;charset=utf8';
    $login = 'root';
    $password = '';
    try{
        // Nouvelle instance de PDO
        $pdo = new PDO($dsn, $login, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // Permet de délivrer un jeu de résultats sous forme d'objet.
        return $pdo;
    }
    catch(PDOException $e){
        echo 'erreur de connexion à la BDD : '. $e->getMessage();
    }
   
}
