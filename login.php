<?php
   require 'model/connexion.php';
   require 'model/customerModel.php';

    // Si les champ email et mot de passe ont été remplis
    if(isset($_POST["cust_email"]) && isset($_POST["cust_password"])) {
        $customer = getUserByEmail($bdd, $_POST["cust_email"]);
        //Verifions que la base user renvoie bien un utilisateur
        if($customer) {
            // On vérifie qu'ils correspondent aux information du tableau
            if(password_verify($_POST["cust_password"], $customer["cust_password"])) {
                // On démarre une session et on stocke l'utilisateur dedans avant de l'envoyer sur index
                session_start();
                $_SESSION["customer"] = $customer;
                header("Location:index.php");
                exit;
            }
        }
        $error_message = "Identifiants invalides";
    }

    require "view/loginView.php";