<?php $title = 'Notification d\'interception' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2>
    <a href="?action=notification_intercep" class="btn btn-primary">Notifications pour les exportations</a>
    <br><br>    
    Fiche de suivi des notifications d'interceptions pour les importations</h2>
   
<hr>
<?php 
                if(isset($_GET['succ'])){
            ?>
                <div id="not" class="alert alert-success">
                    success...
                </div>
            <?php
                }
           ?>
    <form action="?action=save_certificat2" method="post">
        <label for="d">Date</label>
        <input required type="date" class="form-control" name="date" id="d">
        <br>
        <input required type="number" name="num_notif" id="" class="form-control" placeholder="Numero de notification" />
        <br>
        <input type="text" name="motif" class="form-control" placeholder="Motif de notification">
        <br>
        <input required type="text" name="nature_produit" class="form-control" placeholder="Nature du produit intercepter" id="" />
        <br>
        <input required type="text" name="quantite_intercepter" class="form-control" placeholder="quantité intercepter" id="" />
        <br>
        <input required type="text" name="quantite_date" class="form-control" placeholder="Quantite importée et date d'importation">
        <br>
        <label for="e">Importateur</label>
        <select required name="exportateur" id="" class="form-control">
            <option value="indefini">----</option>
            <?php 
                while($datas = $acteurs->fetch()){
            ?>
                <option value="<?= $datas['nom'] ?>"><?= $datas['nom'] ?></option>
            <?php
                }
            ?>
        </select>
        <br>
        <input required type="text" name="mesure" class="form-control" placeholder="Mesures prescites">
        <br>
        <label for="pays">Pays</label>
        <select name="pays" id="pays" class="form-control">
            <option value="indefini">----</option>
            <?php 
                while($dat = $pays->fetch()){
            ?>
                <option value="<?= $dat['nom_fr_fr'] ?>"><?= $dat['nom_fr_fr'] ?></option>
            <?php
                }
            ?>
        </select>
        <br>
        <input required type="nunber" name="num_certi_phyto" class="form-control" placeholder="Numeros certificat phytosanitaire">
        <br>
        <button type="submit" class="btn btn-primary btn-lg">Enregistrement</button>

    </form>
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