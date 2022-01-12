<?php
require_once("../models/Alumini.php");



$profil = new Alumni ( $_POST('lastname'),
                             $_POST('firstname'),
                             $_POST('alias'),
                             $_POST('email'),
                             $_password('password'),
                             $_POST('campus'), 
                             $_POST('promo'), 
                             $_POST('date_start'), 
                             $_POST('date_end'), 
                             $_POST('github'), 
                             $_POST('comment'), 
                             null);
                             

?>