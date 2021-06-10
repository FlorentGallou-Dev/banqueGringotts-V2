<?php
/*
    ACCOUNT MODEL CLASS - Used to request BDD
*/

require 'entity/database.php';

class AccountModel {

    private PDO $bdd;

    public function getAccounts(int $idCustomer) {
        $query = $this->bdd->prepare(
            "SELECT a.id_acc, a.acc_type, a.acc_number, a.acc_balance, m.mov_title, m.mov_amount, m.mov_date
            FROM account AS a
            LEFT JOIN (
                SELECT mov1.* FROM movement AS mov1
                LEFT JOIN movement AS mov2
                ON mov1.id_acc = mov2.id_acc
                AND mov1.id_move < mov2.id_move
                WHERE mov2.id_move IS NULL
            ) AS m
            ON a.id_acc = m.id_acc
            WHERE id_cust=:id_customer"
            );
        $query->execute([
            "id_customer" => $idCustomer
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getSingleAccount(int $idAccount) {
        $query = $this->bdd->prepare(
            "SELECT a.id_acc, a.acc_type, a.acc_number, a.acc_creation_date, a.acc_balance, m.mov_title, m.mov_amount, m.mov_date
            FROM account AS a
            LEFT JOIN movement AS m
            ON a.id_acc = m.id_acc
            WHERE a.id_acc=:id_account"
            );
        $query->execute([
            "id_account" => $idAccount
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getOneAccountForMovement(int $idCustomer) {
        $query = $this->bdd->prepare(
            "SELECT id_acc, acc_type, acc_balance
            FROM account
            WHERE id_cust=:id_customer"
        );
    $query->execute([
        "id_customer" => $idCustomer
    ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //Methode de creation d'un nouveau client
    public function createCustomer():bool {
        $query = $this->bdd->prepare(
            "INSERT INTO cat(name, age, sexe, color)
            VALUES(:name, :age, :sexe, :color)"
            );
        $result = $query->execute([
        "name" => $cat->getName(),
        "age" => $cat->getAge(),
        "sexe" => $cat->getSexe(),
        "color" => $cat->getColor()
        ]);
        return $result;
    }

    function __construct() {
        $this->bdd = DataBase::getBdd();
    }
}