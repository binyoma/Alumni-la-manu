<?php
require_once("../utils/database.php");
class Alumni {
    private $_lastname;
    private $_firstname;
    private $_alias;
    private $_email;
    private $_password;
    private $_campus;
    private $_promo;
    private $_periode;
    private $_github;
    private $_photo;
    private $_anecdote;
    private $_db;

    public function __construct(){
       $this->_nom="";
       $this->_prenom=""; 
       $this->_pseudo="";
       $this->_mail="";
       $this->_mdp="";
       $this->_campus="";
       $this->_promo="";
       $this->_periode="";
       $this->_github=""; 
       $this->_photo="";
       $this->_anecdote="";
       $this->_db=connextion();
    }

    public function getNom(){
        return $this->$_nom;
    }

    public function setNom($nom){
        $this->$_nom=$nom;
    }
    public function getPrenom(){
        return $this->$_prenom;
    }
    
    public function setPrenom($prenom){
        $this->$_prenom=$prenom;
    }

    public function getPseudo(){
        return $this->$_pseudo;
    }
    
    public function setPseudo($pseudo){
        $this->$_pseudo=$pseudo;
    }
    public function getMail(){
        return $this->$_mail;
    }
    
    public function setMail($mail){
        $this->$_mail=$mail;
    }
    public function getMdp(){
        return $this->$_mdp;
    }
    
    public function setMdp($mdp){
        $this->$_mdp=$mdp;
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
    public function getPeriode(){
        return $this->$_periode;
    }
    
    public function setPeriode($periode){
        $this->$_periode=$periode;
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
    public function getAnecdote(){
        return $this->$_anecdote;
    }
    
    public function setAnecdote($anecdote){
        $this->$_anecdote=$anecdote;
    }

    public function getAllAlumni(){
        $pdo=connexion();
        // to do :add table in sql
        $sth = $pdo->prepare("SELECT * FROM ");
        $result = $sth->fetchAll();
        return $result;
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