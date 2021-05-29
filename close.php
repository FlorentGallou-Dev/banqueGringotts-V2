<?php
    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }
    
    include("layout/startPage.php");
?>
        <link rel="stylesheet" href="public/css/forms.css">
    </head>
    <body>
    <?php
        include("layout/header.php");
        include("layout/nav.php");
    ?>



    <h1>Clore</h1>

    <?php
        include("layout/footer.php");
        include("layout/endPage.php");
    ?>
    <script src="public/js/close.js"></script>
    </body>

</html>