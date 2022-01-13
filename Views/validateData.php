<?php include_once('header.php');?> 
<div class="container">
    <div class="row">
        <ul>
            <li>Nom : <?=$alumnus->lastname?></li>
            <li>Prénom : <?=$alumnus->firstname?></li>
            <li>Pseudo : <?=$alumnus->alias?></li>
            <li>Courriel :<?=$alumnus->email?></li>
            <li>Github :<?=$alumnus->github?></li>
            <li>Campus :<?=$alumnus->campus?></li>
            <li>Promo :<?=$alumnus->promo?></li>
            <li>Début :<?=$alumnus->date_start?></li>
            <li>Fin :<?=$alumnus->date_end?></li>
            <li>Anecdote :<?=$alumnus->comment?></li>
        </ul>
        <img src="" alt="">
    </div>
    <div>
        <form action="#" method="post">
        <div class="form-check">
           <input class="form-check-input" type="radio" name="validate" id="yes" value="yes">
           <label class="form-check-label" for="yes">
            Yes
          </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="validate" id="no" value="no">
        <label class="form-check-label" for="no">
         no
        </label>
    </div>
    <button type="submit">Validate</button>
    </form>
    </div>

</div>
<?php include_once('footer.php');?>