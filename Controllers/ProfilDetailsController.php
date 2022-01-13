<?php
require_once("../models/Admin.php");
$pdo= new Admin();
$id=$_GET['id'];
$alumnus=$pdo->getAlumnus($id);

echo "<pre>";
print_r($alumni);
echo "</pre>";
require_once("../Views/profil-Details.php");
?>