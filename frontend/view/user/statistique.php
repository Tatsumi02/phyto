<?php $title = 'Phyto' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2> statistique</h2>
<br><br>
    <div>
        <a href="?action=presentation_export_gargaison" class="btn btn-primary col-md-12">Présentation des exportations en cargaisons</a>
        <br>
        <a href="?action=presentation_export_soute" class="btn btn-primary col-md-12">Présentation des exportations en bagage a soutes</a>
        <br><br><br>
        <a href="?action=presentation_import_gargaison" class="btn btn-primary col-md-12">Présentation des importations en cargaisons</a>
        <br>
        <a href="?action=presentation_import_soute" class="btn btn-primary col-md-12">Présentation des importations en bagage a soutes</a>
        <br>
        <br>
        <br><br>
        <a href="?action=poid_export_anuelle" class="btn btn-primary col-md-12">Poids des exportations annuelles</a>
        <br>
        <a href="?action=poid_import_anuelle" class="btn btn-primary col-md-12">Poids des importations annuelles</a>
      
        <a href="?action=import_mensuelle_soute" class="btn btn-primary col-md-12">importations mensuelle en bagage a  soute </a>
        <br>
        <a href="?action=import_mensuelle_cargaisons" class="btn btn-primary col-md-12">importations annuelle en cargaisons</a>
        <br><br><br><br><br><br>
        ---
        <a href="?action=export_mensuelle_cargaisons" class="btn btn-primary col-md-12">Exportations mensuelle en cargaisons</a>
        <a href="?action=import_annuelle_soute" class="btn btn-primary col-md-12">importation annuelle en bagage a soute</a>
        <!-- <a href="?action=export_mensuelle_cargaisons" class="btn btn-primary col-md-12">exportation mensuelle en cargaison</a>
         -->
        --- 
        <br><br><br><br><br><br>
        <a href="?action=exportation_mensuelle_soute" class="btn btn-primary col-md-12">exportations mensuelle en soute </a>
        <a href="?action=export_annuelle_cargaison" class="btn btn-primary col-md-12">exportations annuelles en cargaisons </a>
        <br><br><br><br>
        <a href="?action=notif_inter" class="btn btn-primary col-md-12"> Notifications d'interception des exportations  </a>
        <br><br><br><br>
        <a href="?action=notif_interImp" class="btn btn-primary col-md-12"> Notifications d'interception des importations  </a>
        <br><br><br><br><br>
        <a href="?action=evolution_import" class="btn btn-warning col-md-12" style="display:none;">évolution globale mensuelle des principales  exportations tout au long de l'année </a>
    
    </div>

<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?>