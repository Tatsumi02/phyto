<?php
require_once 'Manager.php';

class User extends Manager
  {

    public function getActeur(){
       
            $db = $this -> dbConnect();
            $r = $db -> prepare('SELECT * FROM acteurs ORDER BY nom ASC');
            $r -> execute();
        
            return $r;
      
    }

    public function getActeurBy($id){
       
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM acteurs WHERE id=? ORDER BY nom ASC');
        $r -> execute(array($id));
    
        return $r;
  
}


    public function getproduit(){
        $db = $this -> dbConnect();
            $r = $db -> prepare('SELECT * FROM produits ORDER BY nom ASC');
            $r -> execute();
        
            return $r;
    }

    public function getPays(){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM pays ORDER BY nom_fr_fr ASC');
        $r -> execute();
    
        return $r;
    }

    public function pushExport($poid,$exportateur_id,$type,$produit,$pays,$annee,$mois,$date_export){
        $db = $this -> dbConnect();
        $r = $db -> prepare('INSERT INTO exportations VALUES(0,:exportateur_id,:typ,NOW(),:produit_id,:pays,:poid,:annee,:mois,:date_export)');
        $r -> execute(array(
            'exportateur_id' => $exportateur_id,
            'typ' => $type,
            'produit_id' =>$produit,
            'pays' => $pays,
            'poid' => $poid,
            'annee' => $annee,
            'mois' => $mois,
            'date_export' => $date_export
            ));

        return $r;
    }

    public function pushImport($poid,$exportateur_id,$type,$produit,$pays,$annee,$mois){
        $db = $this -> dbConnect();
        $r = $db -> prepare('INSERT INTO importations VALUES(0,:exportateur_id,:typ,NOW(),:produit_id,:pays,:poid,:annee,:mois,:di)');
        $r -> execute(array(
            'exportateur_id' => $exportateur_id,
            'typ' => $type,
            'produit_id' =>$produit,
            'pays' => $pays,
            'poid' => $poid,
            'annee' => $annee,
            'mois' => $mois,
            'di' => 'indef'
            ));

        return $r;
    }

    public function getExportCarg(){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM exportations WHERE type=:carg ORDER BY date_export DESC');
        $r -> execute(array('carg'=>'Cargaisons'));
    
        return $r;
    }

    public function getExportSoute(){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM exportations WHERE type=:carg ORDER BY date_export DESC');
        $r -> execute(array('carg'=>'Soutes'));
    
        return $r;
    }

    public function getExportBy($id){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM acteurs WHERE id=:carg ORDER BY id ASC');
        $r -> execute(array('carg'=>$id));
    
        return $r;
    }

    public function getProduitBy($id){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM produits WHERE id=:carg ORDER BY id ASC');
        $r -> execute(array('carg'=>$id));
    
        return $r;
    }

    public function getPaysBy($id){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM pays WHERE id=:carg ORDER BY id ASC');
        $r -> execute(array('carg'=>$id));
    
        return $r;
    }

    public function getExportAnuelle(){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM exportations ');
        $r -> execute();
    
        return $r;
    }

    public function getExportAnnuBy($annee){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM exportations WHERE annee=:ann ');
        $r -> execute(array('ann'=>$annee));
    
        return $r;
    }

    public function getImportAnnuBy($annee){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM importations WHERE annee=:ann ');
        $r -> execute(array('ann'=>$annee));
    
        return $r;
    }

    public function getSpeculationBy($speculation){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM speculations WHERE id=:ann ORDER BY nom ASC ');
        $r -> execute(array('ann'=>$speculation));
    
        return $r;
    }

    public function getSpeculation(){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM speculations  ORDER BY nom ASC ');
        $r -> execute();
    
        return $r;
    }


    public function findImportMensu($mois,$da){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM importations WHERE mois=:ann AND type=:ty AND annee=:an ');
        $r -> execute(array('ann'=>$mois,'ty'=>'Soutes','an' => $da));
    
        return $r;
    }

    public function findExportMensu($mois,$da){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM exportations WHERE mois=:ann AND type=:ty AND annee=:an ');
        $r -> execute(array('ann'=>$mois,'ty'=>'Soutes','an' => $da));
    
        return $r;
    }

    public function findImportMensu2($mois,$da){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM importations WHERE mois=:ann AND type=:ty AND annee=:an ');
        $r -> execute(array('ann'=>$mois,'ty'=>'Cargaisons','an' => $da));
    
        return $r;
    }

    public function getExportAnnuCargBy($annee){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM exportations WHERE annee=:ann AND type=:typ ');
        $r -> execute(array('ann'=>$annee,'typ' => 'Cargaisons'));
    
        return $r;
    }

    public function getImportAnnuCargBy($annee){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM importations WHERE annee=:ann AND type=:typ ');
        $r -> execute(array('ann'=>$annee,'typ' => 'Cargaisons'));
    
        return $r;
    }

    public function getImportCarg(){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM importations WHERE type=:carg');
        $r -> execute(array('carg'=>'Cargaisons'));
    
        return $r;
    }

    public function getImportSoute(){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM importations WHERE type=:carg ORDER BY date_import DESC');
        $r -> execute(array('carg'=>'Soutes'));
    
        return $r;
    }

    public function getImportation(){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM importations');
        $r -> execute();
    
        return $r;
    }

    public function findImportByMont($mois){
        $db = $this -> dbConnect();
        $r = $db -> prepare('SELECT * FROM exportations WHERE mois=:m');
        $r -> execute(array('m'=>$mois));
    
        return $r;
    }



  }