<?php
    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }
    //connexion a la BDD
    require 'model/connexion.php';
    require "model/accountModel.php";
    $accounts = getAccounts($bdd, $_SESSION["customer"]["id_cust"]);
    var_dump($accounts);
    include("layout/startPage.php");
?>
        <link rel="stylesheet" href="public/css/index.css">
    </head>
    <body>
    <?php
        include("layout/header.php");
        include("layout/nav.php");
    ?>

    <main id="main" class="container my-5">
        <div class="row">
            <h1 class="color-sombre col-12 mb-5">Vos comptes bancaires</h1>
            <section class="container col-12 row mx-auto" id="accountsContainer">
                <?php foreach($accounts as $account): ?>
                    <?php $regexPatternLink = '/\s/'; ?>
                    <div class='col-12 col-lg-4 my-3 mx-auto'>
                        <div class='card mx-1'>
                            <div class='card-body'>
                                <h5 class='card-title'><?php echo $account["acc_type"]; ?></h5>
                                <p class='card-text'>N° <?php echo $account["acc_number"]; ?></p>
                            </div>
                            <ul class='list-group list-group-flush'>
                                <li class='list-group-item owner'> Propriétaire : <strong><?php echo $_SESSION["customer"]['cust_last_name'];?> <?php echo $_SESSION["customer"]['cust_first_name']; ?></strong></li>
                                <li class='list-group-item balance'> Solde : <?php echo number_format($account["acc_balance"], 0, ',', ' '); ?> Gallons </li>
                                <li class='list-group-item balance'> Dernière opération : <br/>  => - <?php echo $account["mov_title"]; ?> : <?php echo number_format($account["mov_amount"], 0, null, ' '); ?> G</li>
                            </ul>
                            <div class='card-body text-center'>
                                <a href='account_page.php?account=<?php echo $account["id_acc"]; ?>' class='btn btn-gold'>Consulter</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </section>
        </div>
    </main>

    <?php
        include("layout/footer.php");
        include("layout/endPage.php");
    ?>
    <script src="public/js/index.js"></script>
    </body>

</html>