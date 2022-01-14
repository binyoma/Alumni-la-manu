<?php
require_once("../utils/database.php");

$email = $_POST['email'];
$password = $_POST['password'];
//echo 'email : ' .$email. ' et le mot de passe : ' .$password. '<br>';
$modif = $_POST['modif'];

try{//On se connecte d'abord au tableau profil et on vérife
$pdo=connexion();
    $sql = "SELECT *
            from profils
            WHERE email = :email";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email',$email, PDO::PARAM_STR);
    $stmt->execute();
    $profil = $stmt->fetch(PDO::FETCH_OBJ);
    //Si les données email et mot de passe correspondent à un profil, il retourne un id
    $test_id =$profil->id;
    
    //On vérifie si l'id profil existe. Si non, On vérifie si les données email/password existe dans le tableau admin
    if(isset($test_id)){
        if (password_verify($password, $profil->id)){
               //identifiant vérifié, on l'envoie dans la page de profil détail
        header("Location:../Views/profil-details.php?id=<?= $profil->id?>");
        // echo '<pre>';
        // print_r($profil);
        // echo '</pre>';
        }
        

        if($modif==1){
            header("Location: http://localhost:8888/PDO/Alumni-la-manu/Views/profil-modif.php?login=1&id=$test_id");
        }else{
        //identifiant vérifié, on l'envoie dans la page de profil détail
        header("Location: http://localhost:8888/PDO/Alumni-la-manu/Views/profil-details.php?login=1&id=$test_id");
        //echo '<pre>';
        //print_r($profil);
        //echo '</pre>';
        }
    }
    
    else
    {
        //echo "peut-etre un admin? <br>";
        try{//On vérifie si les données email/password existe dans le tableau admin
            $pdo=connexion();
            $sql = "SELECT *
                    from admin
                    WHERE email = :email AND password = :password";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email',$email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $profil = $stmt->fetch(PDO::FETCH_OBJ);
            //Si les données email et mot de passe correspondent àa un profil, il retourne un id
            $test_id =$profil->id;
            //On vérifie si l'id profil existe. Si non, les identifiants sont erronés   
            if(isset($test_id)){
                    //echo 'C\'est un admin! <pre>';
                    //print_r($profil);
                    //echo '</pre>';

                    //admin vérifié, on l'envoie dans la page de waiting Data
                    header("Location: http://localhost:8888/PDO/Alumni-la-manu/Views/waitingData.php");
                }else{
                echo "Vos identifiants sont erronés!";
                }
                
                
            
            }catch(PDOException $e){
            echo 'erreur de connexion à la BDD : '. $e->getMessage();
        }
                 
    }
    

}
catch(PDOException $e){
    echo 'erreur de connexion à la BDD : '. $e->getMessage();
}


?>