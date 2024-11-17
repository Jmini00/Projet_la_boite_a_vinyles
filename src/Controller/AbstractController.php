<?php

namespace App\Controller;

use App\Entity\User;

abstract class AbstractController {

    /**
     * Verifie si l'utilisateur est connecté
     */
    protected function isUserLoggedIn(): bool {

        // Verifie que la session nommee "user" existe
        return isset($_SESSION['user']) && $_SESSION['user'] instanceof User;
    }

    /**
     * Permet d'afficher une vue
     */
    protected function view(string $path, array $vars = []): void {

        $vars['isLoggedIn'] = $this->isUserLoggedIn();

        // Extrait les cles comme des variables et leur affecte
        // comme valeur, la valeur de la cle du tableau
        extract($vars);
        
        // Si le template existe, on l'affiche
        if (file_exists("../templates/$path")) {
            require_once "../templates/$path";
            return;
        }

        throw new \RuntimeException("Le template \"$path\" n'existe pas");
    }
}