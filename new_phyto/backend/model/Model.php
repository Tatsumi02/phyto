<?php
require_once 'Manager.php';

class Model extends Manager
  {

 public  function persist_form2($phone,$r1,$r2,$r3,$attente){
    $db = $this -> dbConnect();
    $r = $db -> prepare('INSERT INTO form2 VALUES(0,:phone,:r1,:r2,:r3,:attente,:lke)');
    $r -> execute(array(
          'phone' => $phone,
          'r1' => $r1,
          'r2' => $r2,
          'r3' => $r3,
          'attente' => $attente,
          'lke' => 'ras'
          
      ));

    return $r;
   }


    public function fineUser($pseudo,$password){
      $db = $this -> dbConnect();
      $r = $db -> prepare('SELECT * FROM admin WHERE pseudo=:pseudo AND password=:password');
      $r -> execute(array(
            'pseudo' => $pseudo,
            'password' => $password
            
        ));
  
      return $r;
    }

   
    // -----------------
    public function findDataAuth($pseudo,$password){
      $db = $this -> dbConnect();
      $r = $db -> prepare('SELECT * FROM user WHERE username=:pseudo AND password=:password');
      $r -> execute(array(
            'pseudo' => $pseudo,
            'password' => $password
            
        ));
  
      return $r;
    }

}