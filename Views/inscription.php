<?php include_once('header.php');?>

<body>
    <div class="container">
        <div class="card-title p-5">
            <h2>Inscrivez-vous</h2>
        </div>
        <div class="card-text p-5">
            <div class="row">
                <div class="col">
                    <form action="InscriptionController.php" method="POST">
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
                                placeholder="dominique@courriel.fr">
                        </div>
                        <!-- Champ campus avec select
                        <div class="mb-3">
                            <label for="campus" class="control-label">Campus</label>
                            <select class="form-select" name="campus" id="campus"
                                aria-label="disabled Default select example">
                                <option selected>Selectionnez un campus</option>
                                <option value="1">Amiens</option>
                                <option value="2">Le Havre</option>
                                <option value="3">Noyon-Compiègne</option>
                                <option value="4">Versailles</option>
                                <option value="5">Campus virtuel</option>
                            </select>
                        </div>-->
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
                                <label for="promo" class="control-label">Promo</label>
                                <select class="form-select" name="promo" id="promo"
                                    aria-label="disabled Default select example">
                                    <option selected>Selectionnez une année</option>
                                    <?php for ($i = 2021; $i <= 2000; $i--) {?>
                                    <option value="<?=$i?>"><?=$i?></option>
                                    <?php } ?>
                                    }
                                </select>
                            </div>
                            <!-- Champ période d'études-->
                            <div class="mb-3">
                                <label for="periode" class="control-label">Période d'études</label>
                                <select class="form-select" name="periode" id="periode"
                                    aria-label="disabled Default select example">
                                    <option selected>Selectionnez une période</option>
                                    <?php for ($i = 2021; $i <= 2000; $i--) {?>
                                    <option value="<?=$i?>"><?=$i?></option>
                                    <?php } ?>
                                    }
                                </select>
                            </div>
                            <!-- Champ lien Github-->
                            <div class="mb-3">
                                <label for="github" class="form-label">Lien GitHub</label>
                                <input type="text" class="form-control form-control-sm" name="github" id="github"
                                    placeholder="">
                            </div>
                            <!-- Champ photo-->
                            <div class="mb-3">
                                <label for="photo" class="form-label">Photo</label>
                                <input type="text" class="form-control form-control-sm" name="photo" id="photo"
                                    placeholder="">
                            </div>
                            <!-- Champ anecdote-->
                            <div class="mb-3">
                                <label for="anecdote" class="form-label">Anecdote</label>
                                <textarea class="form-control" placeholder="Racontez une anecdote" name="anecdote"
                                    id="anecdote" style="height: 100px"></textarea>
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