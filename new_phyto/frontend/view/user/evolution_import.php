<?php $title = 'Phyto' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2>Evolution globale et mensuelle des principales exportations tout au long de l'année <?= date('Y') ?></h2>
    <table style="background-color: white;" class="table table-bordered table-striped table-condensed">
  <br>
  <thead>  
    <tr>
      <th>Produits</th>
      <th>Janvier</th>
      <th>Fevrier</th>
      <th> Mars </th>
      <th> Avril </th>
      <th> Mai </th>
      <th> Juin </th>
      <th> Juillet </th>
      <th> Août </th>
      <th> Septembre </th>
      <th> Octobre </th>
      <th> Novembre </th>
      <th> Decembre </th>
      
    </tr>
  </thead>
  <tbody>
        <?php 
         $t1 = 0; $t2 =0; $t3=0; $t4 =0; $t5=0; $t6=0; $t7=0;$t8=0;$t9=0;$t10=0;$t11=0;$t12=0;
         $tt1 =0;$tt2=0;$tt3=0;$tt4=0;$tt4=0;$tt5=0;$tt6=0;$tt7=0;$tt8=0;$tt9=0;$tt10=0;$tt11=0;$tt12=0;
        while($produitD = $importation -> fetch()){
            $produitsx = $getter->getProduitBy($produitD['produit_id']);
        ?>
           
              <?php while($all_produits = $tout_produit -> fetch()){ ?>
                <tr>
                <td><?= $all_produits['nom'] ?></td>

                <td>
                
                    <?php 
                        $poid_jan = $getter -> findImportByMont('01');
                        while($p_j = $poid_jan -> fetch()){
                            
                                $t1 += $p_j['poid'] /1000;
                                $tt1+=$t1;
                        }
                    ?>

                    <?=

                         $t1 
                      
                    ?>
                
                </td>

                <td>
                
                <?php 
                    $poid_jan2 = $getter -> findImportByMont('02');
                    while($p_j2 = $poid_jan2 -> fetch()){
                        
                            $t2 += $p_j2['poid'] /1000;
                            $tt2+=$t2;
                    }
                ?>

                <?=

                     $t2
                  
                ?>
            
            </td>

            <td>
                
                <?php 
                    $poid_jan3 = $getter -> findImportByMont('03');
                    while($p_j3 = $poid_jan3 -> fetch()){
                        
                            $t3 += $p_j3['poid'] /1000;
                            $tt3+=$t3;
                    }
                ?>

                <?=

                     $t3
                  
                ?>
            
            </td>

            <td>
                
                <?php 
                    $poid_jan4 = $getter -> findImportByMont('04');
                    while($p_j4 = $poid_jan4 -> fetch()){
                        
                            $t4 += $p_j4['poid'] /1000;
                            $tt4+=$t4;
                    }
                ?>

                <?=

                     $t4
                  
                ?>
            
            </td>


            <td>
                
                <?php 
                    $poid_jan5 = $getter -> findImportByMont('05');
                    while($p_j5 = $poid_jan5 -> fetch()){
                        
                            $t5 += $p_j5['poid'] /1000;
                            $tt5+=$t5;
                    }
                ?>

                <?=

                     $t5
                  
                ?>
            
            </td>

            <td>
                
                <?php 
                    $poid_jan6 = $getter -> findImportByMont('06');
                    while($p_j6 = $poid_jan6 -> fetch()){
                        
                            $t6 += $p_j6['poid'] /1000;
                            $tt6+=$t6;
                    }
                ?>

                <?=

                     $t6
                  
                ?>
            
            </td>

            <td>
                
                <?php 
                    $poid_jan7 = $getter -> findImportByMont('07');
                    while($p_j7 = $poid_jan7 -> fetch()){
                        
                            $t7 += $p_j7['poid'] /1000;
                            $tt7+=$t7;
                    }
                ?>

                <?=

                     $t7
                  
                ?>
            
            </td>

            <td>
                
                <?php 
                    $poid_jan8 = $getter -> findImportByMont('08');
                    while($p_j8 = $poid_jan8 -> fetch()){
                        
                            $t8 += $p_j8['poid'] /1000;
                            $tt8+=$t8;
                    }
                ?>

                <?=

                     $t8
                  
                ?>


          
            </td>


            <td>
                
                <?php 
                    $poid_jan9 = $getter -> findImportByMont('09');
                    while($p_j9 = $poid_jan9 -> fetch()){
                        
                            $t9 += $p_j9['poid'] /1000;
                            $tt9+=$t9;
                    }
                ?>

                <?=

                     $t9
                  
                ?>
            
            </td>
            
            <td>
                
                <?php 
                    $poid_jan10 = $getter -> findImportByMont('10');
                    while($p_j10 = $poid_jan10 -> fetch()){
                        
                            $t10 += $p_j10['poid'] /1000;
                            $tt10+=$t10;
                    }
                ?>

                <?=

                     $t10
                  
                ?>
            
            </td>

            <td>
                
                <?php 
                    $poid_jan11 = $getter -> findImportByMont('11');
                    while($p_j11 = $poid_jan11 -> fetch()){
                        
                            $t11 += $p_j11['poid'] /1000;
                            $tt11+=$t11;
                    }
                ?>

                <?=

                     $t9
                  
                ?>
            
            </td>

            <td>
                
                <?php 
                    $poid_jan12 = $getter -> findImportByMont('12');
                    while($p_j12 = $poid_jan12 -> fetch()){
                        
                            $t12 += $p_j12['poid'] /1000;
                            $tt12+=$t12;
                    }
                ?>

                <?=

                     $t12
                  
                ?>
            
            </td>
            
            
            
            
                

                </tr>

              

               
              <?php } ?>

             
                    
                        
                    
              

            
        <?php
        }
       ?>

       <tr>
         <td><b>Total</b></td>
         <td><b><?= $tt1 ?></b></td>
         <td><b><?= $tt2 ?></b></td>
         <td><b><?= $tt3 ?></b></td>
         <td><b><?= $tt4 ?></b></td>
         <td><b><?= $tt5 ?></b></td>
         <td><b><?= $tt6 ?></b></td>
         <td><b><?= $tt7 ?></b></td>
         <td><b><?= $tt8 ?></b></td>
         <td><b><?= $tt9 ?></b></td>
         <td><b><?= $tt10 ?></b></td>
         <td><b><?= $tt11 ?></b></td>
         <td><b><?= $tt12 ?></b></td>
       </tr>
  </tbody>
  </table>
<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?>