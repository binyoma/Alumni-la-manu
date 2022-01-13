<?php include_once('header.php');
?>

<body>
    <div class="container">
        <div class="card-title p-5">
            <h2>Données à vérifier</h2>
        </div>
        <div class="row">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Alias</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Promo</th>
                    <th scope="col">Start</th>
                    <th scope="col">End</th>
                    <th scope="col">Github</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Comment</th>
                    <th scope="col">ID Profil</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($alumni as $alum){?>
                   <tr>
                    <th scope="row"><?= $alum->id?></th>
                    <td><?= $alum->lastname?></td>
                    <td><?= $alum->firstname?></td>
                    <td><?= $alum->alias?></td>
                    <td><?= $alum->email?></td>
                    <td><?= $alum->password?></td>
                    <td><?= $alum->campus?></td>
                    <td><?= $alum->promo?></td>
                    <td><?= $alum->date_start?></td>
                    <td><?= $alum->date_end?></td>
                    <td><?= $alum->github?></td>
                    <td><?= $alum->photo?></td>
                    <td><?= $alum->comment?></td>
                    <td><?= $alum->id_profil?></td>
                    <td>
                        <a href="">Link to do </a>
                    </td>
                </tr>
                <?php }
                ?>
                
            </tbody>
        </table>
    </div>
        
        
</body>

<?php include_once('footer.php');?>