<?php
require_once("../models/Admin.php");
$id=$_GET["id"];
$pdo= new Admin();
$alumnus=$pdo->getAlumnus($id)();

echo "<pre>";
print_r($alumnus);
echo "</pre>";
require_once("../views/validateData.php");
?>