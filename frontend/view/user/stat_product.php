<?php $title = 'Phyto' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2>Statistique sur les produits  <span class="glyphicon glyphicon-time"></span></h2>
    <br>
    <div class="alert alert-warning">
            ...
    </div>

    <br>
    <a href="?action=stat_prod_import" class="btn btn-primary">Produits exporté <span class="glyphicon glyphicon-hand-up"></span></a>
    <br><br><br>
    <a href="?action=stat_prod_export" class="btn btn-primary">Produits importé <span class="glyphicon glyphicon-hand-down"></span></a>

<br><br><br> 
<?php $content = ob_get_clean() ?>
                                 
<?php
    require 'frontend/template/tmp/u.php';
?>