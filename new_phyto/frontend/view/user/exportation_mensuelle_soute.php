<?php $title = 'Phyto' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2>Les Exportations mensuelle en soutes </h2>
    <br><br>
    <div class="alert alert-warning">
        <b>
            Les exportations mensuelle en soute lister dans les mois ci-dessous sont valable pour l'annee <?= date('Y') ?>
        </b>
    </div>
    <br><br>
    <p>
        <b>Choisir un mois</b>
        <br><br>
   <a href="?action=export_mensu_view&mois=01&nom=janvier" class="btn btn-warning"> Janvier</a>
   <a href="?action=export_mensu_view&mois=02&nom=Fevier" class="btn btn-warning"> Févier</a>
   <a href="?action=export_mensu_view&mois=03&nom=Mars" class="btn btn-warning"> Mars</a>
   <a href="?action=export_mensu_view&mois=04&nom=Avril" class="btn btn-warning"> Avril</a>
   <a href="?action=export_mensu_view&mois=05&nom=Mai" class="btn btn-warning"> Mai</a>
   <a href="?action=export_mensu_view&mois=06&nom=Juin" class="btn btn-warning"> Juin</a>
   <a href="?action=export_mensu_view&mois=07&nom=Juillet" class="btn btn-warning"> Juillet</a>
   <a href="?action=export_mensu_view&mois=08&nom=Aout" class="btn btn-warning"> Août</a>
   <a href="?action=export_mensu_view&mois=09&nom=Septembre" class="btn btn-warning"> Septembre</a>
   <a href="?action=iexport_mensu_view&mois=10&nom=Octobre" class="btn btn-warning"> Octobre</a>
   <a href="?action=export_mensu_view&mois=11&nom=Novembre" class="btn btn-warning"> Novembre</a>
   <a href="?action=export_mensu_view&mois=12&nom=Decembre" class="btn btn-warning"> Décembre</a>
    
    
    
    
    
    
    
    
    
    
    
    </p>
<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?>