<?php
include("template/startPage.php");
?>
        <link rel="stylesheet" href="public/css/index.css">
    </head>
    <body>
    <?php
        include("template/header.php");
    ?>
    </header>
    <main id="main" class="container my-5">
        <h1 class="my-5">Accéder à votre espace client</h1>
        <form action="" method="POST" class="w-75 mx-auto my-5">
            <?php if(isset($error_message)): ?>
                <div class="alert alert-danger">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>
            <div>
                <label for="cust_email" class="form-label">Votre e-mail :</label>
                <input type="text" name="cust_email" id="cust_email" class="form-control">
            </div>
            <div>
                <label for="password" class="form-label">Votre mot de passe</label>
                <input type="password" name="cust_password" id="cust_password" class="form-control">
            </div>
            <div class="my-5 text-center">
                <input type="submit" name="connexion" class="btn btn-dark text-white form-control" value="Connexion">
            </div>
            <div>
                <p class="text-center">Pas encore client chez nous ?, n'hésitez-pas et <a href="subscribe.php">Devenez client</a></p>
            </div>
        </form>
        </div>
    </main>

    <?php
        include("template/endPage.php");
    ?>
    <!-- <script src="public/js/.js"></script> -->
    </body>

</html>