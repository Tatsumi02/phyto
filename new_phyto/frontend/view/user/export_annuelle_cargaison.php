<?php $title = 'Exportations anuuelles en cargaison' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2> exportations annuelles en cargaisons </h2>
    <br>
    <p>
        Choisir une année 
    </p>
    <br>
    <p>
    <a href="?action=export_annu_carg_view&annee=<?= $ann ?>" class="btn btn-warning"><?= $ann ?></a>
    <a href="?action=export_annu_carg_view&annee=<?= $ann2 ?>" class="btn btn-warning"><?= $ann2 ?></a>
    <a href="?action=export_annu_carg_view&annee=<?= $ann3 ?>" class="btn btn-warning"><?= $ann3 ?></a>
    <a href="?action=export_annu_carg_view&annee=<?= $ann4 ?>" class="btn btn-warning"><?= $ann4 ?></a>

    </p>

<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?> 