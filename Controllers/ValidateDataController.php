<?php
require_once("../models/Admin.php");
require_once("../models/Alumni.php");
$id=$_GET["id"];
$pdo= new Admin();
$alumnus=$pdo->getOneDataToValidate($id)();
if(isset($_POST["validate"])){
    if($_POST["validate"]=="yes"){
     $alum =new Alumni();
    }
}

echo "<pre>";
print_r($alumnus);
echo "</pre>";
require_once("../views/validateData.php");
?>