<?php
require_once("../models/Alumni.php");


echo '<pre>';
print_r($_POST);
echo '</pre>';

$profil = new Alumni ( $_POST['lastname'],
                             $_POST['firstname'],
                             $_POST['alias'],
                             $_POST['email'],
                             $_password['password'],
                             $_POST['campus'], 
                             $_POST['promo'], 
                             $_POST['date_start'], 
                             $_POST['date_end'], 
                             $_POST['github'],
                             $_POST['photo'], 
                             $_POST['comment'], 
                             0
                            );
var_dump($profil);
 $new_profil = $profil->new_alumni();

 

?>