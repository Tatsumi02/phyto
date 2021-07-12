<?php $title = 'Bienvenue Dans cet Atelier de formation' ?>

<?php ob_start() ?>
<br><br>
<div class="container">
<br><br>
    <div class="alert alert-warning"><h1>PHYTO</h1></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/a.php';
?>