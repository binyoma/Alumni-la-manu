<?php
require_once("../models/Alumni.php");


//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
//echo '<pre>';
//print_r($_FILES);
//echo '</pre>';

if(isset($_FILES['photo'])){
    $tmpName = $_FILES['photo']['tmp_name'];
    $name = $_FILES['photo']['name'];
    $size = $_FILES['photo']['size'];
    $error = $_FILES['photo']['error'];
    //echo '<br>tmpName'.$tmpName;
   // echo '<br>Name'.$name;
    move_uploaded_file($tmpName, '../assets/images/'.$name);
}

$profil = new Alumni ( $_POST['lastname'],
                             $_POST['firstname'],
                             $_POST['alias'],
                             $_POST['email'],
                             // hashing the password
                             password_hash($_POST['password'],PASSWORD_DEFAULT),
                             $_POST['campus'], 
                             $_POST['promo'], 
                             $_POST['date_start'], 
                             $_POST['date_end'], 
                             $_POST['github'],
                             $_FILES['photo']['name'], 
                             $_POST['comment'], 
                             0
                            );
//var_dump($profil);
// TO Do check if the email is not already in database

 $new_profil = $profil->new_alumni();

?>