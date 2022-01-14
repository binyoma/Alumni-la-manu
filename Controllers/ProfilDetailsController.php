<?php
require_once("../models/Admin.php");
$pdo= new Admin();
$id=$_GET['id'];
$login=$_GET['login'];
if(!isset($login)){
    $login = 0;
}
//echo 'l\'id du profil est : ' .$id. '<br> le login est : ' .$login. '<br>';
$alumnus=$pdo->getAlumnus($id);

// echo "<pre>";
// print_r($alumni);
// echo "</pre>";
require_once("../Views/profil-Details.php");
?>