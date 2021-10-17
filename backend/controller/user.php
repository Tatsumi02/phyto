<?php
    require_once 'backend/model/User.php';

    function user_panel(){
        if(!$_SESSION['id']){  
            header('location:?');
        }
    
        $active1 = 'active';
        $active2 = '';
        $active3 = '';
    
        require 'frontend/view/user/home.php';
    }

    function  exportation(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        // recuperons les acteurs
        $getter = new User();
        $acteurs = $getter->getActeur();
        $produit = $getter->getproduit();
        $pays = $getter->getPays();
    
        $active2 = 'active';

        require 'frontend/view/user/exportation.php';
    }

    function save_exportation(){
        $poid = htmlspecialchars($_POST['poid']);
        $exportateur_id = htmlspecialchars($_POST['exportateur_id']);
        $type = htmlspecialchars($_POST['type']);
        $produit = $_POST['produit'];
        $pays = htmlspecialchars($_POST['pays']);
        $annee = date('Y');
        $mois = date('m');
        $num_c = $_POST['num_c'];
        $date_export = 'indef';

        $produit_list = '';
        
        foreach($produit as $prod){
            $produit_list .= $prod.',';
        }
        
    
        
        $getter = new User();
        $pushEport = $getter -> pushExport($num_c,$poid,$exportateur_id,$type,$produit_list,$pays,$annee,$mois,$date_export);

        // echo 'exportation effectuer avec success';
        header('location:?action=exportation&success');

    }

    function importation(){
        if(!$_SESSION['id']){  
            header('location:?');
        }
    
        $active3 = 'active';

         // recuperons les acteurs
         $getter = new User();
         $acteurs = $getter->getActeur();
         $speculations = $getter->getSpeculation();
         $pays = $getter->getPays();
     
        require 'frontend/view/user/importation.php';
    }

    function save_importation(){
        $poid = htmlspecialchars($_POST['poid']);
        $exportateur_id = htmlspecialchars($_POST['exportateur_id']);
        $type = htmlspecialchars($_POST['type']);
        $produit = htmlspecialchars($_POST['produits']);
        $pays = htmlspecialchars($_POST['pays']);
        $annee = date('Y');
        $mois = date('m');
        
        $getter = new User();
        $pushEport = $getter -> pushImport($poid,$exportateur_id,$type,$produit,$pays,$annee,$mois);

        header('location:?action=importation&success');
    }


    function statistique(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        // recuperons les acteurs
        $getter = new User();
        $acteurs = $getter->getActeur();
        $produit = $getter->getproduit();
        $pays = $getter->getPays();
    
        $active4 = 'active';

        require 'frontend/view/user/statistique.php';
    }

    function presentation_export_gargaison(){
         
         $getter = new User();
         $export_carg = $getter->getExportCarg();
        
         $active4 = 'active';
 
         require 'frontend/view/user/presentation_export_gargaison.php';
    }

    function presentation_export_soute(){
        if(!$_SESSION['id']){  
            header('location:?');
        }


         $getter = new User();
         $export_soute = $getter->getExportSoute();
        
         $active4 = 'active';
 
         require 'frontend/view/user/presentation_export_soutes.php';
    }

    function poid_export_anuelle(){
        if(!$_SESSION['id']){  
            header('location:?');
        }


        $getter = new User();
         $ans = $getter->getExportAnuelle();
        //  creons un tableau qui doit contenir des annees
        $tab_an = array();
        $nb = 0;
       
        $ann = date('Y');
        $ann2 = $ann-1;
        $ann3 = $ann2-1;
        $ann4 = $ann3-1;

         $active4 = 'active';
        
         require 'frontend/view/user/poid_export_anuelle.php';
    }

    function export_annu_view(){

        if(!$_SESSION['id']){  
            header('location:?');
        }

        $annee = (int)$_GET['annee'];
        $active4 = 'active';

        $getter = new User();
        $export = $getter->getExportAnnuBy($annee);

        require 'frontend/view/user/export_annu_view.php';
    }

    function poid_import_anuelle(){
        if(!$_SESSION['id']){  
            header('location:?');
        }


        $getter = new User();
         $ans = $getter->getExportAnuelle();
        //  creons un tableau qui doit contenir des annees
        $tab_an = array();
        $nb = 0;
       
        $ann = date('Y');
        $ann2 = $ann-1;
        $ann3 = $ann2-1;
        $ann4 = $ann3-1;

         $active4 = 'active';
        
         require 'frontend/view/user/poid_import_anuelle.php';
    }

    function import_annu_view(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        $annee = (int)$_GET['annee'];
        $active4 = 'active';

        $getter = new User();
        $export = $getter->getImportAnnuBy($annee);

        require 'frontend/view/user/import_annu_view.php';
    }

    function import_mensuelle_soute(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        $active4 = 'active';

        require 'frontend/view/user/import_mensuelle_soute.php';
    }

    function import_mensu_view(){
        $mois = $_GET['mois'];
        $nom = htmlspecialchars($_GET['nom']);

        if(!$_SESSION['id']){  
            header('location:?');
        }

        $active4 = 'active';
        $getter = new User();

        $importsx = $getter->findImportMensu($mois,date('Y'));

        require 'frontend/view/user/import_mensu_view.php';

    }

    function import_mensuelle_cargaisons(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        $getter = new User();
        $ans = $getter->getExportAnuelle();
       //  creons un tableau qui doit contenir des annees
       $tab_an = array();
       $nb = 0;
      
       $ann = date('Y');
       $ann2 = $ann-1;
       $ann3 = $ann2-1;
       $ann4 = $ann3-1;

       $active4 = 'active';

        require 'frontend/view/user/import_mensuelle_cargaisons.php';
    }

    function import_mensu_view2(){
        $mois = $_GET['mois'];
        $nom = htmlspecialchars($_GET['nom']);

        if(!$_SESSION['id']){  
            header('location:?');
        }

        $active4 = 'active';
        $getter = new User();

        $importsx = $getter->findImportMensu2($mois,date('Y'));

        require 'frontend/view/user/import_mensu_view2.php';

    }

    function exportation_mensuelle_soute(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        $active4 = 'active';

        require 'frontend/view/user/exportation_mensuelle_soute.php';
    }

    function  export_mensu_view(){
        $mois = $_GET['mois'];
        $nom = htmlspecialchars($_GET['nom']);

        if(!$_SESSION['id']){  
            header('location:?');
        }

        $active4 = 'active';
        $getter = new User();

        $importsx = $getter->findExportMensu($mois,date('Y'));

        require 'frontend/view/user/export_mensu_view.php';

    }

    function export_annuelle_cargaison(){
        if(!$_SESSION['id']){  
            header('location:?');
        }


        $getter = new User();
         $ans = $getter->getExportAnuelle();
        //  creons un tableau qui doit contenir des annees
        $tab_an = array();
        $nb = 0;
       
        $ann = date('Y');
        $ann2 = $ann-1;
        $ann3 = $ann2-1;
        $ann4 = $ann3-1;

         $active4 = 'active';
        
         require 'frontend/view/user/export_annuelle_cargaison.php';
    }

    function export_annu_carg_view(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        $annee = (int)$_GET['annee'];
        $active4 = 'active';

        $getter = new User();
        $export = $getter->getExportAnnuCargBy($annee);

        require 'frontend/view/user/export_annu_carg_view.php';
    }

     function import_annu_Carg_view(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        $annee = (int)$_GET['annee'];
        $active4 = 'active';

        $getter = new User();
        $export = $getter->getImportAnnuCargBy($annee);

        require 'frontend/view/user/import_annu_carg_view.php';
    }

    function presentation_import_gargaison(){
        $getter = new User();
        $export_carg = $getter->getImportCarg();
       
        $active4 = 'active';

        require 'frontend/view/user/presentation_import_gargaison.php';
    }

    function presentation_import_soute(){
        if(!$_SESSION['id']){  
            header('location:?');
        }


         $getter = new User();
         $export_soute = $getter->getImportSoute();
        
         $active4 = 'active';
 
         require 'frontend/view/user/presentation_import_soutes.php';
    }

    function definir(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

       
        require 'frontend/view/user/definir.php';
    }

    function defini_exportation(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        // recuperons les acteurs
        $getter = new User();
        $acteurs = $getter->getActeur();
        $produit = $getter->getproduit();
        $pays = $getter->getPays();
    

        $active2 = 'active';

        require 'frontend/view/user/defini_exportation.php';
    }

    function  save_exportation_defini(){
        $poid = htmlspecialchars($_POST['poid']);
        $exportateur_id = htmlspecialchars($_POST['exportateur_id']);
        $type = htmlspecialchars($_POST['type']);
        $produit = htmlspecialchars($_POST['produits']);
        $pays = htmlspecialchars($_POST['pays']);
        $num_c = $_POST['num_c'];
        
        $date_export = htmlspecialchars($_POST['date_export']);

        $tab_date_export = explode("-",$date_export);

        $annee = $tab_date_export[0];
        $mois = $tab_date_export[1];
        
       
        $getter = new User();
        $pushEport = $getter -> pushExport($num_c,$poid,$exportateur_id,$type,$produit,$pays,$annee,$mois,$date_export);

        // echo 'exportation effectuer avec success';
        header('location:?action=defini_exportation&success');

    }

    function defini_importation(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        // recuperons les acteurs
        $getter = new User();
        $acteurs = $getter->getActeur();
        $produit = $getter->getproduit();
        $pays = $getter->getPays();
    

        $active3 = 'active';

        require 'frontend/view/user/defini_importation.php';
    }

    function save_importation_defini(){
        $poid = htmlspecialchars($_POST['poid']);
        $exportateur_id = htmlspecialchars($_POST['exportateur_id']);
        $type = htmlspecialchars($_POST['type']);
        $produit = htmlspecialchars($_POST['produits']);
        $pays = htmlspecialchars($_POST['pays']);
        
        $date_export = htmlspecialchars($_POST['date_export']);

        $tab_date_export = explode("-",$date_export);

        $annee = $tab_date_export[0];
        $mois = $tab_date_export[1];
        
       
        $getter = new User();
        $pushEport = $getter -> pushImport($poid,$exportateur_id,$type,$produit,$pays,$annee,$mois,$date_export);

        // echo 'exportation effectuer avec success';
        header('location:?action=defini_importation&success');

    }

    function evolution_import(){

        if(!$_SESSION['id']){  
            header('location:?');
        }

        $getter = new User();
        $importation = $getter -> getImportation();
        $tout_produit = $getter -> getproduit();

        require 'frontend/view/user/evolution_import.php';
    }

    function export_mensuelle_cargaisons(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        $active4 = 'active';

        require 'frontend/view/user/export_mensuelle_soute.php';
    }

    function export_mensu_carg_view(){
        $mois = $_GET['mois'];
        $nom = htmlspecialchars($_GET['nom']);

        if(!$_SESSION['id']){  
            header('location:?');
        }

        $active4 = 'active';
        $getter = new User();

        $importsx = $getter->findExportMensuCarg($mois,date('Y'));

        require 'frontend/view/user/export_mensu_carg_view.php';
    }

    function import_annuelle_soute() {
        if(!$_SESSION['id']){  
            header('location:?');
        }


        $getter = new User();
         $ans = $getter->getExportAnuelle();
        //  creons un tableau qui doit contenir des annees
        $tab_an = array();
        $nb = 0;
       
        $ann = date('Y');
        $ann2 = $ann-1;
        $ann3 = $ann2-1;
        $ann4 = $ann3-1;

         $active4 = 'active';
        
         require 'frontend/view/user/import_annuelle_soute.php';
    }

    function import_annu_soute_view(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        $annee = (int)$_GET['annee'];
        $active4 = 'active';

        $getter = new User();
        $export = $getter->getImportAnnuSouteBy($annee);

        require 'frontend/view/user/import_annu_soute_view.php';
    }

    function add_actor(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

       require 'frontend/view/user/add_actor.php';
    }

    function start_produits(){

        require 'frontend/view/user/stat_product.php';
    }

    function stat_prod_import(){
        
        require 'frontend/view/user/stat_prod_import.php';
    }

    function list_product_export(){ 

        if(!$_SESSION['id']){  
            header('location:?');
        }

        
        $active4 = 'active';

        $getter = new User();
        $product = $_POST['product'];
        $importsx = $getter->getProduitByName($product);

        require 'frontend/view/user/search_prod_import.php';
    }

    function notification_intercep(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        $is = 0;

        if(isset($_GET['succ'])){
          $is = 1;
        }

        $getter = new User();
        $acteurs = $getter->getActeur(); 
        $pays = $getter->getPays();

        require 'frontend/view/user/notification_intercep.php';
    }

    function save_certificat(){
        $date = $_POST['date'];
        $num_notif = $_POST['num_notif'];
        $nature_produit = $_POST['nature_produit'];
        $quantite_intercepter = $_POST['quantite_intercepter'];
        $quantite_date = $_POST['quantite_date'];
        $exportateur = $_POST['exportateur'];
        $mesure = $_POST['mesure'];
        $num_certi_phyto = $_POST['num_certi_phyto'];
        $modif = $_POST['motif'];
        $pays = $_POST['pays'];


        $getter = new User();
        $getter->setCertificat($date,$pays,$num_notif,$modif,$nature_produit,$quantite_intercepter,$quantite_date,$exportateur,$mesure,$num_certi_phyto);
        
        header('location:?action=notification_intercep&succ');

    }

    function notif_inter(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        $getter = new User();
        $notifis = $getter->getNotification();

        require 'frontend/view/user/notif_inter.php';
    }

    function notif_inter2(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        $is = 0;

        if(isset($_GET['succ'])){
          $is = 1;
        }

        $getter = new User();
        $acteurs = $getter->getActeur(); 
        $pays = $getter->getPays();

        require 'frontend/view/user/notif_inter2.php';
    }

    function save_certificat2(){
        $date = $_POST['date'];
        $num_notif = $_POST['num_notif'];
        $nature_produit = $_POST['nature_produit'];
        $quantite_intercepter = $_POST['quantite_intercepter'];
        $quantite_date = $_POST['quantite_date'];
        $exportateur = $_POST['exportateur'];
        $mesure = $_POST['mesure'];
        $num_certi_phyto = $_POST['num_certi_phyto'];
        $modif = $_POST['motif'];
        $pays = $_POST['pays'];


        $getter = new User();
        $getter->setCertificat2($date,$pays,$num_notif,$modif,$nature_produit,$quantite_intercepter,$quantite_date,$exportateur,$mesure,$num_certi_phyto);
        
        header('location:?action=notif_inter2&succ');

    }

    function notif_interImp(){
        if(!$_SESSION['id']){  
            header('location:?');
        }

        $getter = new User();
        $notifis = $getter->getNotification2();

        require 'frontend/view/user/notif_interAffichage.php';
    }

    