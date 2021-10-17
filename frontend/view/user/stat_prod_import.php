<?php $title = 'Phyto' ?>

<?php ob_start() ?>
<br><br>
<div class="container" style="background:white; padding:2%; text-align:left;">
    <h2>Statistique sur les produits Exporté  <span class="glyphicon glyphicon-time"></span></h2>
    <br>
    <div class="alert alert-warning">
            ...
    </div>

   <form action="?action=list-product-export" method="post">
       <input type="seach" name="product" class="form-control" style="display:inline;" placeholder="entre le produit" />
       <br><br>
       <button type="submit" class="btn btn-primary">search</button>
   </form>
<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/u.php';
?>