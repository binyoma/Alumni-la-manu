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
        $sth = $pdo->prepare("SELECT * FROM profils");
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
    }

}
?>