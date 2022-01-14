<?php
include_once("../models/Admin.php");
require_once("../models/Alumni.php");

$id=$_GET['id'];
$login=$_GET['login'];
echo ' login : ' .$login. '<br>';

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$alias = $_POST['alias'];
$email = $_POST['email'];
$password = $_POST['password'];
$campus = $_POST['campus'];
$promo = $_POST['promo']; 
$date_start = $_POST['date_start'];
$date_end = $_POST['date_end']; 
$github = $_POST['github'];
$photo = $_FILES['photo']['name']; 
$comment = $_POST['comment'];
$id_profil = $_POST['id_profil'];

echo "Valeur des POST<pre>";
var_dump($_POST);
echo "</pre>";


if(isset($_FILES['photo'])){
    $tmpName = $_FILES['photo']['tmp_name'];
    $name = $_FILES['photo']['name'];
    $size = $_FILES['photo']['size'];
    $error = $_FILES['photo']['error'];
    //echo '<br>tmpName'.$tmpName;
   // echo '<br>Name'.$name;
    move_uploaded_file($tmpName, '../assets/images/'.$name);
}



/*if($login = 0){
    header("Location: http://localhost:8888/PDO/Alumni-la-manu/Views/login.php?modif=1");
}*/


if(!isset($id_profil)){
$pdo= new Admin();
$profil=$pdo->getAlumnus($id);

echo "tableau profil<pre>";
print_r($profil);
echo "</pre>";
}else{
    echo 'envoi des données pour modifications <br>';

    $profil = new Alumni ( $_POST['lastname'],
                             $_POST['firstname'],
                             $_POST['alias'],
                             $_POST['email'],
                             $_POST['password'],
                             $_POST['campus'], 
                             $_POST['promo'], 
                             $_POST['date_start'], 
                             $_POST['date_end'], 
                             $_POST['github'],
                             $_FILES['photo']['name'], 
                             $_POST['comment'], 
                             $id_profil
                            );
//var_dump($profil);
 $new_profil = $profil->new_alumni();
}




?>