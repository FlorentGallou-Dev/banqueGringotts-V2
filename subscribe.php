<?php
    //connexion a la BDD
    require 'model/entity/database.php';
    $bdd = DataBase::getBdd();

    require "model/accountModel.php";

    require "view/subscribeView.php";