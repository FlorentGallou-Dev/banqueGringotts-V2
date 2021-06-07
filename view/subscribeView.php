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
                <h1 class="my-5">Devenir client</h1>
                <form action="userRegister.php" method="POST" class="row g-3">
                    <div class="col-4">
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupSelect01">Je suis</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected></option>
                                <option value="1">Un homme</option>
                                <option value="2">Une femme</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <label for="last_name" class="input-group-text">Nom</label>
                            <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <label for="first_name" class="input-group-text">Prénom</label>
                            <input type="text" class="form-control" id="first_name" name="first_name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <label for="num_adress" class="input-group-text">N°</label>
                            <input type="number" class="form-control" id="num_adress" name="num_adress">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group">
                            <label for="adress_street" class="input-group-text">Address</label>
                            <input type="text" class="form-control" id="adress_street" name="adress_street">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <label for="zip_code" class="input-group-text">Code Postal</label>
                            <input type="number" class="form-control" id="zip_code" name="zip_code">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <label for="city" class="input-group-text">Ville</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <label for="email" class="input-group-text">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <label for="password1" class="input-group-text">Mot de passe</label>
                            <input type="password" class="form-control" id="password1" name="password1">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <label for="password2" class="input-group-text">Confirmer</label>
                            <input type="password" class="form-control" id="password2" name="password2">
                        </div>
                    </div>
                    <!-- <div class="col-12">
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark text-white">Soumettre</button>
                    </div>
                </form>
        </main>
    
    <?php
        include("template/endPage.php");
    ?>
    <!-- <script src="public/js/.js"></script> -->
    </body>
    
    </html>