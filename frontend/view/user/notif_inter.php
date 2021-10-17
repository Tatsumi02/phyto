<?php $title = 'Fiche de suivi des notifications d\'interceptions' ?>

<?php ob_start() ?>
<br><br>
<div id="si2">
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2> Fiche de suivi des notifications d'interceptions </h2>
   
    <div>
        <br><br>   
    <table style="background-color: white;" class="table table-bordered table-striped table-condensed">
  
  <thead>  
    <tr>
      <th>Date</th>
      <th>N° de notification</th>
      <th> Motif de notification </th>
      <th>Nature des produits intercepter</th>
      <th>Quantite intercepte</th>
     
      <th>Quantite expediee et date d'expedition</th>
      <th>Exportateur</th>
      <th>Mesure prescites</th>
      <th>N° certificat phytosanitaire</th>
      <th>Pays de destination</th>
    </tr>
  </thead>

  <tbody>
      
      
           <?php 
                while($datas = $notifis->fetch()){
            ?>
                 <tr>
                    <td><?= $datas['date'] ?></td>
                    <td><?= $datas['numero_notification'] ?></td>
                    <td><?= $datas['motif'] ?></td>
                    <td><?= $datas['nature_produit'] ?></td>
                    <td><?= $datas['quantite_intercepte'] ?></td>
                    <td><?= $datas['quantite_expediee'] ?></td>
                    <td><?= $datas['exportateur'] ?></td>
                    <td><?= $datas['mesure_precite'] ?></td>
                    <td><?= $datas['numero_certificat'] ?></td>
                    <td><?= $datas['pays'] ?></td>
                 </tr>
            <?php
                }
           ?>
       
        
  </tbody>
</table>

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