<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=banque_php', 'root', '');
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
?>