<?php
class Database {

    public function __construct(){
        try{
            $dsn = 'mysql:host=localhost;dbname=alumini;charset=utf8';
           $login = 'root';
           $password = '';
            // Nouvelle instance de PDO
            $pdo = new PDO($dsn, $login, $password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // Permet de délivrer un jeu de résultats sous forme d'objet.
            return $pdo;
        }
        catch(PDOException $e){
            echo 'erreur de connexion à la BDD : '. $e->getMessage();
        }
    }

    public function getAllAlumni(){

        $sth = $pdo->prepare("SELECT * FROM  profil ");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    
}
    
   

