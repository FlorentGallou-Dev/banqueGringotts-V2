<?php
include("template/startPage.php");
?>
<link rel="stylesheet" href="public/css/statistics.css">
</head>

<body>
    <?php
    include("template/header.php");
    include("template/nav.php");
    ?>

    <main class="container my-5">
        <div class="row">
            <h1 class="color-sombre col-12 mb-5">Voici les informations pratiques fournies par la banque Gringotts</h1>
            <section class="container col-10 row mx-auto">
                <table class="table table-sombre table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">Monnaie</th>
                            <th scope="col">Unité</th>
                            <th scope="col">Taux</th>
                        </tr>
                    </thead>
                    <tbody id="statsContainer">

                    </tbody>
                </table>
            </section>
        </div>
    </main>

    <?php
    include("template/footer.php");
    include("template/endPage.php");
    ?>
    <script src="public/js/statistics.js"></script>
</body>

</html>