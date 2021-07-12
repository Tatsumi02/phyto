<?php $title = 'Bienvenue Dans cet Atelier de formation' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%;">
    <h2>Gestion des speculations
    <a href="?action=liste_speculation" class="btn btn-warning">Liste speculation</a>
    </h2>
    <br>
    <p>
    <?php
    if(isset($_GET['success'])){
    ?>
    <div class="alert alert-success" id="not">
        Speculation bien ajoute
    </div>
 <?php
  }
 ?>
        <form action="?action=save_speculation" method="post"  style="text-align:left;">
            <input type="text" required class="form-control" name="nom" placeholder="Nom speculation" />
            <br>
            <label for="type">type speculation</label>
            <select name="type" class="form-control" id="type">
                <option value="soutes">Soutes</option>
                <option value="cargaison">Cargaison</option>
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
<br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/a.php';
?>