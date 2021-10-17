<?php $title = 'Phyto' ?>
<style>
    body{
        background:green;
    }
</style>
<?php ob_start() ?>
    <h1 style="color:white;">Definir une transaction </h1>
    <center>
        <div style="background:white; padding:2%; color:green; text-align:left;">
        Apres avoir cliqué sur définir une transaction, vous devez avoir l’interface ci-dessous
        <img src="frontend\public\doc\Capture9.PNG" alt="" style="width:100%;">
        

        <hr>
        <h2>Définir une importation ou une exportation</h2>
        Une fois que vous aurez cliqué sur importation ou exportation, vous aurez le même formulaire comme celui des transactions instantanées sauf que cette fois, à la fin vous aurez un champ où il vous sera demandé de définir une date 
        <img src="frontend\public\doc\Capture10.PNG" alt="" style="width:100%;">
   
        </div>
    </center>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/doc.php';
?>