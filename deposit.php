<?php
    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }

    require 'model/connexion.php';
    require "model/accountModel.php";

    $accounts = getOneAccountForMovement($bdd, $_SESSION["customer"]["id_cust"]);

    require "view/depositView.php";