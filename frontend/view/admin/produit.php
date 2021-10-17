<?php $title = 'Phyto' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%;">
    <h2>Gestion des Produits
       <a href="?action=liste_produit" class="btn btn-warning">Liste produit</a>
    </h2>
    <br>
    <p>
    <?php
    if(isset($_GET['success'])){
    ?>
    <div class="alert alert-success" id="not">
        Produit bien ajoute  
    </div>
 <?php
  }
 ?>
        <form action="?action=save_produit" method="post"  style="text-align:left;">
            <input type="text" required class="form-control" name="nom" placeholder="Nom produit" /><br>

                <label for="sp">Speculation</label>
                <select name="speculation_id" class="form-control" id="sp">
                    <?php
                        while($datas = $dat->fetch()){
                    ?>
                        <option value="<?= $datas['id'] ?>"> 
                            <?= $datas['nom'] ?>
                         </option>
                    <?php
                        }
                    ?>
                </select>
                <br>
            <button type="submit" class="btn btn-primary">Enregistré</button>
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
    require 'frontend/template/tmp/a.php';
?>