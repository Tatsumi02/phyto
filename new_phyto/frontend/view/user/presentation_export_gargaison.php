<?php $title = 'statistique des exportations en cargaisons' ?>

<?php ob_start() ?>
<br><br>
<div id="si2">
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2> statistique des exportations en cargaisons</h2>
    <div>
        <br><br>   
    <table style="background-color: white;" class="table table-bordered table-striped table-condensed">
  
  <thead>  
    <tr>
      <th>Exportateur</th>
      <th>Type expedition</th>
      <th> Produits </th>
      <th>Pays de destination</th>
      <th>Poids</th>
     
      <th>Date</th>
    </tr>
  </thead>

  <tbody>
      
        <?php 
         $poid_t = 0; // cette variable doit concerver le poid totale des exportation en cargaison
            while($exps = $export_carg -> fetch()){

                $exportateurx = $getter->getExportBy($exps['exportateur_id']);
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

                     <td> <?= $produits['nom'] ?> </td>

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


                     <td> <?= $exps['poid'] ?> Kg &nbsp;&nbsp; ou &nbsp;&nbsp; <?= $exps['poid'] /1000 ?> t </td>
                    
                         
                    
                     <td> <?= $exps['date_export'] ?> </td>
                </tr>
        <?php 
                $poid_t += $exps['poid'];
            }
    
        ?>
        
  </tbody>
</table>
<h4>Poids Total: <?= $poid_t ?> kg &nbsp; &nbsp; ou &nbsp; &nbsp; <?= $poid_t/1000 ?> t</h4>
</div>
          </div>
          </div>
          <br><br>
          <button onClick="imprimer('si2')" class="btn btn-success">Imprimer</button>

<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?>