<?php
    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }
    //connexion a la BDD
    require 'model/connexion.php';
    require "model/accountModel.php";

    $accounts = getAccounts($bdd, $_SESSION["customer"]["id_cust"]);
    
require "view/indexView.php";