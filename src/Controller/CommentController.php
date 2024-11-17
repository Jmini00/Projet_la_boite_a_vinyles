<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Repository\CommentRepository;
use PHPMailer\PHPMailer\PHPMailer;

class CommentController extends AbstractController
{

    public function __construct()
    {
        /**
         * Si l'utilisateur n'est pas connecté, on le redirige
         * vers le formulaire de connexion
         */
        if (!$this->isUserLoggedIn()) { 
            header('Location: /laboiteavinyles/login');
            exit;
        }
        if (($this->isUserLoggedIn() && $_SESSION['user']->getStatus() == '0')) {
            header('Location: /laboiteavinyles/404');
            exit;
        }
    }
    
    /**
     * Ajouter un nouveau commentaire
     */
    public function addComment(): void
    {
        $error = null;
        $success = null;
        $token = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['token'] = $token;

            // Nettoyage des données
            $content = htmlspecialchars(strip_tags($_POST['comment']));
            $token = md5(uniqid($_POST['token']));

            // Vérifie si tous est bien rempli 
            if (!empty($content))
             {
                $userId = $_SESSION['user']->getId();
                $vinyleId = $_GET['id'];
                $date = new \DateTime();

                if ($token && ($_POST['token'] == $_SESSION['token'])) {

                    // Créer un objet avec l'entité "Comment"
                    $comment = new Comment();
                    $comment->setContent($content);
                    $comment->setCommentDate($date->format('Y-m-d H:i:s'));
                    $comment->setStatus('1');
                    $comment->setUserId($userId);
                    $comment->setVinyleId($vinyleId);

                    $commentRepository = new commentRepository();
                    $commentRepository->add($comment);

                    $success = 'Votre commentaire est enregistré';
                    //var_dump($token);  
                    //exit;
                }
                } 
            } 
        
        $this->view('vinyles/comment.php', [
            'error' => $error,
            'success' => $success,
            'token' => $token
     ]);
    }

    /** 
     * Signalement commentaire
     */
    public function reportComment(): void
    {
        // Si l'ID n'existe pas ou est vide, redirection vers l'accueil de l'administration
        if (empty($_GET['id'])) {
            header('Location: /laboiteavinyles/admin');
            exit;
        }

        $commentRepository = new CommentRepository();
        $comment = $commentRepository->findOneComment($_GET['id']);

        // Si aucun projet avec cet ID
        if (!$comment) {
            header('Location: /laboiteavinyles/admin');
            exit;
        }
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = $_ENV['MAILTRAP_SMTP'];
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = $_ENV['MAILTRAP_PORT'];
        $phpmailer->Username = $_ENV['MAILTRAP_USER'];
        $phpmailer->Password = $_ENV['MAILTRAP_PASS'];
 
        // Envoi du mail
        $phpmailer->setFrom($_SESSION['user']->getEmail(),$_SESSION['user']->getFirstName());  // Expediteur
        $phpmailer->addAddress('report@laboiteavinyles.fr');  // Destinataire
        $phpmailer->Subject = 'Signalement Commentaire';
        $phpmailer->Body = "
Bonjour, ce mail est un signalement d'un commentaire.
Cordialement.

http://localhost:8888/laboiteavinyles/admin/edit/comment?id={$comment->getId()}";

        // Envoyer le mail
        if ($phpmailer->send()) {
        }

        header('Location: /laboiteavinyles?success=(signalement envoyé)');
    }
}