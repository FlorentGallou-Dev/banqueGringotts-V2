<?php
    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }
    
    include("layout/startPage.php");
?>
        <!-- <link rel="stylesheet" href="public/css/.css"> -->
    </head>
    <body>
    <?php
        include("layout/header.php");
        include("layout/nav.php");
    ?>

    <main class="container my-5">
        <div class="row">
            <h1 class="color-sombre mb-5">Mentions Légales</h1>
            <section class="container col-12">
                <div class="row">
                    <article>
                        <h2>Création</h2>
                        <p>La banque Gringotts est un immense édifice à la façade aussi blanche que la neige qui domine les boutiques alentour. Le bâtiment est doté d'un portail monumental en bronze, gardé par un gobelin en uniforme, et auquel on accède par un escalier de marbre blanc. L'entrée principale donne accès au sas, où deux gobelins sont postés de chaque côté de grandes portes en argent, sur lesquelles est gravé un poème en guise d'avertissement.[3]</p>
                    </article>
                    <article>
                        <h2>Généralités</h2>
                        <p>Après avoir franchi les portes du sas, le visiteur pénètre à l'intérieur d'un vaste hall, tout en marbre. On retrouve dans cette salle un long comptoir où travaille près d'une centaine de gobelins assis sur de hauts tabourets.[3]</p>
                    </article>
                    <article>
                        <h2>Localisation et accès</h2>
                        <p>Une des portes du hall mène à un couloir de pierre brute, éclairé par plusieurs torches. Ce couloir permet d'accéder à des wagons.[5]</p>
                    </article>
                    <article>
                        <h2>Description</h2>
                        <p>Sous le hall principal s'étend un vaste dédale de galeries souterraines, longues de plusieurs kilomètres et accessibles par les petits wagonnets. Ces derniers s'enfoncent à vive allure dans les profondeurs de la banque et leur vitesse n'est pas modifiable.[3] Un lac souterrain est également présent parmi les galeries.[5]</p>
                    </article>
                    <article>
                        <h2>Sécurité et protections</h2>
                        <p>Le hall de la banque est constitué d'une longue allée bordée de plusieurs comptoirs où travaillent des gobelins. Au fond de cette allée se trouve un comptoir individuel où travail le chef des gobelins. D'imposants lustres surplombent la salle et le sol est en marbre avec diverses formes géométriques et une étoile gravée. Les bureaux des gobelins possèdent tous des balances et sont équipés d'une lampe sphérique.[4]</p>
                    </article>
                    <article>
                        <h2>Chambres fortes</h2>
                        <p>Un important dédale souterrain est présent sous la banque. Cette immense grotte est aménagée avec des rails pour que des wagons puissent s'aventurer dans les profondeurs des galeries. Les coffres de la banque sont préservés dans ces souterrains. Certains coffres sont particulièrement bien protégés et profondément enfouis dans le sous-sol. Ils sont disposés en arc de cercle sur plusieurs étages, des colonnes de pierre encerclent un Pansedefer ukrainien qui protège les lieux.[6]</p>
                    </article>
                </div>
            </section>
        </div>
    </main>

    <?php
        include("layout/footer.php");
        include("layout/endPage.php");
    ?>
    <!-- <script src="public/js/.js"></script> -->
    </body>

</html>