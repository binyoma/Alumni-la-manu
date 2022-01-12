<?php
require_once("../models/Admin.php");
$pdo= new Admin();
$alumni=$pdo->getAllAlumni();

echo "<pre>";
print_r($alumni);
echo "</pre>";
require_once("../views/Profils-List.php");
?>