<?php

namespace App\Controller;

use App\Repository\VinyleRepository;
use PHPMailer\PHPMailer\PHPMailer;

class HomeController extends AbstractController {

    /** 
     * Page d'accueil
     */
    public function index(): void {

        $vinyleRepository = new VinyleRepository;

        $this->view('home/index.php', [
            'vinyls' => $vinyleRepository->findOne()
        ]);
    }

    /** 
     * Page Histoire
     */
    public function histoire(): void {
        $this->view('home/histoire.php');
    }

    /** 
     * Page Conseils
     */
    public function conseils(): void {
        $this->view('home/conseils.php');
    }

    /** 
     * Page Conseils Ampli
     */
    public function ampli(): void {
        $this->view('home/conseils_ampli.php');
    }

    /** 
     * Page Conseils Platine
     */
    public function platine(): void {
        $this->view('home/conseils_platine.php');
    }

    /** 
     * Page Conseils Entretien
     */
    public function cleaning(): void {
        $this->view('home/conseils_nettoyage.php');
    }

    /** 
     * Page Goodies
     */
    public function goodies(): void {
        $this->view('home/goodies.php');
    }

    /** 
     * Page Accessoires
     */
    public function accessoires(): void {
        $this->view('home/accessoires.php');
    }

    /** 
     * Page Charte
     */
    public function charte(): void {
        $this->view('home/charte.php');
    }

    /** 
     * Page Mentions Legales
     */
    public function mentions(): void {
        $this->view('home/mentions.php');
    }

    /** 
     * Page de contact
     */
    public function contact(): void {

        $error = null;
        $success = null;
        $token = null;

        // Si une methode POST est recue
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['token'] = $token;

            // Nettoyage des donnees
            $name = htmlspecialchars(strip_tags($_POST['name']));
            $email = htmlspecialchars(strip_tags($_POST['email']));
            $content = htmlspecialchars(strip_tags($_POST['content']));
            $title = htmlspecialchars(strip_tags($_POST['title']));
            $token = md5(uniqid($_POST['token']));

            // Verifie si tous les champs sont remplis
            if (!empty($name)
                && !empty($email)
                && !empty($content)
                && !empty($title)) {
   
                // Verifie si le mail est valide
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                    // Envoi de l'email avec PHPMailer
                    // Connecter au SMTP de Mailtrap
                    $phpmailer = new PHPMailer();
                    $phpmailer->isSMTP();
                    $phpmailer->Host = $_ENV['MAILTRAP_SMTP'];
                    $phpmailer->SMTPAuth = true;
                    $phpmailer->Port = $_ENV['MAILTRAP_PORT'];
                    $phpmailer->Username = $_ENV['MAILTRAP_USER'];
                    $phpmailer->Password = $_ENV['MAILTRAP_PASS'];

                    // Envoi du mail
                    $phpmailer->setFrom($email, $name);  // Expediteur
                    $phpmailer->addAddress($_ENV['USER_EMAIL'], $_ENV['USER_NAME']);  // Destinataire
                    $phpmailer->Subject = $title;
                    $phpmailer->Body = $content;

                    if ($token && ($_POST['token'] == $_SESSION['token'])) {

                    // Envoyer le mail
                    if ($phpmailer->send()) {

                        $success = 'Votre message a bien été envoyé !';
                        //var_dump($token);  
                        //exit; 
                    }
                    } else {
                        // 
                        $error = $phpmailer->ErrorInfo;
                    } 
                } else {
                    $error = 'Votre adresse email est invalide';
                }
            }else {
                $error = 'Veuillez remplir tous les champs';
            }

        }
        // Affichage du template
        $this->view('home/contact.php', [
            'error' => $error,
            'success' => $success,
            'token' => $token
        ]);        
    }
}