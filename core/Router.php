
<?php

use App\Controller;

// Permet de rediriger l'utilisateur selon une adresse presonnalisee
class Router {

    private array $routes = [];

    public function dispatch(string $uri = '/'): void {

    // On enregistre la position du "?" dans l'URI si il existe
    $position = strpos($uri, '?');

    // Si $position est egal à true, on nettoie l'URI
    // en retirant tout ce qui se trouve apres le "?"
    if ($position) {

        $uri = substr($uri, 0, $position);
    }
        // Si l'URI est differente d'un simple slash, on continue le nettoyage
        if ($uri !== '/') {
            // Recupere le dernier caractere de mon URI
            $lastChar = substr($uri, -1);

            // Si le dernier caractere est un slash, on le retire
            if ($lastChar === '/') {
                // Retourne la chaine sans le dernier caractere
                $uri = substr($uri, 0, -1);
            }
        }

        // Si le tableau des routes n'est pas vide, alors on effectue une recherche
        if (!empty($this->routes)) {

            // Si la route existe dans la configuration, on charge le controller
            if (isset($this->routes[$uri])) {
                //list($controller, $method) = $this->routes[$uri];
                [$controller, $method] = $this->routes[$uri];

                // Ajout de l'espace de nom à mon controller
                $controller = "App\\Controller\\$controller";

                // Verifie si la classe $controller existe
                if (class_exists($controller)) {

                    // Instanciation de la classe controller
                    $controllerInstance = new $controller();

                    // Si la methode existe, on charge celle-ci
                    if (method_exists($controllerInstance, $method)) {
                        $controllerInstance->$method();
                        return;
                    }
                }
            }
        }

        // On affiche une erreur 404 si besoin
        require_once '../src/Controller/ErrorController.php';

        // Force le code de retour à 404
        http_response_code(404);

        $errorInstance = new App\Controller\ErrorController();
        $errorInstance->error404();
   }

   // Permet d'ajouter une route personnalisee
   public function add(string $route, string $controller, string $method): void {

        $this->routes[$route] = [$controller, $method];

    }

}