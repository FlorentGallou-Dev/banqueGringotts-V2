<?php
    include("layout/header.php");
    include("layout/nav.php");
?>

<main id="main" class="container my-5">
    <div class="row">
        <h1 class="color-sombre col-12 mb-5">Vos comptes bancaires</h1>
        <section class="container col-12 row mx-auto" id="accountsContainer">
            <?php include("./apis/accounts.php"); ?>
            <?php include("manageAccount.php"); ?>
        </section>
    </div>
</main>

<?php
    include("layout/footer.php");
?>