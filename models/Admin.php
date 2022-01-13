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

}
?>