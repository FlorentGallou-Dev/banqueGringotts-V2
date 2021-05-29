<?php
   require 'model/connexion.php';
   require 'model/customerModel.php';

    // Si les champ email et mot de passe ont été remplis
    if(isset($_POST["cust_email"]) && isset($_POST["cust_password"])) {
        $customer = getUserByEmail($bdd, $_POST["cust_email"]);
        //Verifions que la base user renvoie bien un utilisateur
        if($customer) {
            // On vérifie qu'ils correspondent aux information du tableau
            if(password_verify($_POST["cust_password"], $customer["cust_password"])) {
                // On démarre une session et on stocke l'utilisateur dedans avant de l'envoyer sur index
                session_start();
                $_SESSION["customer"] = $customer;
                header("Location:index.php");
                exit;
            }
        }
        $error_message = "Identifiants invalides";
    }
    include("layout/startPage.php");
?>
        <link rel="stylesheet" href="public/css/index.css">
    </head>
    <body>
    <?php
        include("layout/header.php");
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
                <input type="submit" name="connexion" class="btn btn-dark text-white w-25 form-control" value="Connexion">
            </div>
            <div>
                <p class="text-center">Pas encore client chez nous ?, n'hésitez-pas et <a href="subscribe.php">Devenez client</a></p>
            </div>
        </form>
        </div>
    </main>

    <?php
        include("layout/endPage.php");
    ?>
    <!-- <script src="public/js/.js"></script> -->
    </body>

</html>