<?php $title = 'Exportations mensuelles en soute' ?>

<?php ob_start() ?>
<div id="si9">
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2>Exportations mensuelle en soutes du mois de <?= $nom ?></h2>
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
            while($EXP = $importsx -> fetch()){
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


                <?php while($produits = $produitx2 -> fetch()){ ?>
                    <td>  <?= $produits['nom'] ?>  </td>
                <?php } ?>

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
  <?php
     if($nb == 1){
        ?>
              <h3 class="alert alert-danger">Pas d'exportation en soutes effectuer pour le mois de <?= $nom ?></h3>
        <?php
              }
      ?>

      <h4>Poid total = <?= $poid_t ?> Kg &nbsp; soit &nbsp; <?= $poid_t/1000 ?> tonne (t) </h4>
      </div>
          </div>
          </div>
          <br><br>
          <button onClick="imprimer('si9')" class="btn btn-success">Imprimer</button>

      <br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?>