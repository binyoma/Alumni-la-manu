<?php
require_once("../utils/database.php");
class Admin {
    
    private $_mail;
    private $_mdp;
    
    private $_db;

    public function __construct(){
      
       $this->_mail="";
       $this->_mdp="";
       $this->_db=connexion();
    }

    public function getAllAlumni(){
        $pdo=$this->_db;
        $sth = $pdo->query("SELECT * FROM profils");
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function getAlumnus($id){
        $pdo=$this->_db;
        $sth = $pdo->prepare("SELECT * FROM profils where id=$id");
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function getAllDataToValidate(){
        $pdo=$this->_db;
        $sth = $pdo->prepare("SELECT * FROM attente");
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
    }
    public function getOneDataToValidate($id){
        $pdo=$this->_db;
        $sth = $pdo->prepare("SELECT * FROM attente where id =$id");
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
    }

    public function modification_alumni(){
        try{
            $pdo=connexion();

            $sql = "INSERT INTO attente(lastname,firstname,alias, email, password, campus, promo,date_start,date_end,github,photo,comment,id_profil)
                    VALUES(:lastname, 
                        :firstname,
                            :alias,
                            :email,
                            :password,
                            :campus,
                            :promo,
                            :date_start,
                            :date_end,
                            :github,
                            :photo, 
                            :comment, 
                            :id_profil)";
    
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':lastname',$lastname, PDO::PARAM_STR);
            $stmt->bindParam(':firstname',$firstname, PDO::PARAM_STR);
            $stmt->bindParam(':alias',$alias, PDO::PARAM_STR);
            $stmt->bindParam(':email',$email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->bindParam(':campus', $campus, PDO::PARAM_STR);
            $stmt->bindParam(':promo', $promo, PDO::PARAM_STR);
            $stmt->bindParam(':date_start', $date_start, PDO::PARAM_STR);
            $stmt->bindParam(':date_end', $date_end, PDO::PARAM_STR);
            $stmt->bindParam(':github', $github, PDO::PARAM_STR);
            $stmt->bindParam(':photo', $photo, PDO::PARAM_STR);
            $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
            $stmt->bindParam(':id_profil', $id_profil, PDO::PARAM_INT);

            echo "var dump de la requete<pre>";
            var_dump($stmt);
            echo "</pre>";
            $stmt->execute();

            echo "données insérées <br>";
        }
        catch(PDOException $e){
            echo 'erreur d\'ajout : '. $e->getMessage();
        }
    }



}
?>