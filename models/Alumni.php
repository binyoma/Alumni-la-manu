<?php
require_once("../utils/database.php");
class Alumni {
    private $_id_Profil;
    private $_lastname;
    private $_firstname;
    private $_alias;
    private $_email;
    private $_password;
    private $_campus;
    private $_promo;
    private $_date_start;
    private $_date_end;
    private $_github;
    private $_photo;
    private $_comment;
    

    public function __construct($lastname,$firstname,$alias,
    $email,$password,$campus,$promo,$date_start,$date_end,$github,$photo,$comment,$id_profil){
      
       $this->_lastname=$lastname;
       $this->_firstname=$firstname; 
       $this->_alias=$alias;
       $this->_email=$email;
       $this->_password=$password;
       $this->_campus=$campus;
       $this->_promo=$promo;
       $this->_date_start=$date_start;
       $this->_date_end=$date_end;
       $this->_github=$github; 
       $this->_photo=$photo;
       $this->_comment=$comment;
       $this->_id_Profil=$id_profil;
    }

    public function getLastname(){
        return $this->$_lastname;
    }

    public function setLastname($lastname){
        $this->$_lastname=$lastname;
    }
    public function getFirstname(){
        return $this->$_firstname;
    }
    
    public function setFirstname($firstname){
        $this->$_firstname=$firstname;
    }

    public function getAlias(){
        return $this->$_alias;
    }
    
    public function setAlias($alias){
        $this->$_alias=$alias;
    }
    public function getEmail(){
        return $this->$_email;
    }
    
    public function setEmail($email){
        $this->$_email=$email;
    }
    public function getPassword(){
        return $this->$_password;
    }
    
    public function setPassword($password){
        $this->$_password=$password;
    }
    public function getCampus(){
        return $this->$_campus;
    }
    
    public function setCampus($campus){
        $this->$_campus=$campus;
    }
    public function getPromo(){
        return $this->$_promo;
    }
    
    public function setPromo($promo){
        $this->$_promo=$promo;
    }
    public function getDate_start(){
        return $this->$_date_start;
    }
    
    public function setDate_start($date_start){
        $this->$_date_start=$date_start;
    }

    public function getDate_end(){
        return $this->$_date_end;
    }
    
    public function setDate_end($date_end){
        $this->$_date_end=$date_end;
    }
    public function getGithub(){
        return $this->$_github;
    }
    
    public function setGithub($github){
        $this->$_github=$github;
    }
    public function getPhoto(){
        return $this->$_photo;
    }
    
    public function setPhoto($photo){
        $this->$_photo=$photo;
    }
    public function getComment(){
        return $this->$_comment;
    }
    
    public function setComment($comment){
        $this->$_comment=$comment;
    }
    public function getId_profil(){
        return $this->$_id_profil;
    }
    
    public function setId_profil($id_profil){
        $this->$_id_profil=$id_profil;
    }

    

    public function add(){
        try{
            // rêquete préparée
            $pdo=connexion();
            $stmt = $pdo->prepare("INSERT INTO  (nom, prenom, pseudo, mail, mdp, campus, promo, periode, github, photo, anecdote) VALUES (:nom, :prenom, :pseudo, :mail, :mdp, :campus, :promo, :periode, :github, :photo, :anecdote)");
            $stmt->bindParam(':lastname',$this->lastname);
            $stmt->bindParam(':firstname',$this->firstname);
            $stmt->bindParam(':birthdate',$this->birthdate);
            $stmt->bindParam(':phone',$this->phone);
            $stmt->bindParam(':mail', $this->mail);
            $stmt->execute();
        }
        catch(PDOException $e){
            echo 'erreur d\'ajout : '. $e->getMessage();
        }
    }

}
?>