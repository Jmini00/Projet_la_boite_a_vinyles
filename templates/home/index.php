<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Bienvenue sur La Boite à Vinyles ! Tout l'univers du vinyle Rock, Metal, Live, Pop/Rock Découvrez vite nos incontournables, des conseils, astuces et discussions">
    <title>La Boite à Vinyles - Site Officiel pour les fans de vinyles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/script.js" defer></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="public/js/scrollreveal.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body data-theme="light">

    <!-- Message de succès signalement commentaire-->
    <?php if (isset($_GET['successlogin'])) : ?>
        <script>
            $(function() {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Connexion réussie",
                    text: "Bonjour <?= $_SESSION['user']->getFirstname(); ?> !",
                    showConfirmButton: false,
                    timer: 5000
                });
            });
        </script>
    <?php endif; ?>

    <div id="side-nav">
        <ul>
            <li><a href="/laboiteavinyles">Home</a></li>
            <li><a href="/laboiteavinyles/histoire-du-vinyle">Histoire du vinyle</a></li>
            <li><a href="/laboiteavinyles/vinyles-pop/categorie?name=Pop">Collection Pop</a></li>
            <li><a href="/laboiteavinyles/vinyles-rock/categorie?name=Rock">Collection Rock</a></li>
            <li><a href="/laboiteavinyles/vinyles-metal/categorie?name=Metal/Grunge">Collection Metal/Grunge</a></li>
            <li><a href="/laboiteavinyles/vinyles-live/categorie?name=Live/OST">Collection Live/OST</a></li>
            <li><a href="/laboiteavinyles/vinyles-pepites/categorie?name=Pepites">Collection Pépites</a></li>
            <li><a href="/laboiteavinyles/vinyles/collection-Liam-Gallagher">Focus artiste du mois</a></li>
            <li><a href="/laboiteavinyles/vinyles/collection-God-save-the-king">God Save The King</a></li>
            <li><a href="/laboiteavinyles/vinyles/collection-60s-80s">60's/80's</a></li>
            <li><a href="/laboiteavinyles/vinyles">Tous les vinyles</a></li>
            <li><a href="/laboiteavinyles/accessoires">Enceintes</a></li>
            <li><a href="/laboiteavinyles/accessoires">Accessoires audio</a></li>
            <li><a href="/laboiteavinyles/goodies">Goodies</a></li>
            <li><a href="#conseils">Conseils et Astuces</a></li>
            <?php if ($isLoggedIn && ($_SESSION['user']->getRole() === 'ADMINISTRATEUR')) : ?>
                <li><a href="/laboiteavinyles/admin">Espace Administrateur</a></li>
            <?php endif; ?>
            <?php if ($isLoggedIn) : ?>
                <li>Bonjour <?= $_SESSION['user']->getFirstname(); ?> ! </li>
                <li><a href="/laboiteavinyles/logout">Se Déconnecter</a></li>
            <?php else : ?>
                <a href="/laboiteavinyles/login">Se Connecter</a>
                <a href="/laboiteavinyles/register">S'inscrire</a>
            <?php endif; ?>
            <li>
                <span><i class="icon icon-search"></i></span>
                <input type="search" value="" placeholder="rechercher" size="10">
            </li>
        </ul>
    </div>
    <div class="sliderbtn">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

    <i class="fa-solid fa-circle-chevron-up fa-2x position-fixed-chevron" id="back-to-top"></i>

    <header>
        <div id="header-top" class="align-horiz-space-between">
            <section id="form">
                <!--<form action="" method="get">-->
                <span><i class="icon icon-search"></i></span>
                <input type="search" value="" placeholder="rechercher" size="10">
                <!--</form>-->
            </section>
            <div id="logo">
                <img src="assets/logo_boiteavinyles2.webp" alt="logo La Boite à Vinyles">
                <h1>La Boîte à Vinyles</h1>
            </div>
            <section id="user">
                <?php if ($isLoggedIn) : ?>
                    <p>Bonjour <?= $_SESSION['user']->getFirstname(); ?> ! </p>
                    <a href="/laboiteavinyles/logout" class="icon icon-user">Déconnexion</a>
                <?php else : ?>
                    <a href="/laboiteavinyles/login" class="icon icon-user">Connexion</a>
                    <a href="/laboiteavinyles/register" class="icon icon-register">Inscription</a>
                <?php endif; ?>
                <!-- Message de succès signalement commentaire-->
                <?php if (isset($_GET['successreport'])) : ?>
                    <div class="success">
                        <?= $_GET['successreport']; ?>
                    </div>
                    <script>
                        $(function() {
                            Swal.fire({
                                position: "center",
                                icon: "success",
                                title: "Merci",
                                text: "Votre signalement a bien été envoyé, il sera étudié par nos équipes",
                                showConfirmButton: false,
                                timer: 5000
                            });
                        });
                    </script>
                <?php endif; ?>
            </section>
        </div>


        <nav id="navbar">
            <ul class="align-horiz-center">
                <li><a href="/laboiteavinyles">Home</a></li>
                <li><a href="/laboiteavinyles/histoire-du-vinyle">Histoire du vinyle</a></li>
                <li class="dropdown">
                    <a class="dropbtn">Genres<i class="icon icon-turn-down"></i></a>
                    <div class="dropdown-content">
                        <a href="/laboiteavinyles/vinyles-pop/categorie?name=Pop">Pop</a>
                        <a href="/laboiteavinyles/vinyles-rock/categorie?name=Rock">Rock</a>
                        <a href="/laboiteavinyles/vinyles-metal/categorie?name=Metal/Grunge">Metal/Grunge</a>
                        <a href="/laboiteavinyles/vinyles-live/categorie?name=Live/OST">Live/Original Soundtrack</a>
                        <a href="/laboiteavinyles/vinyles-pepites/categorie?name=Pepites">Pépites</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropbtn">Collections<i class="icon icon-turn-down"></i></a>
                    <div class="dropdown-content">
                        <a href="/laboiteavinyles/vinyles/collection-Liam-Gallagher">Focus artiste du mois</a>
                        <a href="/laboiteavinyles/vinyles/collection-God-save-the-king">God Save The King</a>
                        <a href="/laboiteavinyles/vinyles/collection-60s-80s">60's/80's</a>
                        <a href="/laboiteavinyles/vinyles">Collection</a>
                    </div>
                <li class="dropdown">
                    <a class="dropbtn">Matériel audio<i class="icon icon-turn-down"></i></a>
                    <div class="dropdown-content">
                        <a href="/laboiteavinyles/accessoires">Enceintes</a>
                        <a href="/laboiteavinyles/accessoires">Accessoires audio</a>
                    </div>
                <li><a href="/laboiteavinyles/goodies">Goodies</a></li>
                <li><a href="#conseils">Conseils et Astuces</a></li>

                <?php if ($isLoggedIn && ($_SESSION['user']->getRole() === 'ADMINISTRATEUR')) : ?>
                    <li><a href="/laboiteavinyles/admin">Espace Administrateur</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <div id="banner" class="align-vertical">
            <img class="banner-img" src="assets/slides/img_vinyls.webp" alt="illustration collection vinyles">
            <h2>Bienvenue sur La Boîte à Vinyles !</h2>
            <ul class="align-vertical">
                <li>Tout l'univers du vinyle</li>
                <li>Une large collection d'albums</li>
                <li>Des accessoires et du matériel audio</li>
                <li>Des conseils et astuces</li>
                <li>Des goodies de vos artistes préférés</li>
            </ul>
        </div>
    </header>

    <main>

        <section id="news">
            <h3>nouveauté</h3>
            <div class="align-horiz-space-evenly">
                <?php foreach ($vinyls as $vinyl) : ?>
                    <img src="imgs/<?= $vinyl->getPreview(); ?>" alt="<?= $vinyl->getAlt(); ?>">
                    <div id="news-content" class="align-vertical">
                        <h4><?= $vinyl->getName(); ?></h4>
                        <h5><?= $vinyl->getArtiste(); ?></h5>
                        <a href="/laboiteavinyles/vinyles/details?id=<?= $vinyl->getId(); ?>">
                            découvrir l'album ...
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="collections" class="align-horiz-space-around">
            <figure id="retro" class="snip1504">
                <img src="assets/retro.webp" alt="logo retro collection">
                <figcaption>
                    <h3>collection speciale annees 60/80</h3>
                    <p>60's/80's</p>
                    <a href="/laboiteavinyles/vinyles/collection-60s-80s">voir la collection</a>
                </figcaption>
            </figure>
            <figure id="pepites" class="snip1504">
                <img src="assets/vintage.webp" alt="logo collection vintage">
                <figcaption>
                    <h3>selection des vinyles rares</h3>
                    <p>Pépites du moment</p>
                    <a href="/laboiteavinyles/vinyles-pepites/categorie?name=Pepites">voir la collection</a>
                </figcaption>
            </figure>
            <figure id="uk" class="snip1504">
                <img src="assets/uk_flag.webp" alt="drapeau royaume uni">
                <figcaption>
                    <h3>le meilleur du rock from uk</h3>
                    <p>God save the King</p>
                    <a href="/laboiteavinyles/vinyles/collection-God-save-the-king">voir la collection</a>
                </figcaption>
            </figure>
        </section>

        <section id="genres" class="align-horiz-space-evenly">
            <article id="pop">
                <a href="/laboiteavinyles/vinyles-pop/categorie?name=Pop">voir les produits</a>
                <p>decouvrez notre selection pop/rock</p>
            </article>
            <article id="metal">
                <a href="/laboiteavinyles/vinyles-metal/categorie?name=Metal/Grunge">voir les produits</a>
                <p>la selection metal/grunge</p>
            </article>
            <article id="live">
                <a href="/laboiteavinyles/vinyles-live/categorie?name=Live/OST">voir les produits</a>
                <p>les meilleurs albums live et bandes originales</p>
            </article>
        </section>

        <section id="focus" class="align-horiz-space-evenly">
            <figure>
                <img src="public/assets/liam_gallagher.webp" alt="photo Liam Gallagher" title="Liam Gallagher">
            </figure>
            <div id="focus-text">
                <h3>Focus artiste du mois</h3>
                <h4>Liam Gallagher</h4>
                <p>découvrez l'artiste du mois dans ce focus consacré à l'enfant terrible de la Brit Pop</p>
                <a href="/laboiteavinyles/vinyles/collection-Liam-Gallagher">voir la collection</a>
            </div>
        </section>

        <section id="divers" class="align-horiz-space-evenly">
            <article id="accessoires">
                <figure class="snip1482">
                    <figcaption>
                        <h3>Accessoires</h3>
                        <p>Découvrez notre sélection d'accessoires.</p>
                        <p><b>Section disponible prochainement !!</b></p>
                    </figcaption>
                    <img src="public/assets/accessoires.webp" alt="image categorie accessoires">
                </figure>
            </article>

            <article id="goodies">
                <figure class="snip1482">
                    <figcaption>
                        <h3>Goodies</h3>
                        <p>Découvrez vos artistes préférés en miniature.</p>
                        <p><b>Section disponible prochainement !!</b></p>
                    </figcaption>
                    <img src="public/assets/goodies.webp" alt="image categorie goodies">
                </figure>
            </article>
        </section>

        <section id="conseils" class="align-horiz-space-evenly">
            <article id="conseils-ampli">
                <img src="public/assets/ampli_petit.webp" alt="illustration amplificateur platine vinyle">
                <h3>Choisir le bon ampli</h3>
                <p>Oubliées des utilisateurs il y a encore quelques années, les platines vinyles
                    effectuent actuellement leur retour en force. Elles ont gagné en modernité et
                    proposent une meilleure qualité de son qui séduit les audiophiles.</p>
                <a href="/laboiteavinyles/bien-choisir-son-ampli">Lire la suite</a>
            </article>
            <article id="conseils-platine">
                <img src="public/assets/platine_petit.webp" alt="illustration platine vinyle">
                <h3>Bien choisir sa platine vinyle</h3>
                <p>On croyait que le CD puis le mp3 avaient définitivement fait passer le disque vinyle
                    et la platine vinyle dans les archives de l’histoire. Pourtant, sur les 8 dernières années
                    les ventes de vinyle ont été multipliées par 6 en France, et les platines vinyles ont à nouveau
                    envahit les magasins.</p>
                <a href="/laboiteavinyles/bien-choisir-sa-platine">Lire la suite</a>
            </article>
            <article id="conseils-entretien">
                <img src="public/assets/vinyles_petit.webp" alt="illustration collection vinyles">
                <h3>Comment nettoyer ses vinyles et entretenir sa platine ?</h3>
                <p>Avec le retour en force de la platine et des disques vinyle, il faut se rappeler
                    de l’importance d’un nettoyage régulier pour obtenir la meilleure expérience audio possible.
                    Découvrez quels sont les trucs et astuces pour les garder impeccablement propres.</p>
                <a href="/laboiteavinyles/entretenir-sa-platine-et-ses-vinyles">Lire la suite</a>
            </article>
        </section>

        <section id="newsletter" class="align-horiz">
            <div>
                <h3>newsletter</h3>
                <p>Inscrivez-vous et rejoignez le club "La Boite à Vinyles" pour être averti des dernières nouveautés et exclusivités.
                    Venez également participer aux nombreuses discussions sur la collection de vinyles en laissant votre avis et commentaire sur les albums !!</p>
                <a href="/laboiteavinyles/register">je m'inscris</a>
            </div>
        </section>
    </main>

    <footer class="align-vertical">
        <section id="social-media">
            <ul class="align-horiz">
                <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                <li><a href="https://linkedin.com/in/jerome-talbot-a17aaa290" target="_blank"><i class="icon icon-linkedin"></i></a></li>
                <li><a href="/laboiteavinyles/contact"><i class="icon icon-mail"></i></a></li>
            </ul>
        </section>
        <section id="mentions">
            <ul class="align-horiz">
                <li><a href="/laboiteavinyles/contact" class="icon icon-pastille">Contact</a></li>
                <li><a href="/laboiteavinyles/mentions-legales" class="icon icon-pastille">Mentions Légales</a></li>
                <li><a href="/laboiteavinyles/charte-de-moderation">Charte de Modération</a></li>
            </ul>
        </section>
        <p id="copyright">&copy; 2024 la boite à vinyles - tous droits réservés</p>
        <section id="dark-mode">
            <ul class="align-horiz">
                <li data-mode="light"> <img src="public/assets/yoda.webp" alt="icone Yoda Star Wars"></li>
                <li data-mode="dark"> <img src="public/assets/darthvader.webp" alt="icone Dark Vador Star Wars"></li>
            </ul>
        </section>
    </footer>
</body>

</html>