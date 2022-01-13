<?php include_once('header.php');?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-title p-5">
                    <h2>Profil de <?=$alum->lastname. " ".$alum->firstname?></h2>
                </div>
            </div>
            <div class="col">
                <div class="card p-5">
                <img src="../assets/images/julie.jpeg" alt="...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-text p-5">
                    <p>pseudo: <?=$alum->alias?></p>
                    <p><?=$alum->mail?></p>
                    <p><?=$alum->github?></p>
                    <p>Campus <?=$alum->campus?></p>
                    <p>promo <?=$alum->promo?></p>
                    <p>A étudié du <?=$alum->date_start?> au <?=$alum->end?></p>
                    

                </div>
                <div class="card-text px-5 py-3">
                    <a class="text-danger text-decoration-none"
                    href="../Controllers/ProfilModifController.php?id=<?=$patients1->id?>">Modifier le profil <i
                    class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
            <div class="col">
                <div class="card-title p-5">
                <?php foreach ($patients2 as $patient2) { ?>
                    <p><?= $patient2->daterv."  ".$patient2->heurerv?></p>
            <?php } ?>
                </div>
            </div>
        </div>
    </div>

<?php include_once('footer.php');?>