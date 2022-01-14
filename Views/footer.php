
<footer class="mt-5">
   <div class="modal fade" id="modalLegalContent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="0" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Mentions légales</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Association des alumni de la Manu
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Vertically centered modal and cards for the team -->
    <div class="modal fade" id="modalTeam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="staticBackdropLabel">Qui sommes nous ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-text">
                        <p>Kevin</p>
                        <p>Innocent</p>
                        <p>Laurent</p>
                        </p>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row bg-dark fixed-bottom">
        <div class="col justify-content-center mx-auto d-flex justify-content-around">
            <!-- Vertically centered scrollable modal for legal content -->
            <!-- Button trigger modal legal content-->
            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalLegalContent">
                Mentions légales
            </button>
            <!-- Button trigger modal Team-->
            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modalTeam">
                Qui sommes-nous?
            </button>
            <p class="text-white"><small class="fw-lighter">© La Manu 2021</small>1</p>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>