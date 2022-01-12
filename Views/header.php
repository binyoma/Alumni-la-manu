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
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>
<div class="p-2">
        <!--Titre-->
        <h1 class="card-title titre p-4 text-center">ALUMNI <i class="bi bi-pc-display text-info"></i><small class="fw-lighter"> La Manu</small></h1>
</div>
<nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="/Alumini-la-manu/index.php"><i class="bi bi-house-door-fill py-0 text-info"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text- fw-light py-0" aria-current="page" href="/Alumini-la-manu/Views/Profils-List.php">Profils des alumni</a>
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-light py-0" aria-current="page" href="/Alumini-la-manu/Views/Inscription.php">Inscrivez-vous</a>
                    </li>
                    <li>
                   
            <form class="row g-2" action="ProfilSearchController.php" method="POST">
                <div class="col-auto">
                    <label for="keyword" class="visually-hidden"></label>
                    <input type="text" class="form-control form-control-sm" id="keyword" name="keyword" placeholder="Entrez un nom">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-search"></i></button>
                </div>
            </form>
       
                    </li> 
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- fin header. Début body.-->