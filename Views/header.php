<?php 



//code pour définir le chemin racine du localhost
$url = $_SERVER['REQUEST_URI']; //returns the current URL
//echo $url. '<br>';
$parts = explode('/',$url);
//echo 'part : ' .print_r($parts). '<br> counts parts : '.count($parts).'<br>';
$dir_root = $_SERVER['SERVER_NAME'];
//echo 'serveur name :' .$dir_root. '<br>';
for ($i = 0; $i <= count($parts) - 1; $i++) {
    $racine ="Alumni-la-manu";
    if($parts[$i] != $racine ){
    $dir_root .= $parts[$i] . "/";
    }else{
        $i = count($parts) ;
    }
}
//echo 'root directory : ' .$dir_root. '<br>';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Alumni-La-Manu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://<?=$dir_root?>Alumni-la-manu/assets/CSS/style.css">
</head>
<body>
    <header>
<div class="fondheader">
  <div class="card-title p-5 titre m-0 text-white">
    <h1>ALUMNI <small
                class="fw-lighter"> La Manu</small></h1>   
  </div>
</div>
    </header>

<!-- Barre de menu-->
<!--<nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
    <div class="container-fluid px-5">-->
<nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
    <div class="container-fluid px-5">
        <!-- Accueil (icône)-->
        <a class="navbar-brand" href="http://<?=$dir_root?>Alumni-la-manu/index.php"><i
                class="bi bi-house-door-fill py-0 text-light"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Lien 1 -->
                <li class="nav-item">
                    <a class="nav-link active text-light fw-light py-0" aria-current="page"

                        href="http://<?=$dir_root?>Alumni-la-manu/Controllers/ProfilsListController.php">Profils des alumni</a>

                </li>
                <!-- Lien 2 -->
                <li class="nav-item">
                    <a class="nav-link active text-light fw-light py-0" aria-current="page"

                        href="http://<?=$dir_root?>Alumni-la-manu/Views/inscription.php">Inscrivez-vous</a>

                </li>
                <!-- connexion -->
                <li class="nav-item">
                    <a class="nav-link active text-light fw-light py-0" aria-current="page"

                        href="http://<?=$dir_root?>Alumni-la-manu/Views/login.php">Connexion</a>

                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- fin header-->
