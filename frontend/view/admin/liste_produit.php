<?php $title = 'Phyto' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
<h5>Liste de vos produits enregistrer </h5>
<br><br>
<?php
   while($datas = $list -> fetch()){

 ?>
    <h5 class="alert alert-warning">
    <a disabled href="?action=del_list_produit&id=<?= $datas['id'] ?>" id="sp<?= $datas['id'] ?>" class="btn btn-danger" style="float:right;">supprimer</a>
        <?= $datas['nom'] ?>
        <br>
       
    </h5>

    <script>
        let but<?= $datas['id'] ?> = document.getElementById('sp<?= $datas['id'] ?>');
        but<?= $datas['id'] ?>.onclick = () => {
           let x = confirm('Vous voulez vraiment supprimer "<?= $datas['nom'] ?>" dans les peroduits ? \n \n  Si vous le faite, cela pourrait détruire les statistiques déjà existante');
            if(x != true){
                return false; 
            }

        }

    </script>
 <?php
   }
 ?> 

<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/a.php';
?>