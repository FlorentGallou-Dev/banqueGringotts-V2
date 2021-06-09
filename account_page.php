<?php
    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }

    //connexion a la BDD
    require 'model/entity/database.php';
    $bdd = DataBase::getBdd();
    
    require "model/accountModel.php";

    $singleAccount = getSingleAccount($bdd, $_GET['account']);
    
require "view/accountPageView.php";