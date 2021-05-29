<!-- JE RECUPERE L ID DU COMPTE PAR $_GET['account'],
plus qu'à l'utiliser dans le fichier accountModel pour retourner la liste des informations complète du compte par meme requete que pour page index -->

<?php
    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }
    
    include("layout/startPage.php");
?>
        <link rel="stylesheet" href="public/css/account.css">
    </head>
    <body>
    <?php
        include("layout/header.php");
        include("layout/nav.php");
    ?>

    <main id="main" class="container my-5">
        <h1 class="color-sombre col-12 mb-5">VOTRE COMPTE <?php echo $_GET['account']?></h1>
        <section class="container col-12 row mx-auto" id="accountsContainer">

        </section>
    </main>

    <?php
        include("layout/footer.php");
        include("layout/endPage.php");
    ?>
    <script src="public/js/account.js"></script>
    </body>

</html>