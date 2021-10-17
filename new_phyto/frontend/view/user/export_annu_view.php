<?php $title = 'Exportation annuelle' ?>

<?php ob_start() ?>
<br><br>
<div id="sectionAimprimer">
<div class="container" style="background:white; padding:2%; text-align:left;">
  <h2> poids des exportations pour l'annee <?= $annee ?> </h2>
  <br><br>
<table style="background-color: white;" class="table table-bordered table-striped table-condensed">
  
  <thead>  
    <tr>
      <th>N°</th>
      <th>Spéculation</th>
      <th>Produits</th>
      <th> Quantité(Kg) </th>
      <th>Pays de destination</th>
      
    </tr>
  </thead>
      <?php
        $nb = 1;
        $poid_t = 0;
        $poid_tone = 0;
            while($EXP = $export -> fetch()){
                $produitx = $getter->getProduitBy($EXP['produit_id']);
                $produitx2 = $getter->getProduitBy($EXP['produit_id']);
                $paysx = $getter->getPaysBy($EXP['pays']);
                $poid_t += $EXP['poid'];
      ?>
                <tr>
                    <td> <?= $nb++ ?> </td>

                <?php 
                     while($produits = $produitx -> fetch()){
                        $speculationsx = $getter->getSpeculationBy($produits['speculation_id']);
                         while($speculs = $speculationsx -> fetch()){
                ?>

                     <td> <?= $speculs['nom'] ?></td>

                <?php
                     }
                    }
                ?>

              <?php 
                    while($produits2 = $produitx2 -> fetch()){
              ?>
                <td><?= $produits2['nom'] ?></td>

              <?php
                    }
              ?>


                    <td> <?= $EXP['poid'] ?> Kg &nbsp; (<?= $EXP['poid'] / 1000 ?> t) </td>
                    
                <?php 
                     while($pays = $paysx -> fetch()){
                ?>
                     <td> <?= $pays['nom_fr_fr'] ?>  </td>
                <?php
                     }
                ?>

                </tr>
      <?php
            }
           
      ?>
  <tbody>
      
 </tbody>
          
</table>

          </div>
  <?php
     if($nb == 1){
        ?>
              <h3 class="alert alert-danger">Pas d'exportation effectuer en <?= $annee ?></h3>
        <?php
              }
      ?>

      <h4 class="alert alert-warning container">Poid total = <?= $poid_t ?> Kg &nbsp; ou &nbsp; <?= $poid_t/1000 ?> tonne (t) </h4>
  </div>          
    
      <br><br>
      <button onClick="imprimer('sectionAimprimer')" class="btn btn-success">Imprimer</button>

      <br><br><br>

<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?>