<?php include_once('header.php');?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-title p-5">
                    <h2>Profil de <?=$alumnus->lastname. " ".$alumnus->firstname?></h2>
                </div>
            </div>
            <div class="col">
                
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-text p-5">
                    <p>pseudo: <?=$alumnus->alias?></p>
                    <p>github<?=$alumnus->github?></p>
                    <p>Campus <?=$alumnus->campus?></p>
                    <p>promo <?=$alumnus->promo?></p>
                    <p>A étudié du <?=$alumnus->date_start?> au <?=$alumnus->date_end?></p>
                    <p>Anecdote</p>
                </div>
            </div>
            <div class="col">
            <div class="card">
                <img src="../assets/images/julie.jpeg" alt="...">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="card-text px-5 py-3">
                    <a class="text-danger text-decoration-none"
                    href="../Controllers/ProfilModifController.php?id=<?=$id?>">Modifier le profil <i
                    class="bi bi-arrow-right-circle"></i></a>
                </div>
        </div>      
    </div>

<?php include_once('footer.php');?>