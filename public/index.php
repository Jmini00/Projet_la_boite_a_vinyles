
<?php

// Chargement des dependances PHP
require_once '../vendor/autoload.php';

// Demarrage de session
session_start();


//Chargement des variables d'environnements
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ .'/../');
$dotenv->load();

// Chargement du Router
require_once '../core/Router.php';

// Instancier notre routeur afin de rediriger notre utilisateur
$router = new Router();

// Routes
// Accueil
$router->add('/laboiteavinyles', 'HomeController', 'index');


// Pages divers
$router->add('/laboiteavinyles/goodies', 'HomeController', 'goodies');
$router->add('/laboiteavinyles/accessoires', 'HomeController', 'accessoires');
$router->add('/laboiteavinyles/conseils', 'HomeController', 'conseils');
$router->add('/laboiteavinyles/bien-choisir-son-ampli', 'HomeController', 'ampli');
$router->add('/laboiteavinyles/bien-choisir-sa-platine', 'HomeController', 'platine');
$router->add('/laboiteavinyles/entretenir-sa-platine-et-ses-vinyles', 'HomeController', 'cleaning');
$router->add('/laboiteavinyles/mentions-legales', 'HomeController', 'mentions');
$router->add('/laboiteavinyles/charte-de-moderation', 'HomeController', 'charte');
$router->add('/laboiteavinyles/histoire-du-vinyle', 'HomeController', 'histoire');


// Page contact
$router->add('/laboiteavinyles/contact', 'HomeController', 'contact');


// Insertion de donnees d'essai
$router->add('/laboiteavinyles/fixtures', 'FixtureController', 'index');



// Inscription
$router->add('/laboiteavinyles/register', 'RegistrationController', 'register');

// Connexion
$router->add('/laboiteavinyles/login', 'AuthController', 'login');

// Deconnexion
$router->add('/laboiteavinyles/logout', 'AuthController', 'logout');




// Page tous les vinyles
$router->add('/laboiteavinyles/vinyles', 'VinyleController', 'index');

// Detail d'un vinyle
$router->add('/laboiteavinyles/vinyles/details', 'VinyleController', 'details');

// Ajouter un commentaire
$router->add('/laboiteavinyles/vinyles/comment', 'CommentController', 'addComment');

// Signaler un commentaire
$router->add('/laboiteavinyles/vinyles/details/report', 'CommentController', 'reportComment');

// Page tous les vinyles Liam Gallagher
$router->add('/laboiteavinyles/vinyles/collection-Liam-Gallagher', 'VinyleController', 'findByArtist');

// Page tous les vinyles UK
$router->add('/laboiteavinyles/vinyles/collection-God-save-the-king', 'VinyleController', 'findByCountry');

// Page tous les vinyles 60/80
$router->add('/laboiteavinyles/vinyles/collection-60s-80s', 'VinyleController', 'findByYear');

// Page categories Rock
$router->add('/laboiteavinyles/vinyles-rock/categorie', 'VinyleController', 'findByCatRock');

// Page categories Pop
$router->add('/laboiteavinyles/vinyles-pop/categorie', 'VinyleController', 'findByCatPop');

// Page categories Metal
$router->add('/laboiteavinyles/vinyles-metal/categorie', 'VinyleController', 'findByCatMetal');

// Page categories Live
$router->add('/laboiteavinyles/vinyles-live/categorie', 'VinyleController', 'findByCatLive');

// Page categories Pepites
$router->add('/laboiteavinyles/vinyles-pepites/categorie', 'VinyleController', 'findByCatPepites');

// Liker un vinyle
$router->add('/laboiteavinyles/vinyles/details/like', 'VinyleController', 'like');



// Accueil de l'administration
$router->add('/laboiteavinyles/admin', 'AdminController', 'index');

// Administration - Edition d'un membre
$router->add('/laboiteavinyles/admin/edit/user', 'AdminController', 'editUser');

// Administration - Suppression d'un membre
$router->add('/laboiteavinyles/admin/delete/user', 'AdminController', 'deleteUser');

// Administration - Ajout d'un vinyle
$router->add('/laboiteavinyles/admin/new/vinyle', 'AdminController', 'addVinyle');

// Administration - Edition d'un vinyle
$router->add('/laboiteavinyles/admin/edit/vinyle', 'AdminController', 'editVinyle');

// Administration - Suppression d'un vinyle
$router->add('/laboiteavinyles/admin/delete/vinyle', 'AdminController', 'deleteVinyle');

// Administration - Edition d'un commentaire
$router->add('/laboiteavinyles/admin/edit/comment', 'AdminController', 'editComment');

// Administration - Suppression d'un commentaire
$router->add('/laboiteavinyles/admin/delete/comment', 'AdminController', 'deleteComment');

// Administration - Ajout d'un pays
$router->add('/laboiteavinyles/admin/new/country', 'AdminController', 'addCountry');

// Administration - Ajout d'une categorie
$router->add('/laboiteavinyles/admin/new/category', 'AdminController', 'addCategory');

// Administration - Ajout d'un artiste
$router->add('/laboiteavinyles/admin/new/artist', 'AdminController', 'addArtist');

// Administration - Edition d'un artiste
$router->add('/laboiteavinyles/admin/edit/artist', 'AdminController', 'editArtist');

// Administration - Ajout d'un morceau
$router->add('/laboiteavinyles/admin/new/tracklist', 'AdminController', 'addTracklist');



// Erreur 404
$router->add('/laboiteavinyles/404', 'ErrorController', 'error404');



// Dispatch
$router->dispatch($_SERVER['REQUEST_URI']);