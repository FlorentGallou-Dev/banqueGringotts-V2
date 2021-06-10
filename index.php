<?php
    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }

    require "model/entity/customer.php";   
    require "model/accountModel.php";

    $accountModelInstance = new AccountModel;
    $accounts = $accountModelInstance->getAccounts($_SESSION["customer"]["id_cust"]);
    
require "view/indexView.php";