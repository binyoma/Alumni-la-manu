<?php
require_once("../models/Admin.php");
echo" 1 <br>";
var_dump($_POST);
$admin = new Admin ();
$admin->setLastname($_POST['lastname']);
$admin->setFirstname($_POST['firstname']);
$admin->setEmail($_POST['email']);
$admin->setPassword(password_hash($_POST['password'],PASSWORD_BCRYPT));
echo" 2 <br>";
var_dump($admin);
echo" 3 <br>";
$admin->new();

?>