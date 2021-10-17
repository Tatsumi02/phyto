<?php
require_once 'backend/model/Admin.php';

 function admin_panel(){
    if(!$_SESSION['id']){  
        header('location:?');
    }

    $active1 = 'active';
    $active2 = '';
    $active3 = '';

    require 'frontend/view/admin/home.php';
}

function speculation(){

    if(!$_SESSION['id']){  
        header('location:?');
    }

    $active1 = '';
    $active2 = 'active';
    $active3 = '';

    require 'frontend/view/admin/speculation.php';

}

function save_speculation(){
    $nom = htmlspecialchars($_POST['nom']);
    $type = htmlspecialchars($_POST['type']);

    $getter = new Admin();
    $push = $getter->push_speculation($nom,$type);

    header('location:?action=speculation&success');

}

function acteur(){
    if(!$_SESSION['id']){  
        header('location:?');
    }

    $active3 = 'active';

    require 'frontend/view/admin/acteur.php';
}

function save_acteur(){
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $phone = htmlspecialchars($_POST['phone']);

    $getter = new Admin();
    $push = $getter->push_acteur($nom,$prenom,$phone);

    header('location:?action=acteur&success');

}

function produit(){

    if(!$_SESSION['id']){  
        header('location:?');
    }

    $active4 = 'active';

    $getter = new Admin();
    $dat = $getter->takeSpeculation();

    require 'frontend/view/admin/produit.php';
}

function save_produit(){
    $nom = htmlspecialchars($_POST['nom']);
    $speculation_id = htmlspecialchars($_POST['speculation_id']);

    $getter = new Admin();
    $push = $getter->pushProduct($nom,$speculation_id);

    header('location:?action=produit&success');

}

function liste_produit(){
    if(!$_SESSION['id']){  
        header('location:?');
    }

    $getter = new Admin();
    $list = $getter->findListProduit();

    $active4 = 'active';

    require 'frontend/view/admin/liste_produit.php';
}

function del_list_produit(){
    $id = $_GET['id'];

    $getter = new Admin();
    $del = $getter->del_prod($id,'produits');

    header('location:?action=liste_produit');

}

function liste_speculation(){

    if(!$_SESSION['id']){ 
        header('location:?');
    }

    $getter = new Admin();
    $list = $getter->findListSpeculation();

    $active2 = 'active';

    require 'frontend/view/admin/list_speculation.php';
}

function del_list_speculation(){
    $id = $_GET['id'];

    $getter = new Admin();
    $del = $getter->del_specu($id,'produits');

    header('location:?action=liste_speculation');

}

function liste_acteur(){
    if(!$_SESSION['id']){ 
        header('location:?');
    }

    $getter = new Admin();
    $list = $getter->findListActeur();

    $active3 = 'active';

    require 'frontend/view/admin/list_acteur.php';
}

function del_list_acteur(){
    $id = $_GET['id'];

    $getter = new Admin();
    $del = $getter->del_acteur($id,'produits');

    header('location:?action=liste_acteur');

}