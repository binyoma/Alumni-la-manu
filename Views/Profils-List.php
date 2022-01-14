<?php include_once('header.php');
?>



    <div class="container">
        <div class="card-title titre p-5 text-center">
            <h2>Nos alumni</h2>
        </div>
        <nav class="navbar navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex" action="ProfilSearchController.php" method="POST">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
    </form>
  </div>
</nav>
        <!-- Recherche -->
        <div class="row d-flex justify-content-evenly">
            <?php 
         foreach($alumni as $alum){?>
            <div class="card col-sm-3 my-5" style="width: 18rem;">
            <img src="../assets/images/<?=$alum->photo?>" class="card-img-top" alt="...">
                
                <div class="card-body profil">
                    <h5 class="card-title"><?=$alum->lastname. " ".$alum->firstname?></h5>
                    <p class="card-text"><?=$alum->campus?></p>
                    <p class="card-text"><?=$alum->promo?></p>
                    <p>Période d'études:</p>
                    <p class="card-text"><?=$alum->date_start." – ".$alum->date_end?></p>                  
                    <a href="../Controllers/ProfilDetailsController.php?id=<?=$alum->id?>" class="btn btn-secondary">Détails</a>
                </div>
            </div>
            <?php }
        ?>
        </div>
         </div>

>

<?php include_once('footer.php');?>