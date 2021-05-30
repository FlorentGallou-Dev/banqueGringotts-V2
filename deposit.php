<?php
    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }

    require 'model/connexion.php';
    require "model/accountModel.php";

    $accounts = getOneAccountForMovement($bdd, $_SESSION["customer"]["id_cust"]);

    include("layout/startPage.php");
?>
        <link rel="stylesheet" href="public/css/forms.css">
    </head>
    <body>
    <?php
        include("layout/header.php");
        include("layout/nav.php");
        $regexPatternLink = '/\s/';
    ?>

    <main class="container my-5">
        <div class="row">
        <h1 class="color-sombre col-12 mb-5">Dépot sur un de vos comptes</h1>
        <section class="container col-10 row mx-auto mb-5">
            <form action="model/movementModel.php" method="POST">
            <fieldset>
                <legend>Sélectionnez un de vos comptes</legend>
                <div class="mb-3">
                    <label for="Select" class="form-label">Vos comptes</label>
                    <select id="accountSelected" class="form-select" name="accountId" required>
                        <!-- testing if we receive the account id from get var to set account in select or let the user choose -->
                        <?php if(isset($_GET['account'])) {
                            foreach($accounts as $account) {
                                if($_GET['account'] === $account["id_acc"]) { ?>
                                    <option value="<?php echo $account["acc_type"]; ?>"><?php echo $account["acc_type"]; ?></option>
                                <?php }
                            }
                        } 
                        else {
                            foreach($accounts as $account) { ?>
                                <option value="<?php echo $account["acc_type"]; ?>"><?php echo $account["acc_type"]; ?></option>
                            <?php }
                        } ?>
                        
                    </select>
                    <div>
                        <!-- testing if we receive the account id from get var to set the balance automaticaly or select dynamicaly with js -->
                        <?php if(isset($_GET['account'])) {
                            foreach($accounts as $account) {
                                if($_GET['account'] === $account["id_acc"]) { ?>
                                    <p class="lead text-end">Solde : <?php echo number_format($account["acc_balance"], 0, ',', ' '); ?> Gallons</p>
                                <?php }
                            }
                        } 
                        else {
                            foreach($accounts as $account) { ?>
                                <p  class="<?php echo str_replace(' ', '', strtolower($account["acc_type"])); ?> lead text-end d-none">Solde : <?php echo number_format($account["acc_balance"], 0, ',', ' '); ?> Gallons</p>
                            <?php }
                        } ?>
                        
                    </div>
                </div>
                <legend>Indiquez le montant à déposer</legend>
                <div class="input-group mb-3">
                    <span class="input-group-text">Gal</span>
                    <input type="number" class="form-control" aria-label="Montant (Arrondis au Gallion)" name="amount" required>
                    <span class="input-group-text">.00</span>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="FieldsetCheck" required>
                        <label class="form-check-label" for="FieldsetCheck">J'atteste de ce dépot.</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-gold">Effectuer le dépot</button>
            </fieldset>
            </form>
        </section>
        </div>
    </main>

    <?php
        include("layout/footer.php");
        include("layout/endPage.php");
    ?>
    <script src="public/js/deposit.js"></script>
    </body>

</html>