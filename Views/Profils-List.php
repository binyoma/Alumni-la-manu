<?php include_once('header.php');?>

<body>
    <div class="container">
        <!-- Recherche -->
<nav class="navbar navbar-expand-sm">
    <div class="container-fluid px-5">
<form class="d-flex me-auto" action="ProfilSearchController.php" method="POST">
<button type="submit" class="btn btn-info btn-sm"><i class="bi bi-search"></i></button>                
<input type="text" class="form-control form-control-sm" id="keyword" name="keyword" placeholder="Recherche">               
            </form>
</div>
</nav>
        <div class="card-title p-5">
            <h2>Profils des alumni</h2>
        </div>
        <div class="row">
            <?php 
         foreach($alumni as $alum){?>
            <div class="card col-sm-3 m-2" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$alum->lastname. " ".$alum->firstname?></h5>
                    <p class="card-text"> <?=$alum->campus?></p>
                    <p class="card-text">Période d'études</p>
                    <p class="card-text">Promo</p>
                    <a href="#" class="btn btn-primary">Détails</a>
                </div>
            </div>
            <?php }
        ?>
        </div>
</body>

<?php include_once('footer.php');?>