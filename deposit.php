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

    $accounts = getOneAccountForMovement($bdd, $_SESSION["customer"]["id_cust"]);

    require "view/depositView.php";