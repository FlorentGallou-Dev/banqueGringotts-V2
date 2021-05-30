<!-- JE RECUPERE L ID DU COMPTE PAR $_GET['account'],
plus qu'à l'utiliser dans le fichier accountModel pour retourner la liste des informations complète du compte par meme requete que pour page index -->

<?php
    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }

    require 'model/connexion.php';
    require "model/accountModel.php";

    $singleAccount = getSingleAccount($bdd, $_GET['account']);
    
    include("layout/startPage.php");
?>
        <link rel="stylesheet" href="public/css/account.css">
    </head>
    <body>
    <?php
        include("layout/header.php");
        include("layout/nav.php");
        $regexPatternLink = '/\s/';
    ?>

    <main class="container my-5">
        <div class="row">
        <article class="container col-12 row mx-auto" id="accountContainer">
        <div class="col-12 mx-auto">
            <div class="card mx-1">
                    <div class="row card-body justify-content-center align-items-center text-center bg-sombre">
                        <div class="col-sm-4 vh-2">
                            <img class="img-fluid" src="public/img/gg-key.png" alt="Key to Gringotts">
                        </div>
                        <div class="row col-sm-8 align-items-center">
                            <div class="col-sm-6">
                                <h1 class="card-title color-gold m-0"><?php echo $singleAccount[0]["acc_type"]; ?></h1>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-text m-0 text-white">N° <?php echo $singleAccount[0]["acc_number"]; ?></p>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush borderGold">
                        <li class="list-group-item owner">Date de création : <?php echo $singleAccount[0]["acc_creation_date"]; ?></li>
                        <li class="list-group-item owner borderGrey">Solde : <?php echo number_format($singleAccount[0]["acc_balance"], 0, ',', ' '); ?> Gallons</li>
                        <h3 class="text-center my-3">Opérations</h3>
                        <?php foreach($singleAccount as $account): ?>
                            <li class="list-group-item balance"> ===> Le <?php echo $account["mov_date"]; ?> : <?php echo $account["mov_title"]; ?> = <?php echo number_format($account["mov_amount"], 0, null, ' '); ?> G</li>
                        <?php endforeach ?>
                    </ul>
                    <div class="card-body text-center bg-sombre">
                        <a href="close.php?account=<?php echo $singleAccount[0]["id_acc"]; ?>" class="btn btn-gold mx-1">Clore</a>
                        <a href="deposit.php?account=<?php echo $singleAccount[0]["id_acc"]; ?>" class="btn btn-gold mx-1">Dépot</a>
                        <a href="withdraw.php?account=<?php echo $singleAccount[0]["id_acc"]; ?>" class="btn btn-gold mx-1">Retrait</a>
                    </div>
                </div>
            </div>
        </article>
        </div>
    </main>

    <?php
        include("layout/footer.php");
        include("layout/endPage.php");
    ?>
    <script src="public/js/account.js"></script>
    </body>
</html>