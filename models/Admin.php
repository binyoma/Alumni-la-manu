<?php
require_once("../utils/database.php");
class Admin {
    
    private $_mail;
    private $_mdp;
    
    private $_db;

    public function __construct(){
      
       $this->_mail="";
       $this->_mdp="";
       $this->_db=new Database();
    }

    public function getAllAlumni(){
        $pdo=$this ->_db;
        // to do :add table in sql
        $sth = $pdo->prepare("SELECT * FROM profil");
        $result = $sth->fetchAll();
        return $result;
    }

}
?>