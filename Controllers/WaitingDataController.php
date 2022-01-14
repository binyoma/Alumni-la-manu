<?php
require_once("../models/Admin.php");
$pdo= new Admin();
$alumni=$pdo->getAllDataToValidate();
require_once("../views/waitingData.php");
?>