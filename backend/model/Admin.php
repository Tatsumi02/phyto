<?php
require_once 'Manager.php';

class Admin extends Manager
  {

        public function push_speculation($nom,$type){
            $db = $this -> dbConnect();
            $r = $db -> prepare('INSERT INTO speculations VALUES(0,:nom,:typ)');
            $r -> execute(array(
                'nom' => $nom,
                'typ' => $type,
                ));

            return $r;
        }

        public function push_acteur($nom,$prenom,$phone){
            $db = $this -> dbConnect();
            $r = $db -> prepare('INSERT INTO acteurs VALUES(0,:nom,:prenom,:phone)');
            $r -> execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'phone' =>$phone
                ));

            return $r;
        }

        public function takeSpeculation(){
            $db = $this -> dbConnect();
            $r = $db -> prepare('SELECT * FROM speculations ');
            $r -> execute();

            return $r;
        }

        public function pushProduct($nom,$speculation_id){
            $db = $this -> dbConnect();
            $r = $db -> prepare('INSERT INTO produits VALUES(0,:nom,:sc_id)');
            $r -> execute(array(
                'nom' => $nom,
                'sc_id' => $speculation_id,
                ));

            return $r;
        }

        public function findListProduit(){
            $db = $this -> dbConnect();
            $r = $db -> prepare('SELECT * FROM produits ');
            $r -> execute();

            return $r;
        }

        public function del_prod($id,$tab){
            $db = $this -> dbConnect();
            $r = $db -> prepare('DELETE FROM produits WHERE id = :id ');
            $r -> execute(array('id' => $id));

            return $r;
        }

        public function findListSpeculation(){
            $db = $this -> dbConnect();
            $r = $db -> prepare('SELECT * FROM speculations ');
            $r -> execute();

            return $r;
        }

        public function del_specu($id,$t){
            $db = $this -> dbConnect();
            $r = $db -> prepare('DELETE FROM speculations WHERE id = :id ');
            $r -> execute(array('id' => $id));

            return $r;
        }

        public function findListActeur(){
            $db = $this -> dbConnect();
            $r = $db -> prepare('SELECT * FROM acteurs ');
            $r -> execute();

            return $r;
        }

        public function del_acteur($id,$d){
            $db = $this -> dbConnect();
            $r = $db -> prepare('DELETE FROM acteurs WHERE id = :id ');
            $r -> execute(array('id' => $id));

            return $r;
        }

        


  }