<?php
require_once("../models/Admin.php");
require_once("../models/Alumni.php");
$id=$_GET["id"];
$pdo= new Admin();
$alumnus=$pdo->getOneDataToValidate($id);
if(isset($_POST["validate"])){
    // check if admin choose to validate
    if($_POST["validate"]=="yes"){
        
        $alum =new Alumni($alumnus->lastname,
            $alumnus->firstname,
            $alumnus->alias,
            $alumnus->email,
            $alumnus->password,
            $alumnus->campus,
            $alumnus->promo,
            $alumnus->date_start,
            $alumnus->date_end,
            $alumnus->github,
            $alumnus->photo,
            $alumnus->comment,
            $alumnus->id_profil
            
        );
        var_dump($alumnus);
        // check if the profil exist
        if($alumnus->id_profil== 0){
           $alum->new_profil();
        }else{
            $profil =$pdo->getAlumnus($alumnus->id_profil);
            
            $pdo->edit($alumnus->id_profil);
        }

     
    }
}

require_once("../views/validateData.php");
?>