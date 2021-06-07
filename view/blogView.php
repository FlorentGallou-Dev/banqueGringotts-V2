<?php
include("template/startPage.php");
?>
        <link rel="stylesheet" href="public/css/blog.css">
    </head>
    <body>
    <?php
        include("template/header.php");
        include("template/nav.php");
    ?>

    <main class="container my-5">
        <div class="row">
        <h1 class="color-sombre col-12 mb-5">Actualités de la banque Gringotts</h1>
        <section class="container col-10 row mx-auto" id="postContainer">
            
        </section>
        </div>
    </main>

    <?php
        include("template/footer.php");
        include("template/endPage.php");
    ?>
    <script src="public/js/blog.js"></script>
    </body>

</html>