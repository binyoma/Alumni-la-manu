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

    public function modification_alumni(){
        try{
            $pdo=connexion();

            $sql = "UPDATE profils(lastname,firstname,alias, email, password, campus, promo,date_start,date_end,github,photo,comment,id_profil)
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
            $stmt->bindParam(':lastname',$this->_lastname, PDO::PARAM_STR);
            $stmt->bindParam(':firstname',$this->_firstname, PDO::PARAM_STR);
            $stmt->bindParam(':alias',$this->_alias, PDO::PARAM_STR);
            $stmt->bindParam(':email',$this->_email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $this->_password, PDO::PARAM_STR);
            $stmt->bindParam(':campus', $this->_campus, PDO::PARAM_STR);
            $stmt->bindParam(':promo', $this->_promo, PDO::PARAM_STR);
            $stmt->bindParam(':date_start', $this->_date_start, PDO::PARAM_STR);
            $stmt->bindParam(':date_end', $this->_date_end, PDO::PARAM_STR);
            $stmt->bindParam(':github', $this->_github, PDO::PARAM_STR);
            $stmt->bindParam(':photo', $this->_photo, PDO::PARAM_STR);
            $stmt->bindParam(':comment', $this->_comment, PDO::PARAM_STR);
            $stmt->bindParam(':id_profil', $this->_id_profil, PDO::PARAM_INT);
            $stmt->execute();

            echo "données insérées <br>";
        }
        catch(PDOException $e){
            echo 'erreur d\'ajout : '. $e->getMessage();
        }
    }



}
?>