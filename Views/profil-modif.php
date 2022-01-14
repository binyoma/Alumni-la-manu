<?php include_once('header.php');
require_once('../Controllers/ModifProfilController.php');
?>


    <div class="container">
        <div class="card-title p-5">
            <h2>Modifiez votre profil</h2>
        </div>
        <div class="card-text p-5">
            <div class="row">
                <div class="col">
                    <form action="InscriptionController.php" method="POST">
                        <input type="hidden" name="id" value=""></input>
                        <!-- Champ nom-->
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control form-control-sm" name="nom" id="nom" placeholder="">
                        </div>
                        <!-- Champ prénom-->
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control form-control-sm" name="prenom" id="prenom"
                                placeholder="">
                        </div>
                        <!-- Champ pseudo-->
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Pseudo</label>
                            <input type="text" class="form-control form-control-sm" name="prenom" id="prenom"
                                placeholder="">
                        </div>
                        <!-- Champ mail-->
                        <div class="mb-3">
                            <label for="mail" class="form-label">Courriel</label>
                            <input type="email" class="form-control form-control-sm" name="mail" id="mail"
                                placeholder="nom@mail.fr">
                        </div>
                        <!-- Champ campus-->
                        <div class="mb-3">
                            <label for="campus" class="control-label">Campus</label>
                            <input class="form-control" list="listCampus" id="campus"
                                placeholder="Sélectionnez un campus">
                            <datalist id="listCampus">
                                <option value="Amiens">
                                <option value="Le Havre">
                                <option value="Noyon-Compiègne">
                                <option value="Versaillers">
                                <option value="Camus virtuel">
                            </datalist>
                        </div>
                        <!-- Champ Promo-->
                        <div class="mb-3">
                            <label for="Promo" class="control-label">Promo</label>
                            <input class="form-control" list="listPromo" id="promo"
                                placeholder="Sélectionnez une formation">
                            <datalist id="listPromo">
                                <option value="DWWM">
                                <option value="CDA">
                                <option value="PHP">
                                <option value="CDUI">
                            </datalist>
                        </div>
                        <!--Période d'études-->
                        <div class="mb-3">
                            <label for="date_start" class="control-label">Période d'études</label>
                            <input class="form-control form-control-sm" name="date_start" id="date_start"
                                placeholder="AAAA/MM/JJ" type="date" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control form-control-sm" name="date_end" id="date_end"
                                placeholder="AAAA/MM/JJ" type="date" />
                        </div>
                        <!-- Champ lien Github-->
                        <div class="mb-3">
                            <label for="github" class="form-label">Lien GitHub</label>
                            <input type="text" class="form-control form-control-sm" name="github" id="github"
                                placeholder="https://github.com/">
                        </div>
                        <!-- Champ photo-->
                        
                            <div class="mb-3">
                                <label for="photo" class="form-label">photo</label>
                                <input class="form-control form-control-sm" name="photo" id="photo" type="file">
                            </div>
                        
                        <!-- Champ anecdote-->
                        <div class="mb-3">
                            <label for="comment" class="form-label">Anecdote</label>
                            <textarea class="form-control" placeholder="Racontez une anecdote" name="comment"
                            id="comment" style="height: 160px"></textarea>
                        </div>
                        <!-- Bouton Submit-->
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-outline-danger">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    </div>





    <div class="container mt-5">
        <div class="row">
            <div class="card-title py-5">
                <h2>Modifiez votre profil</h2>
            </div>
        </div>
        <div class="card-text">
            <!--<form class="row g-5" action="InscriptionController.php" method="POST" enctype="multipart/form-data">-->
            <form class="row g-5" action="../Controllers/ModifProfilController.php" method="POST" enctype="multipart/form-data">
                <!-- id du profil-->
                <input type="hidden"  name="id_profil" id="id_profil" value="<?=$profil->id?>">
            
                <!-- Champ Nom-->
                 <div class="col-md-6 mb-3">
                    <label for="alias" class="form-label">Nom</label>
                    <input type="text" class="form-control form-control-sm" name="lastname" id="lastname" placeholder="<?=$profil->lastname?>">
                </div>
                <!-- Champ prénom-->
                <div class="col-md-6 mb-3">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control form-control-sm" name="firstname" id="firstname" placeholder="<?=$profil->firstname?>">
                </div>
                <!-- Champ pseudo-->
                <div class="col-md-6 mb-3">
                    <label for="alias" class="form-label">Pseudo</label>
                    <input type="text" class="form-control form-control-sm" name="alias" id="alias" placeholder="<?=$profil->alias?>">
                </div>
                <!-- Champ mot de passe-->
                <div class="col-md-6 mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control form-control-sm" name="password" id="password"
                        placeholder="<?=$profil->password?>">
                </div>
                <!-- Champ mail-->
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Courriel</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="email"
                        placeholder="<?=$profil->email?>">
                </div>
                <!-- Champ lien Github-->
                <div class="col-md-6 mb-3">
                    <label for="github" class="form-label">Lien GitHub</label>
                    <input type="text" class="form-control form-control-sm" name="github" id="github"
                        placeholder="<?=$profil->github?>">
                </div>
                <!-- Champ campus-->
                <div class="col-md-3 mb-3">
                    <label for="campus" class="control-label">Campus</label>
                    <input class="form-control" list="listCampus" id="campus" name="campus"
                        placeholder="<?=$profil->campus?>">
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
                    <input class="form-control" list="listPromo" id="promo" name="promo"
                        placeholder="<?=$profil->promo?>">
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
                        placeholder="<?=$profil->date_start?>" type="date" />
                </div>
                <div class="col-md-3 mb-3">
                    <label for="date_end" class="control-label">Fin</label>
                    <input class="form-control form-control-sm" name="date_end" id="date_end" placeholder="<?=$profil->date_end?>"
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
                    <textarea class="form-control" placeholder="<?=$profil->comment?>" name="comment" id="comment"
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