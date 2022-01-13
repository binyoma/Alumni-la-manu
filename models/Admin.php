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
        $pdo=connexion();
        // to do :add table in sql
        $sth = $pdo->prepare("SELECT * FROM ");
        $result = $sth->fetchAll();
        return $result;
    }

}
?>