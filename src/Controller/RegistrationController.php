<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;

/**
 * Gestion de l'inscription
 */
class RegistrationController extends AbstractController
{

    /** Deconnexion de l'utilisateur */ 
    public function logout(): void {
        unset($_SESSION['user']);
        header('Location: /laboiteavinyles');
    }
    /**
     * Inscription
     */
    public function register()
    {
        $error = null; 
        $token = null;

        // Inscription
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_SESSION['token'] = $token;
            
            // Nettoyage
            $lastname = htmlspecialchars(strip_tags($_POST['lastname']));
            $firstname = htmlspecialchars(strip_tags($_POST['firstname']));
            $username = htmlspecialchars(strip_tags($_POST['username']));
            $email = htmlspecialchars(strip_tags($_POST['email']));
            $password = htmlspecialchars(strip_tags($_POST['password']));
            $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{12,}$/';
            $patternLastname = '/[a-zA-Z].{2,50}/';
            $patternFirstname = '/[a-zA-Z-].{3,50}/';
            $patternUsername = '/[a-zA-Z-\W_\d].{5,30}/';
            $token = md5(uniqid($_POST['token']));
                  
            // Vérifier si le formulaire est rempli, sinon erreur
            if (!empty($lastname)
             && !empty($firstname)
             && !empty($username)
             && !empty($email)
              && !empty($password)) {

                // Verifie le mot de passe
                if (preg_match($pattern, $password)) {
                    if (preg_match($patternLastname, $lastname)) {
                        if (preg_match($patternFirstname, $firstname)) {
                            if (preg_match($patternUsername, $username)) {
                // Verifie si le mail est valide
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                // Vérifie si un utilisateur existe via l'adresse email en BDD, sinon erreur
                $userRepository = new UserRepository();
                $user = $userRepository->findByUsername($email);
                $userName = $userRepository->findByName($username);
                // Vérifie si l'email et identifiant n'existent pas
                if (!$user && !$userName) {
                      
                    if ($token && ($_POST['token'] == $_SESSION['token'])) {

                    // Créer un objet avec l'entité "User" 
                    $user = new User();
                    $user->setLastname($lastname);
                    $user->setFirstname($firstname);
                    $user->setUsername($username);
                    $user->setEmail($email);
                    $user->setPassword(password_hash($password, PASSWORD_DEFAULT));
                    $user->setRole('USER');
                    $user->setStatus('1');

                    $userRepository = new UserRepository();
                    $userRepository->add($user);
                    
                    // Redirection vers le formulaire de connexion
                    header('Location: /laboiteavinyles/login');
                    exit;
                    } 
                }
            
                else {
                    $error = 'Données invalides';
                }
            
            } else {
                $error = 'Email invalide';
            }
        }else{
            $error = 'Identifiant invalide';
        }
        }else{
            $error = 'Prénom invalide';
        }
        }else{
            $error = 'Nom invalide';
        }
        } else {
            $error = 'Mot de passe invalide';
        }
    
                } else {
                    $error = 'Données invalides';
                }
            } 

        $this->view('registration/register.php', [
            'error' => $error,
            'token' => $token
        ]);
    }
}