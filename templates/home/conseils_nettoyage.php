<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Nettoyer ses vinyles et entretenir sa platine - La Boite à Vinyles">
    <title>Nettoyer ses vinyles et entretenir sa platine - La Boite à Vinyles</title>
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
            <img src="public/assets/vinyles_grand.webp" alt="illustration collection vinyles">
            <h3>Comment nettoyer ses vinyles et entretenir sa platine ?</h3>
            <blockquote cite="https://www.group-digital.fr/comment-nettoyer-ses-vinyles-et-entretenir-sa-platine-.html">
                <p>Avec le retour en force de la platine et des disques vinyle, il faut se rappeler
                    de l’importance d’un nettoyage régulier pour obtenir la meilleure expérience audio possible.
                    Découvrez quels sont les trucs et astuces pour les garder impeccablement propres.</p>
                <h4>Pourquoi est-ce important de garder la platine et ses vinyles propres ?</h4>
                <p>Lorsque vous notez des rayures sur un disque vinyle ou décelez des bruits parasites à l’écoute,
                    il s’agit habituellement de distorsions causées par l’accumulation de la poussière sur la platine ou
                    le disque lui-même.
                    C'est souvent le résultat d'un entretien qui a été remis à plus tard...Pour éviter ce genre de
                    problèmes,
                    pensez à dépoussiérer vos disques après chaque écoute, et nettoyez-les en profondeur dès qu’ils en
                    ont besoin.</p>
                <h4>Comment nettoyer les disques et la platine ?</h4>
                <p>Il faut savoir que les vinyles neufs ont été recouverts d’une pellicule antiadhérente pour les
                    protéger ;
                    elle doit être retirée pour profiter d’un son optimal. Il faut donc nettoyer les disques avant même
                    de les écouter la première fois.
                    Pour l’entretien des disques et de la platine, vous pouvez vous procurer un kit de nettoyage prévu à
                    cette fin.
                    On y trouve une brosse au fini velouté, une bouteille de liquide antistatique ainsi qu’une brosse de
                    nettoyage* (en fibres de carbone).
                    Tenez votre disque en le retenant dans le centre, avec votre index, tout en appuyant votre paume sur
                    le rebord extérieur.
                    S’il s’agit d’un disque neuf ou propre, seule la brosse en fibres de carbone suffit à la
                    dépoussiérer.
                    Pour des disques sales, l’utilisation du liquide et de la brosse en velours est incontournable.
                    Brossez toujours dans le sens des rainures, en douceur, jamais dans le sens inverse ou
                    à travers les sillons (quand le disque est en rotation). Il existe également des rouleaux de
                    nettoyage en silicone
                    pour débarrasser les disques vinyle des poussières et saletés. Lavables, ils sont donc réutilisables
                    pendant longtemps.
                    *Les professionnels utilisent une brosse douce pour le diamant ; c’est un véritable outil de
                    précision
                    pour enlever toute poussière, poils fins et fibres de la platine et des disques vinyle.</p>
                <h4>L'entretien de la platine vinyle : pensez au stylus (diamant)</h4>
                <p>On ne réalise pas toujours à quel point le mauvais état de la cellule peut causer de l’usure sur un
                    disque vinyle.
                    Aussi, il faut s’assurer que le stylus (la pointe de lecture en diamant) reste impeccablement
                    propre.
                    Soufflez d’abord dessus pour y dégager les petites fibres et poussière qui peuvent s’y déposer.
                    Sachez qu’une pointe en diamant, disposant d’une durée de vie de 1 000 heures environ, doit être
                    changée régulièrement.
                    Note : Pour éviter de vous retrouver avec un tourne-disque présentant un stylus avec un problème de
                    taille ou de polissage,
                    privilégiez les appareils de très bonnes marques.</p>
                <h4>Les machines à nettoyage, un appareil indispensable pour nettoyer ses vinyles</h4>
                <p>Ce type d’appareil est indispensable si vous possédez une grande collection de disques vinyle.
                    C’est la méthode la plus professionnelle pour prendre soin de vos disques vinyles et vos
                    microsillons.
                    En revanche, vous pourrez vous passer de cet appareil si votre collection n’est pas très étendue.
                </p>
                <h4>Le choix des chiffons pour un nettoyage quotidien des disques</h4>
                <p>Les chiffons d’entretien en microfibres de coton sont à privilégier. Indispensables pour l’entretien
                    quotidien de vos disques,
                    leur utilisation empêche la poussière de s’accumuler. Évitez d’employer des chiffons en tissu rêche
                    ; ils pourraient
                    rayer la surface délicate des disques et autres composantes du tourne-disque. N’oubliez pas qu’un
                    disque rayé ne peut être remis à neuf.</p>
                <h4>Les liquides de nettoyage pour entretenir ses disques vinyles</h4>
                <p>Plusieurs fabricants ont conçu des liquides de nettoyage pour l’entretien des disques vinyle, de la
                    platine, et du diamant.
                    Certains produits sont proposés en vaporisateur, faciles à appliquer puis à essuyer avec le chiffon
                    fourni par la marque.
                    Ils dégraissent parfaitement, dépoussièrent et enlèvent les charges statiques. Lisez bien les
                    directives des fabricants
                    sur les contenants ; certaines solutions ont été prévues pour un entretien plus en profondeur des
                    sillons des disques vinyle.
                    Il est déconseillé d'utiliser le savon à vaisselle avec de l'eau chaude pour procéder à cette tâche.
                    Les disques risquent de conserver une pellicule collante, difficile à enlever une fois séchée.
                    L’eau déminéralisée, un dégraissant naturel, s'avère un meilleur choix pour un nettoyage tout en
                    douceur.
                    Elle est souveraine pour enlever les traces restantes après un nettoyage.</p>
                <h4>Savoir prendre soin de ses disques et du plateau</h4>
                <p>Considérez vos disques vinyle comme s’il s’agissait d’objets de collection. Pour éviter leur
                    déformation,
                    rangez-les verticalement (jamais horizontalement) et sans les resserrer les uns près des autres.
                    Chaque disque devrait, idéalement, être protégé par une pochette à disque ; cela réduit beaucoup
                    le risque d’accumulation de poussière dans les sillons. Il est toujours préférable de se procurer
                    une pochette aux bords arrondis et à la texture plus fine, pour insérer et retirer le disque plus
                    facilement.
                    Pour votre platine, investissez dans l’achat d’un couvre-plateau, si vous n’en avez pas déjà.
                    Il est fortement recommandé de ranger votre platine sur une étagère murale solide et stable,
                    séparée des autres éléments de votre système. Si vous craquez pour le style vintage,
                    pourquoi ne pas dénicher un ancien meuble Hi-Fi robuste, en bois, pour y installer fièrement votre
                    platine ?
                    En suivant ces conseils, vous obtiendrez une expérience d’écoute optimale et votre platine
                    et vos disques vinyle demeureront en bon état beaucoup plus longtemps.</p>
            </blockquote>
                </section>

        <section id="videos">
            <iframe width="500" height="315"
                src="https://www.youtube.com/embed/6mp9bZm3ueQ?si=q-ctiUtBQJFv2GDX&amp;start=3"
                title="YouTube video player" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <iframe width="500" height="315" src="https://www.youtube.com/embed/LrIAYW9pBks?si=BT-os5gaLHsJnM10"
                title="YouTube video player" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
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