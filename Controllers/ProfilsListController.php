<?php
require_once("../models/Admin.php");
$pdo= new Admin();
$alumni=$pdo->getAllAlumni($pdo);

echo "<pre>";
print_r($alumni);
echo "</pre>";
require_once("../views/Profils-List.php");
?>