<?php $title = 'Phyto' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2> poids des importations annuelles </h2>
    <br>
    <p>
        Choisir une année 
    </p>
    <br>
    <p>
    <a href="?action=import_annu_view&annee=<?= $ann ?>" class="btn btn-warning"><?= $ann ?></a>
    <a href="?action=import_annu_view&annee=<?= $ann2 ?>" class="btn btn-warning"><?= $ann2 ?></a>
    <a href="?action=import_annu_view&annee=<?= $ann3 ?>" class="btn btn-warning"><?= $ann3 ?></a>
    <a href="?action=import_annu_view&annee=<?= $ann4 ?>" class="btn btn-warning"><?= $ann4 ?></a>

    </p>

<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?> 