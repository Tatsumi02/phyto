<?php $title = 'Bienvenue Dans cet Atelier de formation' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2> presentation des importations en Soutes</h2>
    <div>
        <br><br>   
    <table style="background-color: white;" class="table table-bordered table-striped table-condensed">
  
  <thead>  
    <tr>
      <th>Exportateur</th>
      <th>Type expedition</th>
      <th> Produit </th>
      <th>Pays expedition</th>
      <th>Poids</th>
      <th>Date</th>
    </tr>
  </thead>

  <tbody>
      
        <?php 
         $poid_t = 0; // cette variable doit concerver le poid totale des exportation en cargaison
            while($exps = $export_soute -> fetch()){

                $exportateurx = $getter->getExportBy($exps['importateur_id']);
                $produitx = $getter->getProduitBy($exps['produit_id']);
                $paysx = $getter->getPaysBy($exps['pays']);

                 while($exportateurs = $exportateurx -> fetch()){
        ?>
                <tr>
                     <td> <?= $exportateurs['nom'] ?> <?= $exportateurs['prenom'] ?> </td>
            <?php
                 }
            ?>
                     <td> <?= $exps['type'] ?> </td>

                <?php 
                     while($produits = $produitx -> fetch()){
                ?>

                     <td> <?= $produits['nom'] ?></td>

                <?php
                     }
                ?>


                <?php 
                     while($pays = $paysx -> fetch()){
                ?>
                     <td> <?= $pays['nom_fr_fr'] ?>  </td>
                <?php
                     }
                ?>


                     <td> <?= $exps['poid'] ?> Kg &nbsp; &nbsp; ou &nbsp; &nbsp; <?= $exps['poid'] / 1000 ?> t </td>
                     <td> <?= $exps['date_import'] ?> </td>
                </tr>
        <?php 
                $poid_t += $exps['poid'];
            }
    
        ?>
        
  </tbody>
</table>
<h4>Poids Total: <?= $poid_t ?> kg &nbsp; &nbsp; ou &nbsp; &nbsp; <?= $poid_t / 1000 ?> t</h4>
       
    </div>
<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?>