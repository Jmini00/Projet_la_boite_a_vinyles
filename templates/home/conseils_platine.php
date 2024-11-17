<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Bien choisir sa platine vinyle - La Boite à Vinyles">
    <title>Bien choisir sa platine vinyle - La Boite à Vinyles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
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
            <img src="public/assets/platine_grand.webp" alt="illustration platine vinyle">
                <h3>Bien choisir sa platine vinyle</h3>
                <blockquote cite="https://www.group-digital.fr/bien-choisir-sa-platine-vinyle.html">
                    <p>On croyait que le CD puis le mp3 avaient définitivement fait passer le disque vinyle
                        et la platine vinyle dans les archives de l’histoire. Pourtant, sur les 8 dernières
                        années les ventes de vinyle ont été multipliées par 6 en France, et les platines vinyles
                        ont à nouveau envahit les magasins. Loin d’être uniquement un phénomène de mode,
                        le retour de la platine vinyle s’associe à une recherche de qualité sonore, au plaisir
                        de l’objet du disque et à la recherche de disques de collection. Ainsi, de nombreuses
                        personnes se rééquipent en platine vinyle car bien souvent les anciennes ont été jetées.
                        Alors comment choisir sa platine vinyle et quelles sont les caractéristiques du marché actuel ?
                        Découvrez-le en parcourant notre guide d’achat, et sélectionnez la platine vinyle qui correspond
                        à vos besoins.</p>
                <h4>Pourquoi choisir une platine vinyle?</h4>
                        <p>La platine vinyle n’est généralement pas le support d’écoute principal, mais un mode
                             complémentaire de lecture de disque, utilisée dans le confort de son domicile.
                              Le vinyle offre un son plus chaud, plus ample et moins froid que la compression numérique.
                               A contrario, il va demander une plus grande qualité d’équipement audio pour restituer ce beau son,
                                un entretien plus délicat, et une utilisation moins pratique et rapide (changement de face,
                                 changement de piste plus délicat…etc).
                                 Les lecteurs numériques, eux, conviennent mieux aux modes d’utilisation mobiles.
                                  La musique au format numérique et les CD restent agréables puisqu’on peut les transporter
                                   facilement et les copier plus aisément (pour réaliser des playlists, compilations, best-of).
                                    Leur usage est simple, rapide et convivial. De plus, les équipements audio pour lire les CD
                                     et les fichiers numériques sont de toutes tailles et de tout design, offrant un choix
                                      plus large que la platine vinyle, son amplificateur et ses enceintes.
                                       En termes de prix, les équipements numériques peuvent être aussi moins chers.
                                       Il arrive que les gens achètent des disques vinyles de leurs artistes préférés
                                        après avoir déjà acheté en numérique ou sur CD. L’usage du CD à la maison reste un usage plus informel
                                         et moins dans l’écoute très attentive que celle du disque vinyle.</p>
                <h4>Choisir une platine vinyle : quels types d’appareils ?</h4>
                <p>Le premier critère de choix à considérer pour acheter une platine vinyle est son mode d’entraînement.
                     Cela dépendra essentiellement de l’usage que vous ferez de votre platine vinyle.</p>
                <h5>Les platines vinyles à entraînement direct</h5>
                <p>Le moteur est directement placé sous le plateau lié à l’axe de celui-ci.
                     Ce mode d’entrainement permet des arrêts et des démarrages instantanés et sera donc
                      adapté à l’utilisation en radio, ou aux techniques de mix utilisées par les DJs, comme le scratch.</p>
                <h5>Les platines à entrainement par courroie</h5>
                    <p>Dans ce cas le moteur n’est pas monté en direct sous l’axe du plateau.
                         Le moteur est déporté et entraine le plateau par le biais d’une courroie située sous le plateau.
                          C’est une technique assez simple et peu couteuse (et qui permet des réparations faciles
                           en cas de rupture de la courroie) : il s’agit en plus d’une méthode très adaptée pour
                            l’écoute à domicile qui permet une restitution parfaite du son grâce à la vitesse régulée de la courroie.</p>
                <h4>Les modes de fonctionnement d’une platine vinyle</h4>
                <p>On peut distinguer 3 grands types de platine vinyle en fonction de la présence d’un système automatique ou pas.</p>
                <h5>La platine vinyle automatique</h5>
                <p>Le bras d’une platine vinyle automatique s’actionne tout seul et viendra se poser naturellement
                     sur le disque vinyle à la première chanson. Lorsque la lecture de la face de votre disque est terminée,
                      ce bras se lève tout seul et revient sur son socle. Vous n’avez en fait qu’à poser le disque,
                       choisir la vitesse de lecture, et appuyer sur un bouton de mise en route.
                        Si ces platines sont assez pratiques, elles ne permettent pas, par contre, de commencer au milieu du disque.
                         C’est un frein pour beaucoup d’usagers qui préfèrent alors les modèles semi automatiques.</p>
                <h5>La platine vinyle semi-automatique</h5>
                <p>Ce type de platine vinyle est une variante de la platine vinyle manuelle à laquelle on a ajouté un système
                     qui permet de lever le bras de lecture et d’arrêter le plateau en fin de lecture d’une face de disque.
                      C’est vous qui placerez le bras de lecture où bon vous semble en début d’écoute.
                       Ce sont les modèles les plus courants aujourd’hui</p>
                <h5>La platine vinyle manuelle</h5>
                    <p>C’est la platine vinyle la plus vendue dans le segment audiophile.
                         Les passionnés de beau son ne jurent que par des bras légers, sans mécanisme.
                          En revanche, ce système est moins pratique et nécessite du doigté pour ne pas abimer ses disques.
                           Il faut aussi une surveillance en fin de lecture pour éviter d’abimer le diamant de lecture
                            si le bras tourne trop longtemps sur le dernier sillon du disque.</p>
                <h4>Autres critères techniques pour choisir votre platine vinyle</h4>
                        <p>Vous remarquerez sur les fiches techniques des platines vinyles, la mention d’un taux de « pleurage et scintillement ».
                             Cette expression (en anglais « wow and flutter ») représente un taux de distorsion de la vitesse de lecture.
                              Ce taux doit être le plus bas possible. Il est recommandé de choisir des platines vinyles ayant un taux de pleurage
                               et scintillement inférieur à 0,25% pour avoir une bonne qualité sonore.
                            Une sortie USB sera aussi très pratique, notamment si vous avez une collection ancienne de vinyles que vous souhaitez numériser.
                             Vous pourrez ainsi enregistrer au format numérique vos disques préférés.
                            Dans les segments de prix plus élevé, on trouve aujourd’hui des platine vinyles avec préampli phono intégré.
                             C’est un vrai plus qui justifie totalement la différence de prix.
                              Très souvent ces préamplis sont de bonne qualité et sont largement suffisants pour un usage domestique.
                               Ils vous font gagner de la place et évite des câbles en évitant de connecter un ampli traditionnel à votre platine vinyle.
                                Vous n’avez qu’à brancher vos enceintes directement pour savourer vos vinyles confortablement ! </p>
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