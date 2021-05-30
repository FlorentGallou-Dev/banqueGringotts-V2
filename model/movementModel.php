<?php
    session_start();
    if (!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }

    require 'connexion.php';

    if (isset($_POST['accountId'])) {
        $query = $bdd->prepare(
            "SELECT account.id_acc, account.acc_balance FROM account WHERE account.acc_type = :id_account"
        );
        $query->execute([
            "id_account" => htmlspecialchars($_POST['accountId'])
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
    }

    $newBalance = $result["acc_balance"] + htmlspecialchars($_POST['amount']);

    $query = $bdd->prepare(
        "UPDATE account AS a, movement AS m
        LEFT JOIN account ON a.id_acc = m.id_acc
        SET a.acc_balance = :newBalance, 
        WHERE a.acc_type = :accountName
        INSERT INTO movement(mov_title, mov_amount, mov_type, id_acc)
        VALUES (:title,:amount, :movType, :accId);"
    );
    $query->execute([
        "accountName" => htmlspecialchars($_POST['accountId']),
        "newBalance" => $newBalance,
        "title" => "Dépot",
        "amount" => htmlspecialchars($_POST['amount']),
        "movType" => "D",
        "accId" => $result["id_acc"]

    ]);
?>