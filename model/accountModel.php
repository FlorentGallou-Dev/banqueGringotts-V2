<?php

function getAccounts(PDO $bdd, string $idCustomer) {
    $query = $bdd->prepare(
        "SELECT a.id_acc, a.acc_type, a.acc_number, a.acc_balance, m.mov_title, m.mov_amount, max(m.mov_date)
        FROM account AS a
        LEFT JOIN movement AS m ON a.id_acc = m.id_acc
        WHERE id_cust=1
        GROUP BY a.id_acc"
        );
    $query->execute([
        "id_customer" => $idCustomer
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>