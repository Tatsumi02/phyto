<?php $title = 'Phyto' ?>
<style>
    body{
        background:green;
    }
</style>
<?php ob_start() ?>
    <h1 style="color:white;">Utilisation de l'appli</h1>
    <center>
        <div style="background:white; padding:2%; color:green; text-align:left;">
           <h2> L’application fonctionne tel que définir ci-dessous </h2>
           <br>
           <p>
           Avant de commencer avec l’enregistrement des transactions, il est important de commencer a effectuer les enregistrements des données tel que : les spéculations, les produits et les acteurs depuis le compte root sans quoi les opérations d’enregistrement seront erroné.
        
          </p>
<br><br>
          <p>
          Pour commencer, il faut regarder dans la barre de navigation du haut où vous verrez les options de navigation :
          <br> 
            <img src="frontend\public\doc\Capture3.PNG" alt="" style="width:100%;">
          <br><br>
          <b>Accueil : </b>  Ici c’est pour venir sur la page de démarrage
          <br>
          <b>Exportation : </b>  Ici c’est pour effectuer les exportations instantanées 
          <br>
          <b>Importation : </b>  Ici c’est pour effectuer les importations instantanées 
          <br>
          <b>Statistique : </b>  Ici c’est pour voir le rapport des transactions effectuer 
<hr>
          <h3>Accueil</h3>
          <p>
          Sur la page de démarrage, nous avons juste l’interface ci-dessous 
          <img src="frontend\public\doc\Capture2.PNG" alt="" style="width:100%;">
          </p>

          <hr>
          <h3>Exportation</h3>
          <p>
          Sur la page des exportations, nous avons un formulaire à remplir pour pouvoir fournir les informations sur l’exportation. Tous les champs sont obligatoires  
          <img src="frontend\public\doc\Capture4.PNG" alt="" style="width:100%;">
          </p>

          <hr>
          <h3>Importation</h3>
          <p>
          Sur la page des importations, nous avons un formulaire à remplir pour pouvoir fournir les informations sur l’importation. Tous les champs sont obligatoires  
          <img src="frontend\public\doc\Capture5.PNG" alt="" style="width:100%;">
          </p>

          <hr>
          <h3>Statistique</h3>
          <p>
          Sur cette interface, vous-avez une liste d’options qui vous permet d’avoir un rapport sur vos transactions  
          <img src="frontend\public\doc\Capture6.PNG" alt="" style="width:100%;">
          <a href="?action=doc-stat" class="btn btn-success btn-lg">Plus de detail</a>  
        </p>

          <hr>
          <h2>Définir une transaction</h2>
          <p>
          Il peut arriver des moments où vous vouliez effectuer une transaction à une date spécifique. En ce moment vous devez plutôt cliquer sur le bouton « Définir » pour effectuer cette transaction 
          </p>
          <img src="frontend\public\doc\Capture8.PNG" alt="" style="width:400px; height:200px;">
          <br>
          <a href="?action=doc-def-transaction" class="btn btn-success btn-lg">Plus de detail</a>

          <hr>
          <h2>Deconnexion</h2>
          <p>
            Pour vous déconnecter de vos sessions, appuyer sur le bouton rouge de déconnexion  
          </p>
          <img src="frontend\public\doc\Capture14.PNG" alt="" style="width:400px; height:200px;">
         

          </p>
        </div>
    </center>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/doc.php';
?>