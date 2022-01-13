<?php include_once('header.php');?>

<body>
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
</body>
<?php include_once('footer.php');?>