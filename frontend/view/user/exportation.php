<?php $title = 'Phyto' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
<h2>Effectuer une exportation instantanée</h2>
    <br>
    <?php 
                if(isset($_GET['success'])){
            ?>
                <div id="not" class="alert alert-success">
                    success...
                </div>
            <?php
                }
           ?>
    <br>
    <p>
        <form action="?action=save_exportation" method="post"  style="text-align:left;">
            <!-- <input type="number" required class="form-control" name="poid" placeholder="Poid en Kg" /><br>
            -->
           <label for="acteur" id="wan0">Exportateur</label>
           <select name="exportateur_id" class="form-control" id="acteur">
                <option value="indef">----</option>
                <?php
                    while($act = $acteurs -> fetch()){
                ?>
                    <option value="<?php echo $act['id']; ?>">
                      <?= $act['nom'] ?> <?= $act['prenom'] ?>
                    </option>
                <?php
                    }
                ?>

                
           </select>

                <label for="typ" id="wan">Type</label>
                <select name="type" id="typ" class="form-control">
                    <option value="indef">-------</option>
                    <option value="Soutes">Bagage a Soutes</option>
                    <option value="Cargaisons">Cargaisons</option>
                </select>
                
                <br>
            <label for="produit">Produit</label>
            <div style="overflow-y:scroll; height:250px;">
                   
                   <?php 
                        while($prod = $produit -> fetch()){
                    ?> 
                        <input type="text" name="<?= $prod['nom']; ?>" value="0 kg" placeholder="poid" size=6 required />
                        <input type="checkbox" id="i<?= $prod['id'] ?>" value="<?= $prod['nom'] ?>" name="produit[]">
                            <label for="i<?= $prod['id'] ?>">
                                <?= $prod['nom']; ?> 
                               
                            </label>
                       <br>
                    <?php
                        }
                   ?>
            </div>

            <label for="pays" id="wan2">Pays de destination</label>
            <select name="pays" class="form-control" id="pays">
                    <option value="indef">----------</option>
                    <?php 
                        while($pay = $pays -> fetch()){
                    ?>
                            <option value="<?= $pay['id'] ?>">
                               <?= $pay['nom_fr_fr'] ?>
                            </option>
                    <?php
                        }
                    ?>
            </select>
            <br>
            <input type="text" class="form-control" name="num_c" placeholder="numero de certification" required>
        
           
            <!-- <br>
            <label for="date_import">Date exportation</label>
            <input type="date" class="form-control" id="date_import" name="date_export" /> -->
            <br><br>
            <button type="submit" class="btn btn-primary" id="but">Effectuer l'exportation</button>
        </a>
        </form>
    </p>
    <script>
    let temps = 5;
    let not = document.getElementById('not');
    let compteur = setInterval(() => {
        --temps

        if(temps == 0){
            not.style.display = 'none';
            clearInterval(compteur);
        }
    }, 800);

    

    $('#but').click(()=>{
                let selectElement = document.getElementById('acteur');
                let selectElement2 = document.getElementById('typ');
                let selectElement3 = document.getElementById('pays');

                let choix = selectElement.selectedIndex;
                let valeur = selectElement.options[choix].value;

                let choix2 = selectElement2.selectedIndex;
                let valeur2 = selectElement2.options[choix2].value;

                let choix3 = selectElement3.selectedIndex;
                let valeur3 = selectElement3.options[choix3].value;




                 if(valeur == 'indef'){
                     $('#wan0').hide().show('slow').html('<span style="color:red;">Vous n\'avez pas choisir un exportateur</span>')
                    return false;
                 }else if(valeur2== 'indef'){
                    $('#wan').hide().show('slow').html('<span style="color:red;">Vous n\'avez pas choisir un type</span>')
                    return false;
                 }else if(valeur3== 'indef'){
                    $('#wan2').hide().show('slow').html('<span style="color:red;">Vous n\'avez pas choisir un Pays</span>')
                    return false;
                 }else{
                    $('#wan0 #wan').hide().show('slow').html('')
                    return true;
                 }


            })


</script>
<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?>