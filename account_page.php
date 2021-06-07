<?php
    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }

    require 'model/connexion.php';
    require "model/accountModel.php";

    $singleAccount = getSingleAccount($bdd, $_GET['account']);
    
require "view/accountPageView.php";