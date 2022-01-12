<?php include_once('header.php');?>

<body>
    <div class="container">
        <div class="card-title p-5">
            <h2>Profils des alumni</h2>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">NOM et prénom</h5>
    <p class="card-text">Campus</p>
    <p class="card-text">Période d'études</p>
    <p class="card-text">Promo</p>
    <a href="#" class="btn btn-primary">Détails</a>
  </div>
</div>

        <div class="card-text p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($patients as $patient) { ?>
                    <tr>
                        <td><?= $patient->lastname?></td>
                        <td><?= $patient->firstname ?></td>
                        <td><a href="../Controllers/PatientProfilController.php?id=<?=$patient->id?>"><i
                                    class="bi bi-pencil-fill"></i></a></td>
                        <td><a href="../Controllers/PatientDeleteController.php?id=<?=$patient->id?>"><i
                                    class="bi bi-trash-fill"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!--Pagination-->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php
                $n=1;
                if($page_counter == 0){
                    echo "<li class='page-item active'><a href=?start='0' class='page-link'>1</a></li>";
                    for($j=1; $j < $paginations; $j++) { 
                      echo "<li class='page-item'><a href=?start=$j class='page-link'>".$j+$n."</a></li>";                       
                   }
                   echo "<li class='page-item'>
                    <a class='page-link' href='?start=$next' aria-label='Next'>
                    <span aria-hidden='true'>&raquo;</span>
                    </a>
                    </li>";
                }else{
                    echo "<li class='page-item'>
                    <a class='page-link' href='?start=$previous' aria-label='Previous'>
                    <span aria-hidden='true'>&laquo;</span>
                    </a>
                    </li>"; 
                    for($j=0; $j < $paginations; $j++) {
                     if($j == $page_counter) {
                        echo "<li class='page-item active'><a href=?start=$j class='page-link'>".$j+$n."</a></li>";
                     }else{
                        echo "<li class='page-item'><a href=?start=$j class='page-link'>".$j+$n."</a></li>";
                     } 
                  }if($j != $page_counter+1)
                    echo "<li class='page-item'>
                    <a class='page-link' href='?start=$next' aria-label='Next'>
                    <span aria-hidden='true'>&raquo;</span>
                    </a>
                    </li>"; 
                } 
            ?>
                </ul>
            </nav>
        </div>
        <div class="card-text px-5 py-3">
            <a class="text-danger text-decoration-none" href="../Controllers/PatientAjoutController.php">Ajouter un
                patient <i class="bi bi-arrow-right-circle"></i></a>
        </div>
    </div>
</body>

<?php include_once('footer.php');?>