<?php
    function getUserByEmail(PDO $bdd, string $email) {
        $query = $bdd->prepare("SELECT * FROM customer WHERE cust_email=:email");
        $query->execute([
            "email" => $email
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
?>