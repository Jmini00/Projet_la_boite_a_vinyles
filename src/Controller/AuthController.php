<?php

namespace App\Controller;

use App\Repository\UserRepository;

/**
 * Gestion de l'authentification
 */
class AuthController extends AbstractController
{

    /** Deconnexion de l'utilisateur */ 
    public function logout(): void {
        unset($_SESSION['user']);
        session_destroy();
        header('Location: /laboiteavinyles');
    }
    /**
     * Connexion
     */
    public function login()
    {
        $error = null;
        $token = null; 

        // Connexion
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //$token = md5(uniqid());
            $_SESSION['token'] = $token;

            // Nettoyage
            $email = htmlspecialchars(strip_tags($_POST['email']));
            $password = htmlspecialchars(strip_tags($_POST['password']));
            $token = md5(uniqid($_POST['token']));
            //$_SESSION['token'] = $token; 

            // Vérifier si le formulaire est rempli, sinon erreur
            if (!empty($email) && !empty($password)) {
                // Vérifie si un utilisateur existe via l'adresse email en BDD, sinon erreur
                $userRepository = new UserRepository();
                $user = $userRepository->findByUsername($email);
 
                // Vérifie si l'utilisateur existe et si mot de passe est correct, sinon erreur
                if ($user && password_verify($password, $user->getPassword())) {
                    // Création de la session de connexion
                    $_SESSION['user'] = $user;
                    // Retire la clé password de la session
                    unset($_SESSION['password']);
                    //var_dump($token);  
                    //exit;
                    if ($token && ($_POST['token'] == $_SESSION['token'])) {
                        
                    // Redirection vers l'administration
                    header('Location: /laboiteavinyles');
                    exit;
                } 
            }else {
                    $error = 'Identifiants invalides';
                }
            } else {
                $error = 'Identifiants invalides';
            }
        }

        $this->view('auth/login.php', [
            'error' => $error,
            'token' => $token
        ]);
    }
}