<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Histoire du vinyle - La Boite à Vinyles">
    <title>Histoire du vinyle - La Boite à Vinyles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
    <script src="js/script.js" defer></script>
</head>

<body>

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
        <section class="blockquote">
            <img src="public/assets/histoire.webp" alt="illustration platine vinyle">
            <h3>Histoire du vinyle</h3>
            <blockquote cite="https://www.maplatine.com/fr/content/64-l-historique-du-vinyle">


                <p> L’ancêtre du disque vinyle est le 78 tours. Celui-ci apparaît au début du 20e siècle.
                    Il s’agit d’un disque mono sillon de 25 ou 30 cm de diamètre, avec en général un morceau par face.
                    Selon sa taille, il peut contenir entre 3 et 5 minutes d’enregistrement.
                    En réalité, il n’était que très rarement enregistré à 78 tours par minute,
                    mais plutôt à des vitesses allant de 66 à 103 tours par minute, qui permettaient
                    d’allonger la durée d’enregistrement, au détriment toutefois de la bande passante.
                    Initialement, il était fabriqué en SHELLAC (une résine d’origine animale secrétée par un insecte), cire, coton et ardoise.
                    Mais la pénurie de résine lors de la deuxième guerre mondiale a forcé les fabricants à utiliser du vinyle (polychlorure de vinyle, ou PVC).
                    Le 78 tours commence à disparaître avec l’apparition du microsillon dans les années 50.</p>

                <p> L’arrivée des premières platines « modernes » coïncide avec l’invention du microsillon aux États-Unis, en 1946, par la firme Columbia.
                    Les premiers disques microsillons sont commercialisés en 1948. Ils contenaient des œuvres classiques de Mendelssohn et de Tchaïkovski.
                    Leur supériorité acoustique et technique sur le 78 tours s’impose immédiatement comme un argument commercial. Le vinyle ayant un grain
                    beaucoup plus fin (environ 50 angströms = 5*10-3 μm), il permet de graver des sillons plus étroits et rapprochés.
                    L’utilisation de cette matière synthétique thermoplastique à la place de la cire a considérablement amélioré la qualité
                    de reproduction sonore : réduction du bruit de fond, augmentation de la bande passante, de la dynamique et de la durée d’enregistrement,
                    qui passe de moins de 5 minutes à 30 minutes sur un 33 tours.</p>
                <p>Il existe différents formats et plusieurs vitesses de lecture.</p>

                <p> Les disques tournant à 33 tours 1/3 par minute ont généralement un diamètre de 30 cm (12 pouces) ou, plus rarement,
                    de 25 cm (10 pouces) à la fin des années 50 et au début des années 60 (Elvis Presley, Serge Gainsbourg…) et plus récemment
                    pour certaines rééditions et éditions limitées. Mais on trouve aussi des 17 cm (7 pouces) tournant à cette vitesse.
                    Le disque 33 tours standard est appelé LP pour « Long Play » et a généralement une durée de 20 à 30 minutes par face.</p>

                <p>Les disques tournant à 45 tours par minute ont habituellement un diamètre de 17 cm (7 pouces) et contiennent une chanson,
                    voire deux, par face. Ce sont les ancêtres des CD deux titres, eux aussi appelés SINGLE.
                    Il existe également des 45 tours (7 pouces) de 4 titres, appelés EP pour « Extended Play »,
                    plus longs qu'un single mais plus courts qu'un album.</p>
                <p>Ces 7 pouces tournent généralement à 45 tours par minute, plus rarement à 33 tours par minute.
                    Beaucoup ont servi à la production de rock ’n’ roll et d’œuvres classiques. La fabrication des 45 tours a été dictée
                    par une décision purement commerciale : créer un disque microsillon de 7 pouces de diamètre permettant d’enregistrer
                    un seul morceau de musique par face et pouvant durer jusqu’à 5 minutes et 30 secondes.
                    Avec ce cahier des charges, il ne restait qu’à adapter la vitesse de rotation afin d’exploiter toute la place disponible sur le disque.
                    Malgré tout, certains prétendent que la vitesse de 45 tours/minute a été choisie pour une simple raison mathématique, puisque 45 = 78 – 33…</p>

                <p> Beaucoup de maxi 45 tours de 30 cm de diamètre ont été édités, principalement à la fin des années 1970. Le maxi single ou super 45 tours
                    s’est généralisé essentiellement pour contenir des morceaux plus longs : plus de 20 minutes ! Ils furent plébiscités par les disc-jockeys
                    et certaines radios libres qui trouvaient leur manipulation plus aisée et leur qualité de son supérieure aux 45 tours et 33 tours.
                    Très souvent, ces disques incluent des versions inédites, des remix ne figurant pas sur les albums officiels. On les nomme « bonus tracks » ou « B-sides » sur les rééditions en CD.</p>

                <p> Les disques tournant à 16 tours par minute n’ont pas connu un grand succès commercial. Ils étaient surtout destinés à servir de support à des textes parlés.
                    Ils tournent exactement à 16 tours 2/3 par minute, soit la moitié de 33 tours 1/3. Les premiers sont apparus en 1957
                    dans différents diamètres : 17 cm pour l’apprentissage des langues (utilisation pédagogique), 25 cm pour quelques éditions commerciales
                    (en France, les marques Vogue et Ducretet-Thomson en ont édités), 30 cm pour de longues œuvres littéraires ou des pièces de théâtre à destination des aveugles et des malvoyants.
                    Dans ce domaine, en France, l’Union des Aveugles de Guerre a édité de nombreux coffrets (de 6, 8 et 10 disques) comprenant jusqu’à 1 heure d’enregistrement par face.
                    Ces disques en coffret ont pour particularité de présenter une étiquette centrale imprimée sur une face et, sur l’autre face, une étiquette noire avec le titre de l’œuvre écrite en braille.</p>

                <p> Aux États-Unis toujours, de 1956 à 1958, les firmes RCA et Columbia ont pressé des disques 16 tours. Cette dernière particulièrement pour son tourne-disque automobile « Highway Hi-Fi phonograph ».
                    Chrysler en équipait certaines de ses voitures. Ces disques avaient une durée de 40 à 45 minutes par face et étaient exclusivement prévus pour être lus sur le tourne-disque de voiture, car le sillon,
                    qui était deux fois plus étroit que sur un LP, nécessitait une tête de lecture équipée d’un saphir spécifique. La plupart des constructeurs d’électrophones et de platines tourne-disque
                    avaient prévu une vitesse 16 tours sur leurs appareils, mais devant la production commerciale intimiste de ces disques, cette option a rapidement disparu.
                    En matière de reproduction sonore analogique, plus le support tourne (ou défile) vite, meilleure est la qualité, notamment dans les fréquences élevées (aigus).
                    C’est pour cette raison que les 16 tours ont eu beaucoup de mal à convaincre les audiophiles avertis.</p>

                <p> Certains vinyles ont même une face en 45 tours et l’autre en 33 tours, certaines raretés tournent du centre vers la périphérie du disque, certains disques sont colorés,
                    d’autres translucides. Ceux que l’on nomme les « Picture discs » sont affublés d’un dessin ou d’une photo sur leurs faces, d’autres sont découpés en forme de fleur ou d’étoile,
                    d’autres encore ont une face gravée et l’autre vierge ou pyrogravée… En réalité toutes les fantaisies sont possibles, et toutes ont été réalisées !!!</p>

            </blockquote>
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