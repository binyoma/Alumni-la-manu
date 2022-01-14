<?php include_once('header.php');?>

    <div class="container">
        <div class="row d-flex mx-auto">
            <div class="col">
                <div class="card-text titre p-5 text-center">
                    <h2><?=$alumnus->firstname. " ".$alumnus->lastname?></h2>
                </div>               
            </div>
        </div>
        <div class="row">
        <div class="col">
            <div class="card d-flex mx-auto" style="width: 20rem;">
                <img src="../assets/images/julie.jpeg" class= "img-fluid" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card-text p-5">
                    <p>pseudo: <?=$alumnus->alias?></p>
                    <p>github<?=$alumnus->github?></p>
                    <p>Campus <?=$alumnus->campus?></p>
                    <p>promo <?=$alumnus->promo?></p>
                    <p>A étudié du <?=$alumnus->date_start?> au <?=$alumnus->date_end?></p>
                    <p>"<?=$alumnus->comment?>"</p>
                </div>
            </div>
            
        </div>
        <div class="row">
        <div class="card-text text-center">
                    <a class="text-secondary text-decoration-none"
                    href="../Controllers/ProfilModifController.php?id=<?=$id?>">Modifier le profil <i
                    class="bi bi-arrow-right-circle"></i></a>
                </div>
        </div>      
    </div>

<?php include_once('footer.php');?>