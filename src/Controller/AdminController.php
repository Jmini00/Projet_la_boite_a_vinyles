<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Entity\Categorie;
use App\Entity\Country;
use App\Entity\Tracklist;
use App\Entity\Comment;
use App\Repository\UserRepository;
use App\Service\UploadService;
use App\Entity\Vinyle;
use App\Repository\ArtistRepository;
use App\Repository\CategoryRepository;
use App\Repository\CommentRepository;
use App\Repository\CountryRepository;
use App\Repository\TracklistsRepository;
use App\Repository\VinyleRepository;
use PHPMailer\PHPMailer\PHPMailer;


class AdminController extends AbstractController
{
    public function __construct()
    {
        /**
         * Si l'utilisateur n'est pas connecté ou si connecté et statut "USER"
         * on affiche erreur 404
         */ 
        if (!$this->isUserLoggedIn() || ($this->isUserLoggedIn() && $_SESSION['user']->getRole() == 'USER')) { 
            header('Location: /laboiteavinyles/404');
            exit;
        }
    }
  
    /**
     * Accueil de l'administration
     */
    public function index(): void
    {
        // Sélection de tous les utilisateurs/vinyles/commentaires/artistes...
        $userRepository = new UserRepository();
        $vinyleRepository = new VinyleRepository;
        $commentRepository = new CommentRepository;
        $artistRepository = new ArtistRepository;
        $categoryRepository = new CategoryRepository;
        $countryRepository = new CountryRepository;

        $this->view('admin/index.php', [
            'users' => $userRepository->findAll(),
            'vinyls' => $vinyleRepository->findAll(),
            'comments' => $commentRepository->findAllComments(),
            'artists' => $artistRepository->findAll(),
            'categories' => $categoryRepository->findAll(),
            'countries' => $countryRepository->findAll(),
        ]);
    }

    /**
     * Suppression d'un utilisateur
     */
    public function deleteUser(): void
    {
        // Si l'ID n'existe pas ou est vide, redirection vers l'accueil de l'administration
        if (empty($_GET['id'])) {
            header('Location: /laboiteavinyles/admin');
            exit;
        }

        $userRepository = new UserRepository();
        $user = $userRepository->find($_GET['id']);

        // Si aucun ID
        if (!$user) {
            header('Location: /laboiteavinyles/admin');
            exit;
        }

        // Suppression de l'ID en base de données
        $userRepository = new UserRepository();
        $userRepository->delete($user);

        header('Location: /laboiteavinyles/admin?success=Le membre a bien été supprimé');
    }

    /**
     * Edition d'un utilisateur
     */
    public function editUser(): void {

        $token = null;

        // Si l'ID n'existe pas ou est vide, redirection vers l'accueil de l'administration
        if (empty($_GET['id'])) {
            header('Location: /admin');
            exit;
        }

        $userRepository = new UserRepository();
        $user = $userRepository->find($_GET['id']);

        // Si aucun membre avec cet ID
        if (!$user) {
            header('Location: /admin');
            exit;
        }

        // Si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['token'] = $token;

            // Nettoyage des données
            $username = htmlspecialchars(strip_tags($_POST['username']));
            $lastname = htmlspecialchars(strip_tags($_POST['lastname']));
            $firstname = htmlspecialchars(strip_tags($_POST['firstname']));
            $email = htmlspecialchars(strip_tags($_POST['email']));
            $role = htmlspecialchars(strip_tags($_POST['role']));
            $status = htmlspecialchars(strip_tags($_POST['status']));
            $token = md5(uniqid($_POST['token']));


            // Vérifie si tous est bien rempli
            if (
                !empty($username) &&
                !empty($lastname) &&
                !empty($firstname) &&
                !empty($email) &&
                !empty($role) &&
                !empty($status)
            ) {
            
                if ($token && ($_POST['token'] == $_SESSION['token'])) {
                    // Modifie l'entité User
                    $user->setRole($role);
                    $user->setStatus($status);


                    $userRepository = new UserRepository();
                    $userRepository->edit($user);

                    $success = 'Votre nouveau membre est enregistré';
                }
                } else {
                    $error = 'Tous les champs sont obligatoires';
                }
            } 
        
        $this->view('admin/user/edit.php', [
            'user' => $user,
            'token' => $token,
            'error' => $error ?? null, 
            'success' => $success ?? null 
        ]);    
    }

    /**
     * Edition d'un vinyle
     */
    public function editVinyle(): void
    {
        $token = null;

        // Si l'ID n'existe pas ou est vide, redirection vers l'accueil de l'administration
        if (empty($_GET['id'])) {
            header('Location: /admin');
            exit;
        }
 
        $vinyleRepository = new VinyleRepository();
        $vinyle = $vinyleRepository->find($_GET['id']);
        $tracklist = $vinyleRepository->findTracklist($_GET['id']);

        // Si aucun vinyle avec cet ID
        if (!$vinyle) {
            header('Location: /admin');
            exit;
        }

        // Si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['token'] = $token;

            // Nettoyage des données
            $name = htmlspecialchars(strip_tags($_POST['name']));
            $description = htmlspecialchars(strip_tags($_POST['description']));
            //$artistedesc = htmlspecialchars(strip_tags($_POST['artistedescription']));
            $releaseDate = htmlspecialchars(strip_tags($_POST['releaseDate']));
            $alt = htmlspecialchars(strip_tags($_POST['alt']));
            $token = md5(uniqid($_POST['token']));

            // Vérifie si tous est bien rempli
            if (
                !empty($name) &&
                !empty($description) &&
                !empty($releaseDate) &&
                //!empty($artistedesc) &&
                !empty($alt)
            ) {
                // Sauvegarde le nom actuel de l'image de preview
                $preview = $vinyle->getPreview();

                // Si une image est fournie, on l'upload
                if ($_FILES['preview']['error'] === UPLOAD_ERR_OK) {
                    // Upload de l'image de preview
                    $uploadService = new UploadService();
                    $preview = $uploadService->upload($_FILES['preview'], $preview);
                }

                if ($preview) {
                    
                    if ($token && ($_POST['token'] == $_SESSION['token'])) {

                    // Modifie l'entité Vinyle
                    $vinyle->setName($name);
                    $vinyle->setDescription($description);
                    //$vinyle->setArtisteDesc($artistedesc);
                    $vinyle->setPreview($preview);
                    $vinyle->setReleaseDate($releaseDate);
                    $vinyle->setAlt($alt);

                    $vinyleRepository = new VinyleRepository();
                    $vinyleRepository->edit($vinyle);

                    $success = 'Votre nouveau vinyle est enregistré';
                    }
                } else {
                    $error = 'Le fichier est invalide';
                }
            } else {
                $error = 'Tous les champs sont obligatoires';
            }
        }

        $this->view('admin/vinyle/edit.php', [
            'vinyle' => $vinyle,
            'tracklist' => $tracklist,
            'token' => $token,
            'error' => $error ?? null, 
            'success' => $success ?? null 
        ]);
    }

    /**
     * Nouveau vinyle
     */
    public function addVinyle(): void
    {
        $error = null;
        $success = null;
        $token = null;
        $artistRepository = new ArtistRepository;
        $artiste = $artistRepository->findAll();
        $categoryRepository = new CategoryRepository;
        $category = $categoryRepository->findAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['token'] = $token;

            // Nettoyage des données
            $name = htmlspecialchars(strip_tags($_POST['name']));
            $description = htmlspecialchars(strip_tags($_POST['description']));
            $releaseDate = htmlspecialchars(strip_tags($_POST['releaseDate']));
            $alt = htmlspecialchars(strip_tags($_POST['alt']));
            $artiste = htmlspecialchars(strip_tags($_POST['artist']));
            $category = htmlspecialchars(strip_tags($_POST['category']));
            $token = md5(uniqid($_POST['token']));

            // Vérifie si tous est bien rempli
            if (
                !empty($name) &&
                !empty($description) &&
                !empty($releaseDate) &&
                !empty($alt) &&
                !empty($artiste) &&
                !empty($category) &&
                $_FILES['preview']['error'] === UPLOAD_ERR_OK
            ) {
                // Upload de l'image de preview
                $uploadService = new UploadService();
                $preview = $uploadService->upload($_FILES['preview']);

                if ($preview) {

                    if ($token && ($_POST['token'] == $_SESSION['token'])) {
                    // Créer un objet avec l'entité "Vinyle"
                    $vinyle = new Vinyle();
                    $vinyle->setName($name);
                    $vinyle->setDescription($description);
                    $vinyle->setPreview($preview);
                    $vinyle->setReleaseDate($releaseDate);
                    $vinyle->setAlt($alt);
                    $vinyle->setArtiste($artiste);
                    $vinyle->setCategorie($category);
                    $vinyle->setLikes('0');

                    $vinyleRepository = new VinyleRepository();
                    $vinyleRepository->add($vinyle);

                    $success = 'Votre nouveau vinyle est enregistré';
                    }
                } else {
                    $error = 'Le fichier est invalide';
                }
            } else {
                $error = 'Tous les champs sont obligatoires';
            }
        }

        $this->view('admin/vinyle/add.php', [
            'error' => $error,
            'success' => $success,
            'token' => $token,
            'artists' => $artiste,
            'categories' => $category
        ]);
    }

    /**
     * Edition d'un commentaire
     */
    public function editComment(): void
    {
        $token = null;

        // Si l'ID n'existe pas ou est vide, redirection vers l'accueil de l'administration
        if (empty($_GET['id'])) {
            header('Location: /admin');
            exit;
        }

        $commentRepository = new CommentRepository();
        $comment = $commentRepository->findOneComment($_GET['id']);

        // Si aucun commentaire avec cet ID
        if (!$comment) {
            header('Location: /admin');
            exit;
        }

        // Si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['token'] = $token;

            // Nettoyage des données
            $status = htmlspecialchars(strip_tags($_POST['status']));
            $contenu = htmlspecialchars(strip_tags($_POST['contenu']));
            $date = htmlspecialchars(strip_tags($_POST['date']));
            $vinyl = htmlspecialchars(strip_tags($_POST['vinyl']));
            $username = htmlspecialchars(strip_tags($_POST['username']));
            $useremail = htmlspecialchars(strip_tags($_POST['useremail']));
            $token = md5(uniqid($_POST['token']));

            // Vérifie si tous est bien rempli
            if (
                !empty($status) &&
                !empty($contenu) &&
                !empty($date) &&
                !empty($vinyl) &&
                !empty($username) &&
                !empty($useremail)
            ) {
                if ($token && ($_POST['token'] == $_SESSION['token'])) {

                    // Modifie l'entité Commentaire
                    $comment->setStatus($status);
 
                    $commentRepository = new CommentRepository();
                    $commentRepository->edit($comment);

                    $phpmailer = new PHPMailer();
                    $phpmailer->isSMTP();
                    $phpmailer->Host = $_ENV['MAILTRAP_SMTP'];
                    $phpmailer->SMTPAuth = true;
                    $phpmailer->Port = $_ENV['MAILTRAP_PORT'];
                    $phpmailer->Username = $_ENV['MAILTRAP_USER'];
                    $phpmailer->Password = $_ENV['MAILTRAP_PASS'];

                    // Envoi du mail
                    $phpmailer->setFrom('report@laboiteavinyles.fr');  // Expediteur
                    $phpmailer->addAddress($useremail, $username);  // Destinataire
                    $phpmailer->Subject = 'Signalement La Boite a Vinyles';
                    $phpmailer->Body = "Bonjour $username :
Votre commentaire a fait l'objet d'un signalement par un des membres.
Nous avons pris la decision de le retirer de la discussion.
Merci de respecter la charte de moderation du site sous peine
de voir votre acces au forum restreint.
Cordialement";

                    // Envoyer le mail
                    if ($phpmailer->send()) {
                        $success = 'Le commentaire est modifié et le membre est averti de la modification'; 
                    }
                }//$success = 'Votre commentaire est modifié';
                } 
                else {
    
        $error = 'Tous les champs sont obligatoires';
    }
}
            
        $this->view('admin/comments/edit.php', [
            'comment' => $comment,
            'token' => $token,
            'error' => $error ?? null, // $error !== null ? $error : null
            'success' => $success ?? null // Coalescence des nuls (Nullish coalescing operator)
        ]);
    }

    /**
     * Suppression d'un commentaire
     */
    public function deleteComment(): void
    {
        // Si l'ID n'existe pas ou est vide, redirection vers l'accueil de l'administration
        if (empty($_GET['id'])) {
            header('Location: /laboiteavinyles/admin');
            exit;
        }
 
        $commentRepository = new CommentRepository();
        $comment = $commentRepository->findOneComment($_GET['id']);

        // Si aucun ID
        if (!$comment) {
            header('Location: /laboiteavinyles/admin');
            exit;
        }

        // Suppression de l'ID en base de données
        $commentRepository = new CommentRepository();
        $commentRepository->delete($comment);

        header('Location: /laboiteavinyles/admin?success=Le commentaire a bien été supprimé');
    }

    /**
     * Ajouter un nouveau pays
     */
    public function addCountry(): void
    {
        $error = null;
        $success = null;
        $token = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['token'] = $token;

            // Nettoyage des données
            $name = htmlspecialchars(strip_tags($_POST['name']));
            $token = md5(uniqid($_POST['token']));

            // Vérifie si tous est bien rempli
            if (!empty($name)) {
                
                if ($token && ($_POST['token'] == $_SESSION['token'])) {
                    // Créer un objet avec l'entité "Pays"
                    $country = new Country();
                    $country->setName($name);
                    
                    $countryRepository = new CountryRepository();
                    $countryRepository->add($country);

                    $success = 'Votre nouveau pays est enregistré';
                }
            } else {
                $error = 'Tous les champs sont obligatoires';
            }
        }

        $this->view('admin/countries/add.php', [
            'error' => $error,
            'success' => $success,
            'token' => $token
        ]);
    }

    /**
     * Ajouter une nouvelle categorie
     */
    public function addCategory(): void
    {
        $error = null;
        $success = null;
        $token = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['token'] = $token;

            // Nettoyage des données
            $name = htmlspecialchars(strip_tags($_POST['name']));
            $token = md5(uniqid($_POST['token']));
        
            // Vérifie si tous est bien rempli
            if (!empty($name)) {
                
                    if ($token && ($_POST['token'] == $_SESSION['token'])) {
                    // Créer un objet avec l'entité "Categorie"
                    $category = new Categorie();
                    $category->setName($name);
                    
                    $categoryRepository = new CategoryRepository();
                    $categoryRepository->add($category);

                    $success = 'Votre nouvelle catégorie est enregistrée';
                    }
            } else {
                $error = 'Tous les champs sont obligatoires';
            }
        }

        $this->view('admin/categories/add.php', [
            'error' => $error,
            'success' => $success,
            'token' => $token
        ]);
    }

    /** 
     * Ajouter nouveaux morceaux
     */
    public function addTracklist(): void 
    {
        $error = null;
        $success = null;
        $token = null;
        $vinyleRepository = new VinyleRepository;
        $vinyl = $vinyleRepository->findAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['token'] = $token;

            // Nettoyage des donnes
            $title = htmlspecialchars(strip_tags($_POST['title']));
            $vinyl = htmlspecialchars(strip_tags($_POST['vinyle']));
            $token = md5(uniqid($_POST['token']));

            // Verifie si tout est bien rempli
            if (!empty($title) &&
            !empty($vinyl)) {

                if ($token && ($_POST['token'] == $_SESSION['token'])) {

                // Creer un objet avec l'entité "Tracklist"
                    $tracklist = new Tracklist();
                    $tracklist->setTitle($title);
                    $tracklist->setVinyle($vinyl);
                    
                    $tracklistsRepository = new TracklistsRepository();
                    $tracklistsRepository->add($tracklist);

                    $success = 'Votre nouveau morceau est enregistré';
                }
            } else {
                $error = 'Tous les champs sont obligatoires';
            }
            }
            $this->view('admin/tracklists/add.php', [
                'error' => $error,
                'success' => $success,
                'token' => $token,
                'vinyls' => $vinyl 
            ]);
        }
    
    /**
     * Ajouter un nouvel artiste
     */
    public function addArtist(): void
    {
        $error = null;
        $success = null;
        $token = null;
        $countryRepository = new CountryRepository;
        $country = $countryRepository->findAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['token'] = $token;

            // Nettoyage des données
            $name = htmlspecialchars(strip_tags($_POST['name']));
            $description = htmlspecialchars(strip_tags($_POST['description']));
            $country = htmlspecialchars(strip_tags($_POST['country']));
            $token = md5(uniqid($_POST['token']));

            // Vérifie si tous est bien rempli
            if (!empty($name) &&
                !empty($description)) {
                
                    if ($token && ($_POST['token'] == $_SESSION['token'])) {
                    //$country = $_GET['id'];

                    // Créer un objet avec l'entité "Artiste"
                    $artist = new Artist();
                    $artist->setName($name);
                    $artist->setDescription($description);
                    $artist->setCountry($country);
                    
                    $artistRepository = new ArtistRepository();
                    $artistRepository->add($artist);

                    $success = 'Votre nouvel artiste est enregistré';
                    }
            } else {
                $error = 'Tous les champs sont obligatoires';
            }
        }

        $this->view('admin/artists/add.php', [
            'error' => $error,
            'success' => $success,
            'country' => $country,
            'token' => $token
        ]);
    }

    /**
     * Edition d'un artiste
     */
    public function editArtist(): void {

        $token = null;
        $artistRepository = new ArtistRepository();
        $artist = $artistRepository->find($_GET['id']);

        // Si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['token'] = $token;

            // Nettoyage des données
            $name = htmlspecialchars(strip_tags($_POST['name']));
            $description = htmlspecialchars(strip_tags($_POST['description']));
            $country = htmlspecialchars(strip_tags($_POST['country']));
            $token = md5(uniqid($_POST['token']));

            // Vérifie si tous est bien rempli
            if (
                !empty($name) &&
                !empty($description) &&
                !empty($country)
            ) {
                if ($token && ($_POST['token'] == $_SESSION['token'])) {

                    // Modifie l'entité Artiste
                    $artist->setName($name);
                    $artist->setDescription($description);
                    $artist->setCountry($country);

                    $artistRepository = new ArtistRepository();
                    $artistRepository->edit($artist);

                    $success = 'Votre nouvel artiste est enregistré';
                }
                } else {
                    $error = 'Tous les champs sont obligatoires';
                }
            } 
        
        $this->view('admin/artists/edit.php', [
            'artist' => $artist,
            'token' => $token,
            'error' => $error ?? null, 
            'success' => $success ?? null 
        ]);    
    }
}
