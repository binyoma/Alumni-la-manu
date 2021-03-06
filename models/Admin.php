<?php
require_once("../utils/database.php");
class Admin {
    private $_lastname;
    private $_firstname;
    private $_email;
    private $_password;
    
    private $_db;

    public function __construct(){
      
        $this->_lastname=" ";
        $this->_firstname=" ";
        $this->_mail=" ";
        $this->_password=" ";
       $this->_db=connexion();
    }

    public function getLastname(){
        return $this->_lastname;
    }

    public function setLastname($lastname){
        $this->_lastname=$lastname;
    }
    public function getFirstname(){
        return $this->_firstname;
    }
    
    public function setFirstname($firstname){
        $this->_firstname=$firstname;
    }
    public function getEmail(){
        return $this->_email;
    }
    
    public function setEmail($email){
        $this->_email=$email;
    }
    public function getPassword(){
        return $this->_password;
    }
    
    public function setPassword($password){
        $this->_password=$password;
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
        $result = $sth->fetch(PDO::FETCH_OBJ);
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
            $stmt->execute();

            echo "donn??es ins??r??es <br>";
        }
        catch(PDOException $e){
            echo 'erreur d\'ajout : '. $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $pdo=connexion();
           $sql = "UPDATE profils 
            SET lastname =:lastname,
                firstname =:firstname,
                alias = :alias, 
                email = :email, 
                password = :password,
                campus = :campus,
                promo = :promo,
                date_start =:date_start,
                date_end =:date_end,
                github =:github,
                photo =:photo,
                comment =:comment
                where id = :id";
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
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
    
                echo "donn??es ins??r??es <br>";
            }
            catch(PDOException $e){
                echo 'erreur d\'ajout : '. $e->getMessage();
        }
    }

    public function new(){
        try{
            $pdo=connexion();
            $sql = "INSERT INTO admin(lastname, firstname,  email, password)
                VALUES(:lastname, :firstname, :email,:password)";
            $stmt = $pdo->prepare($sql);
            
            $stmt->bindParam(':lastname',$this->_lastname, PDO::PARAM_STR);
            $stmt->bindParam(':firstname',$this->_firstname, PDO::PARAM_STR);
            $stmt->bindParam(':email',$this->_email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $this->_password, PDO::PARAM_STR);
            $stmt->execute();
    
            echo "donn??es ins??r??es <br>";
        }
        catch(PDOException $e){
            echo 'erreur d\'ajout : '. $e->getMessage();
        }
    }
}
?>