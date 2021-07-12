<?php
 /**
  * cette classe servira de connection pour a la base de donnee
  */
 class Manager
 {
 	protected function dbConnect(){

 	  try{

 	            $bdd = new PDO('mysql:host=localhost;dbname=phyto', 'root', '');

 	   }catch(Exeption $e){ //si il ya eu une erreur
            echo 'erreur :' . $e -> getMessage();
       }

           return $bdd; 
 	}

 }