<?php
require_once("../utils/database.php");
$pdo= new Database();
// $alumni=$pdo->getAllAlumni($pdo);
$sth = $pdo->prepare("SELECT * FROM  profil ");
        $sth->execute();
        $alumni = $sth->fetchAll(PDO::FETCH_OBJ);
echo "<pre>";
print_r($alumni);
echo "</pre>";
require_once("../views/Profils-List.php");
?>