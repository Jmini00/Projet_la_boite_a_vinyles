<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Mentions Légales - La Boite à Vinyles">
    <title>Mentions Légales - La Boite à Vinyles</title>
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
            <h3>Mentions Légales</h3>
            <blockquote cite="https://atchik.com/mentions-legales/">
                <h4>Informations légales</h4>
                <p>La Boite à Vinyles - 9 rue du Vinyle, 75000 PARIS - FRANCE - Tel. +33 (0) 123 456 789 - Fax. +33 (0) 123 456 789 - www.laboiteavinyles.fr</p>
                <p>Photos, illustrations, logos : tous droits réservés, reproduction des contenus interdite sauf mention expresse (licence Creative Content sur articles, usage des logos et visuels selon recommandations dans l’espace Presse).</p>
                <h4>Législation française : données nominatives</h4>
                <p>Droit d´accès au fichier informatisé : tout utilisateur ayant déposé dans le service des informations directement ou indirectement nominatives peut demander la communication des informations nominatives le concernant, à l´administrateur du service et les faire rectifier le cas échéant, conformément à la loi française No 78-17 du 6 janvier 1978 relative à l´informatique, aux fichiers et aux libertés. Toutes les marques commerciales citées dans ce service sont des marques déposées et sont la propriété de leurs propriétaires.</p>
                <p>L’utilisateur est informé qu’il dispose d’un droit d’accès, de rectification et d’opposition portant sur les données le concernant en écrivant à l’adresse postale de La Boite à Vinyles.</p>
                <p>Les utilisateurs des services de La Boite à Vinyles sont tenus de respecter les dispositions de la loi relative à l’informatique, aux fichiers et aux libertés, dont la violation est passible de sanctions pénales. Ils doivent notamment s’abstenir, s’agissant des informations nominatives auxquelles ils accèdent, de toute collecte, de toute utilisation détournée et, d’une manière générale, de tout acte susceptible de porter atteinte à la vie privée ou à la réputation des personnes.</p>
                <h5>Diffusion de données nominatives et personnelles</h5>
                <p>Les données nominatives et personnelles relatives au personnel de La Boite à Vinyles diffusées sur le site Internet ont fait l’objet au préalable d’une autorisation expresse de leurs propriétaires. Conformément à l’article 34 de la loi informatique et liberté du 6 janvier 1978 n°78-17, les personnes concernées disposent d’un droit d’accès, de modification, de rectification et de suppression des données les concernant à tout moment et sans motif.</p>

                <h4>Droit de propriété intellectuelle</h4>
                <p>Le site Internet, sa structure générale, ainsi que les textes, images animées ou non, sons, savoir-faire, dessins, graphismes (…) et tout autre élément composant le site, à l’exclusion des avis, de leurs logos, et des dossiers de consultation des entreprises, sont la propriété soit de La Boite à Vinyles ou de sociétés tierces qui auront autorisé La Boite à Vinyles à produire leurs données.</p>
                <p>Les marques de La Boite à Vinyles et de ses partenaires, ainsi que les logos figurant sur le site, sont des marques (semi-figuratives ou non) déposées.</p>
                <p>Toute utilisation ou reproduction, totale ou partielle, du site, des éléments qui le composent ou des informations qui y figurent, par quelque procédé que ce soit, est strictement interdite et constitue une contrefaçon sanctionnée par le Code de la propriété intellectuelle, sauf accord préalable et écrit.</p>
                <h4>Liens hypertextes</h4>
                <p>Les liens hypertextes mis en place dans le cadre du présent site Internet, en direction d’autres ressources présentes sur le réseau Internet et, notamment, vers ses partenaires, sont clairement identifiés et font l’objet d’une information et/ou d’une autorisation préalable des sites pointés. La Boite à Vinyles s’engage à faire cesser les liens hypertextes à la première demande des entreprises à qui appartiennent ces sites. Les liens hypertextes en direction d’autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de La Boite à Vinyles.</p>
                <h4>Protection des droits d’autrui</h4>
                <p>La Boite à Vinyles,en tant que site édité par une société immatriculée en France, et dont l'établissement principal est basé en France, se soumet à la loi française et à la législation européenne et au Règlement Général sur la Protection des Données (RGPD). L'ensemble de ce site est soumis à la législation française, communautaire et internationale sur le droit d'auteur et la propriété intellectuelle. La Boite à Vinyles respecte les droits d’auteur ainsi que les droits voisins, droits personnels et droits relatifs à la propriété intellectuelle. Nos citations et références sont dans la mesure du possible accompagnées des moyens de parvenir à la source. La Boite à Vinyles demande à ses utilisateurs de respecter les droits d'autrui et de s'en tenir à la même rigueur.</p>
                <h4>Engagement et respect de l’ordre public et des bonnes mœurs</h4>
                <p>La Boite à Vinyles s'engage à retirer tout article produit par ses services ou par un de ses utilisateurs, et d'une manière générale tout ce qui peut dépendre de son site, s'il est porté atteinte aux droits d'autrui, à l'ordre public et aux bonnes mœurs, tel que définis par la législation française applicable. La Boite à Vinyles et ses modérateurs feront respecter la charte de modération afin de garantir l’intérêt, la convivialité et le respect de la législation de ses espaces de discussions.</p>
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