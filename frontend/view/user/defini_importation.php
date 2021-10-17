<?php $title = 'Phyto' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
<h2>Effectuer une importation Défini <span class="glyphicon glyphicon-time"></span></h2>
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
        <form action="?action=save_importation_defini" method="post"  style="text-align:left;">
            <input type="number" required class="form-control" name="poid" placeholder="Poid en Kg" /><br>
           
           <label for="acteur">importateur</label>
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

                <label for="typ">Type</label>
                <select name="type" id="typ" class="form-control">
                    <option value="indef">-------</option>
                    <option value="Soutes">Bagage a Soutes</option>
                    <option value="Cargaisons">Cargaisons</option>
                </select>

            <label for="produit">Produit</label>
            <select name="produits" id="produit" class="form-control">
                    <option value="indef">--------</option>
                   <?php 
                        while($prod = $produit -> fetch()){
                    ?>
                        <option value="<?= $prod['id'] ?>">
                            <?= $prod['nom']; ?>
                        </option>
                    <?php
                        }
                   ?>
            </select>

            <label for="pays">Pays de destination</label>
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
            <label for="date_import">Date importation</label>
            <input type="date" class="form-control" id="date_import" name="date_export" />
            <br><br>
            <button type="submit" class="btn btn-primary">Effectuer l'importation</button>
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
</script>
<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?>