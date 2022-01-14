<?php include('header.php'); ?>

    <div class="container">
    <div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4 my-5">
					<div class="card">
						<h5 class="card-header ">
							Connexion
						</h5>
						<div class="card-body ">
                        <form action="../Controllers/LoginController.php" method="POST" >
                            <!-- hidden input for modif-->
                            <input type="hidden"  name="modif" id="modif" value="<?=$_GET['modif']?>">
                        
                            <!-- Champ mail-->
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <label for="email" class="form-label">Courriel</label>
                                    <input type="email" class="form-control form-control-sm" name="email" id="email" required
                                        placeholder="nom@mail.fr">
                                </div>
                            </div>

                            <!-- Champ mot de passe-->
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control form-control-sm" name="password" id="password" required
                                        placeholder="">
                                </div>
                            </div>
                             <!-- Bouton Submit-->
                            <div class="my-3">
                                <button type="submit" class="btn btn-secondary">Se connecter</button>
                            </div>
                        </form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
	</div>
    </div>
</body>
<?php include_once('footer.php'); ?>