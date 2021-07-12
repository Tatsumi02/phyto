<?php $title = 'Bienvenue Dans cet Atelier de formation' ?>

<?php ob_start() ?>
<br><br>
<div class="container">
<div class="first-one-inner">
				     <h3 class="tittle">connexion </h3>
                     <br><br>
					<form method="post" action="?action=connecteur" style="text-align:left;">
                        <br><br> 

						<?php 
							if(isset($_GET['err'])){
						?>

						<div class="alert alert-danger">
							mauvaise connexion
						</div>

						<?php
							}
						?>

                            <input type="text" required class="form-control" name="pseudo" placeholder="Pseudo" />
                            <br><br>
                            <input type="password" required class="form-control" name="password" placeholder="password" />
                            <br><br>
                            <input type="submit" class="btn btn-success" value="Connexion" />
                        <br><br><br><br>
					</form>
				   </div>
				   <a href="#" class="hvr-bounce-to-bottom">PLus Haut</a>
	</div>
	</div>
<br><br><br>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/h.php';
?>