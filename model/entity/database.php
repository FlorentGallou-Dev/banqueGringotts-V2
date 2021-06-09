<?php

    class DataBase {
        const HOST = 'localhost';
        const NAME = 'banque_php';
        const LOGIN = 'root';
        const PASSWORD = '';

        static public function getBdd():PDO {
            try {
                return new PDO('mysql:host='.self::HOST.';dbname='.self::NAME , self::LOGIN , self::PASSWORD);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
    }