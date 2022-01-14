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
    //private $_db;
    

    public function __construct($lastname,$firstname,$alias,
    $email,$password,$campus,$promo,$date_start,$date_end,$github,$photo,$comment,$id_profil){
      //echo "construct <br>";
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
       //$this->_db=connexion();


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

    

    public function new_alumni(){
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
            $stmt->bindParam(':id_profil', $id_profil, PDO::PARAM_INT);
            $stmt->execute();

            echo "données insérées <br>";
        }
        catch(PDOException $e){
            echo 'erreur d\'ajout : '. $e->getMessage();
        }
    }

}
?>