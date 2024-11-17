<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Tous les Vinyles - La Boite à Vinyles">
    <title>Tous les Vinyles - La Boite à Vinyles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/script.js" defer></script>
</head>

<body data-theme="light">

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
            <li><a href="/laboiteavinyles/conseils">Conseils et Astuces</a></li>
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
                <span><i class="icon icon-search"></i></span>
                <input type="search" value="" placeholder="rechercher" size="10">
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
                <li><a href="/laboiteavinyles/conseils">Conseils et Astuces</a></li>

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

        <section class="all-vinyls">
            <h3>Vinyles</h3>
            <ul class="align-horiz-space-between">
                <?php foreach ($vinyls as $vinyl) : ?>
                    <li>
                        <img src="imgs/<?= $vinyl->getPreview(); ?>" alt="<?= $vinyl->getAlt(); ?>">
                        <h4><?= $vinyl->getName(); ?></h4>
                        <h5><?= $vinyl->getArtiste(); ?></h5>
                        <small>Sorti en <?= $vinyl->getReleaseDate(); ?></small>
                        <p>
                            <a href="/laboiteavinyles/vinyles/details?id=<?= $vinyl->getId(); ?>">
                            En savoir plus...
                        </a>
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>

    <footer class="align-vertical">
        <section id="social-media">
            <ul class="align-horiz">
                <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon icon-linkedin"></i></a></li>
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