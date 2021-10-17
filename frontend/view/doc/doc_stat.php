<?php $title = 'Phyto' ?>
<style>
    body{
        background:green;
    }
</style>
<?php ob_start() ?>
    <h1 style="color:white;">Statistiques </h1>
    <center>
        <div style="background:white; padding:2%; color:green; text-align:left;">
        Dans cette interface, vous pouvez obtenir les informations sur les transactions en fonction des périodes.
        <br>
        les transactions annuelle ci-dessous:
        <br>
        <img src="frontend\public\doc\Capture11.PNG" alt="" style="width:100%;">
        
        <hr>
        <h2>Imprimer </h2>
        Sur l'image ci-dessous, vous aurez le tableau qui liste les transactions effectuer
        <img src="frontend\public\doc\Capture12.PNG" alt="" style="width:100%;">
        Pour imprimer le resultat en PDF, vous cliquez juste sur le bouton imprimer et le tout es jouer
   
        </div>
    </center>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/doc.php';
?>