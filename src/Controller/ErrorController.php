<?php

namespace App\Controller;


class ErrorController extends AbstractController {

    /**
     * Affiche une page erreur 404 - Not Found 
     */
    public function error404(): void {
        $this->view('errors/404.php');
    }
}