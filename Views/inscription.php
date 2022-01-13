<?php include_once('header.php');?>
<?php
print_r($_POST);
print_r($_FILES);
if(isset($_FILES['photo'])){
    $tmpName = $_FILES['photo']['tmp_name'];
    $name = $_FILES['photo']['name'];
    $size = $_FILES['photo']['size'];
    $error = $_FILES['photo']['error'];
    echo '<br>tmpName'.$tmpName;
    echo '<br>Name'.$name;
    move_uploaded_file($tmpName, '../upload/'.$name);
}


?>


    <div class="container">
        <div class="row">
            <div class="card-title py-5">
                <h2>Inscrivez-vous</h2>
            </div>
        </div>
        <div class="card-text">
            <!--<form class="row g-5" action="InscriptionController.php" method="POST" enctype="multipart/form-data">-->
            <form class="row g-5" action="" method="POST" enctype="multipart/form-data">
                <!-- Champ Nom-->
                <div class="col-md-6 mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control form-control-sm" name="nom" id="nom" placeholder="">
                </div>
                <!-- Champ prénom-->
                <div class="col-md-6 mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control form-control-sm" name="prenom" id="prenom" placeholder="">
                </div>
                <!-- Champ pseudo-->
                <div class="col-md-6 mb-3">
                    <label for="prenom" class="form-label">Pseudo</label>
                    <input type="text" class="form-control form-control-sm" name="prenom" id="prenom" placeholder="">
                </div>
                <!-- Champ mot de passe-->
                <div class="col-md-6 mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control form-control-sm" name="password" id="password"
                        placeholder="">
                </div>
                <!-- Champ mail-->
                <div class="col-md-6 mb-3">
                    <label for="mail" class="form-label">Courriel</label>
                    <input type="email" class="form-control form-control-sm" name="mail" id="mail"
                        placeholder="nom@mail.fr">
                </div>
                <!-- Champ lien Github-->
                <div class="col-md-6 mb-3">
                    <label for="github" class="form-label">Lien GitHub</label>
                    <input type="text" class="form-control form-control-sm" name="github" id="github"
                        placeholder="https://github.com/">
                </div>
                <!-- Champ campus-->
                <div class="col-md-3 mb-3">
                    <label for="campus" class="control-label">Campus</label>
                    <input class="form-control" list="listCampus" id="campus"
                        placeholder="Sélectionnez">
                    <datalist id="listCampus">
                        <option value="Amiens">
                        <option value="Le Havre">
                        <option value="Noyon-Compiègne">
                        <option value="Versailles">
                        <option value="Campus virtuel">
                    </datalist>
                </div>
                <!-- Champ Promo-->
                <div class="col-md-3 mb-3">
                    <label for="Promo" class="control-label">Promo</label>
                    <input class="form-control" list="listPromo" id="promo"
                        placeholder="Sélectionnez">
                    <datalist id="listPromo">
                        <option value="DWWM">
                        <option value="CDA">
                        <option value="PHP">
                        <option value="CDUI">
                    </datalist>
                </div>
                <!--Période d'études-->
                <div class="col-md-3 mb-3">
                    <label for="date_start" class="control-label">Début</label>
                    <input class="form-control form-control-sm" name="date_start" id="date_start"
                        placeholder="AAAA/MM/JJ" type="date" />
                </div>
                <div class="col-md-3 mb-3">
                    <label for="date_start" class="control-label">Fin</label>
                    <input class="form-control form-control-sm" name="date_end" id="date_end" placeholder="AAAA/MM/JJ"
                        type="date" />
                </div>               
                <!-- Champ photo-->
                <div class="col-md-6 mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input class="form-control form-control-sm" name="photo" id="photo" type="file">
                </div>
                <div class="col-md-6">
                </div>
                <!-- Champ anecdote-->
                <div class="mb-3 mb-3">
                    <label for="comment" class="form-label">Anecdote</label>
                    <textarea class="form-control" placeholder="Racontez une anecdote" name="comment" id="comment"
                        style="height: 160px"></textarea>
                </div>
                <!-- Bouton Submit-->
                <div class="my-3">
                    <button type="submit" class="btn btn-outline-info">Envoyer</button>
                </div>
            </form>
        </div>
    </div>

<?php include_once('footer.php');?>