<?php

require_once 'backend/model/Model.php';

function home(){
    $active1 = 'active';
    $active2 = '';
    $active3 = '';


    require 'frontend/view/home.php';
}

function connecteur(){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);

    $getter = new Model();
    $datas = $getter->findDataAuth($pseudo,$password);

    
        $role = '';

        while($dats = $datas->fetch()){
            $_SESSION['id'] = $dats['id'];
            $role = $dats['role'];
        }

       if($role == 'admin'){
           header('location:?action=admin_panel');
           
       }else if($role == 'user'){

           header('location:?action=user_panel');

       }else{

       header('location:?err');
       }
    
    }


    function logout(){
        session_destroy();
        header('location:?');
    }

    function doc(){
        
        require 'frontend/view/doc/home.php';
    }

    function doc_installation(){

        require 'frontend/view/doc/installation.php';
    }

    function  doc_def_transaction(){

        require 'frontend/view/doc/doc_def_transaction.php';
    }

    function doc_stat(){

        require 'frontend/view/doc/doc_stat.php';
    }
       