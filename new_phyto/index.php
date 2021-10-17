<?php
session_start();
require_once 'backend/controller/controller.php';
require_once 'backend/controller/admin.php';
require_once 'backend/controller/user.php';



if(isset($_GET['action'])){

    $action = $_GET['action'];

    if($action == 'connecteur'){
        connecteur();
    }

    if($action == 'admin_panel'){
        admin_panel();
    }

    if($action == 'user_panel'){
        user_panel();
    }

    if($action == 'logout'){
       logout();
    }
    
    if($action == 'speculation'){
        speculation();
    }

    if($action == 'save_speculation'){
        save_speculation();
    }

    if($action == 'acteur'){
        acteur();
    }

    if($action == 'save_acteur'){
        save_acteur();
    }

    if($action == 'produit'){
        produit();
    }

    if($action == 'save_produit'){
        save_produit();
    }

    if($action == 'exportation'){
        exportation();
    }

    if($action == 'save_exportation'){
        save_exportation();
    }

    if($action == 'importation'){
        importation();
    }

    if($action == 'save_importation'){
        save_importation();
    }

    if($action == 'statistique'){
        statistique();
    }

    if($action == 'presentation_export_gargaison'){
        presentation_export_gargaison();
    }

    if($action == 'presentation_export_soute'){
        presentation_export_soute();
    }

    if($action == 'poid_export_anuelle'){
        poid_export_anuelle();
    }

    if($action == 'export_annu_view'){
        export_annu_view();
    }

    if($action == 'poid_import_anuelle'){
        poid_import_anuelle();
    }

    if($action == 'import_annu_view'){
        import_annu_view();
    }

    if($action == 'import_mensuelle_soute'){
        import_mensuelle_soute();
    }

    if($action == 'import_mensu_view'){
        import_mensu_view();
    }

    if($action == 'import_mensuelle_cargaisons'){
        import_mensuelle_cargaisons(); 
    
    }

    if($action == 'import_mensu_view2'){
        import_mensu_view2();
    }

    if($action == 'exportation_mensuelle_soute'){
        exportation_mensuelle_soute();
    }

    if($action == 'export_mensu_view'){
        export_mensu_view();
    }

    if($action == 'export_annuelle_cargaison'){
        export_annuelle_cargaison();
    }

    if($action == 'export_annu_carg_view'){
        export_annu_carg_view();
    }

    if($action == 'import_annu_Carg_view'){
        import_annu_Carg_view();
    }

    if($action == 'liste_produit'){
        liste_produit();
    }

    if($action == 'del_list_produit'){
        del_list_produit();
    }

    if($action == 'liste_speculation'){
        liste_speculation();
    }

    if($action == 'del_list_speculation'){
        del_list_speculation();
    }

    if($action == 'liste_acteur'){
        liste_acteur();
    }

    if($action == 'del_list_acteur'){
        del_list_acteur();
    }

    if($action == 'presentation_import_gargaison'){
        presentation_import_gargaison();
    }

    if($action == 'presentation_import_soute'){
        presentation_import_soute();
    }

    if($action == 'definir'){
        definir();
    }

    if($action == 'defini_exportation'){
        defini_exportation();
    }

    if($action == 'save_exportation_defini'){
        save_exportation_defini();
    }

    if($action == 'defini_importation'){
        defini_importation();
    }

    if($action == 'save_importation_defini'){
        save_importation_defini();
    }

    if($action == 'evolution_import'){
        evolution_import();
    }

    if($action == 'doc'){
        doc();
    }

    if($action == 'doc-installation'){
        doc_installation();
    }

    if($action == 'doc-def-transaction'){
        doc_def_transaction();
    }

    if($action == 'doc-stat'){
        doc_stat();
    }


}else{
    home();
}

/*

$date = "2006-06-17 10:00:00";

list($annee, $mois, $jour) = sscanf($date, "%d-%d-%d"); //%d pour récupérer des entiers mais on peut utiliser 
//%s pour récupérer comme des chaînes de caractères
echo $jour; //Pour afficher juste le jour

*/