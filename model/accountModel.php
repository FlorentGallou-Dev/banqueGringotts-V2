<?php
    function getAccounts(PDO $bdd, int $idCustomer) {
        $query = $bdd->prepare(
            "SELECT a.id_acc, a.acc_type, a.acc_number, a.acc_balance, m.mov_title, m.mov_amount, MAX(m.mov_date)
            FROM account AS a
            LEFT JOIN movement AS m
            ON a.id_acc = m.id_acc
            WHERE id_cust=:id_customer
            GROUP BY a.id_acc"
            );
        $query->execute([
            "id_customer" => $idCustomer
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getSingleAccount(PDO $bdd, int $idAccount) {
        $query = $bdd->prepare(
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

    function getOneAccountForMovement(PDO $bdd, int $idCustomer) {
        $query = $bdd->prepare(
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
?>