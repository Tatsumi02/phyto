<?php $title = 'Phyto' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%;">
    <h2>Gestion des Acteurs  
        <a href="?action=liste_acteur" class="btn btn-warning">Liste Acteurs</a>
    </h2>
    <br>
    <p>
 <?php
    if(isset($_GET['success'])){
 ?>
    <div class="alert alert-success" id="not">
        Acteur bien ajoute
    </div>
 <?php
  }
 ?>

        <form action="?action=save_acteur" method="post"  style="text-align:left;">
            <input type="text" required class="form-control" name="nom" placeholder="Nom acteur" /><br>
            <input type="text"  class="form-control" name="prenom" placeholder="Prenom acteur" /> <br>
            <input type="number" required class="form-control" name="phone" placeholder="Phone acteur" /> <br>
            <input type="number" name="nc" class="form-control" placeholder="Numero de certification" id=""> <br>
            <button type="submit" class="btn btn-primary">Enregistré</button>
        </a>
        </form>
    </p>
<br><br><br>
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
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?>