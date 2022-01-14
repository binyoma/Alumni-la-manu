<?php include_once('header.php');
?>



    <div class="container justify-content-center">
        <div class="card-title titre p-5 text-center">
            <h2>Nos alumni</h2>
        </div>
        <!-- Recherche -->
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid px-5">
                <form class="d-flex ms-auto" action="ProfilSearchController.php" method="POST">
                    <button type="submit" class="btn btn-info btn-sm"><i class="bi bi-search"></i></button>
                    <input type="text" class="form-control form-control-sm" id="keyword" name="keyword"
                        placeholder="Rechercher un alumni">
                </form>
            </div>
        </nav>
        <div class="row mx-auto">
            <?php 
         foreach($alumni as $alum){?>
            <div class="card col-sm-3 m-2" style="width: 18rem;">
            <img src="../assets/images/<?=$alum->photo?>" class="card-img-top" alt="...">
                
                <div class="card-body profil">
                    <h5 class="card-title"><?=$alum->lastname. " ".$alum->firstname?></h5>
                    <p class="card-text"><?=$alum->campus?></p>
                    <p class="card-text"><?=$alum->promo?></p>
                    <p>Période d'études:</p>
                    <p class="card-text"><?=$alum->date_start." – ".$alum->date_end?></p>                  
                    <a href="../Controllers/ProfilDetailsController.php?id=<?=$alum->id?>" class="btn btn-primary">Détails</a>
                </div>
            </div>
            <?php }
        ?>
        </div>
         </div>

>

<?php include_once('footer.php');?>