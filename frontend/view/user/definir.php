<?php $title = 'Bienvenue Dans cet Atelier de formation' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2>Défini une transaction <span class="glyphicon glyphicon-time"></span></h2>
    <br>
    <div class="alert alert-warning">
            Défini une transaction vous permet d'effectuer une exportation ou une importation avec une date défini
    </div>

    <br>
    <a href="?action=defini_exportation" class="btn btn-primary">Défini une exportation <span class="glyphicon glyphicon-hand-up"></span></a>
    <br><br><br>
    <a href="?action=defini_importation" class="btn btn-primary">Défini une importation <span class="glyphicon glyphicon-hand-down"></span></a>

<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?>