<?php include_once('header.php');?> 
<?php
//print_r($_POST);
//print_r($_FILES);



?>


    <div class="container mt-5">
        
        <div class="card-text">
            <!--<form class="row g-5" action="InscriptionController.php" method="POST" enctype="multipart/form-data">-->
            <form class="row g-5" action="../Controllers/InscriptionAdminController.php" method="POST" enctype="multipart/form-data">
                <!-- Champ Nom-->
                <div class="col-md-6 mb-3">
                    <label for="lastname" class="form-label">Nom</label>
                    <input type="text" class="form-control form-control-sm" name="lastname" id="lastname" placeholder="">
                </div>
                <!-- Champ prénom-->
                <div class="col-md-6 mb-3">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control form-control-sm" name="firstname" id="firstname" placeholder="">
                </div>

                <!-- Champ mot de passe-->
                <div class="col-md-6 mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control form-control-sm" name="password" id="password"
                        placeholder="">
                </div>
                <!-- Champ mail-->
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Courriel</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="email"
                        placeholder="nom@mail.fr">
                </div>
                
                <!-- Bouton Submit-->
                <div class="my-3">
                    <button type="submit" class="btn btn-outline-info">Envoyer</button>
                </div>
            </form>
        </div>
    </div>

<?php include_once('footer.php');?>