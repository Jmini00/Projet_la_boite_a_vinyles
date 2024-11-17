<?php

namespace App\Controller;

use App\Repository\CommentRepository;
use App\Repository\VinyleRepository;

class VinyleController extends AbstractController {

    /**
     * Page d'accueil
     */
    public function index(): void {

        $vinyleRepository = new VinyleRepository();
        
        $this->view('vinyles/index.php', [
            'vinyls' => $vinyleRepository->findAll()
        ]);
    }

    /**
     * Page detail d'un vinyle
     */
    public function details(): void {

        // Si l'ID est vide ou pas number, redirection vers erreur 404
        if (empty($_GET['id']) || !is_numeric($_GET['id'])) {
            header('Location: /laboiteavinyles/404');
            exit;
        }
        
        // Selectionne le vinyle 
        $vinyleRepository = new VinyleRepository();
        $commentRepository = new CommentRepository();
        $vinyle = $vinyleRepository->find($_GET['id']);
        $tracklist = $vinyleRepository->findTracklist($_GET['id']);
        $comment = $commentRepository->findComments($_GET['id']);

        if (!$vinyle) {
            header('Location: /laboiteavinyles/404');
            exit;
        }

        $this->view('vinyles/details.php', [
            'vinyle' => $vinyle,
            'tracklist' => $tracklist,
            'comment' => $comment,
        ]);

    }

    /**
     * Page d'accueil Liam Gallagher
     */
    public function findByArtist(): void {

        $vinyleRepository = new VinyleRepository();
        
        $this->view('vinyles/collections_liam.php', [
            'vinyls' => $vinyleRepository->findByArtist('Liam Gallagher')
        ]);
    }

    /**
     * Page d'accueil collection UK
     */
    public function findByCountry(): void {

        $vinyleRepository = new VinyleRepository();
        
        $this->view('vinyles/collections_uk.php', [
            'vinyls' => $vinyleRepository->findByCountry()
        ]);
    }

    /**
     * Page d'accueil collection 60/80
     */
    public function findByYear(): void {

        $vinyleRepository = new VinyleRepository();
        
        $this->view('vinyles/collections_60.php', [
            'vinyls' => $vinyleRepository->findByYear()
        ]);
    } 

    /**
     * Page d'accueil categorie Rock
     */
    public function findByCatRock(): void {

        // Si l'ID est vide ou pas string, redirection vers erreur 404
        if (empty($_GET['name']) || is_numeric($_GET['name']) || ($_GET['name']) != 'Rock') {
            header('Location: /laboiteavinyles/404');
            exit;
        }
        $vinyleRepository = new VinyleRepository();
        
        $this->view('vinyles/rock.php', [
            'vinyls' => $vinyleRepository->findByCat('Rock')
        ]);
    } 

    /**
     * Page d'accueil categorie Pop
     */
    public function findByCatPop(): void {

        // Si l'ID est vide ou pas string, redirection vers erreur 404
        if (empty($_GET['name']) || is_numeric($_GET['name']) || ($_GET['name']) != 'Pop') {
            header('Location: /laboiteavinyles/404');
            exit;
        }
        $vinyleRepository = new VinyleRepository();
        
        $this->view('vinyles/pop.php', [
            'vinyls' => $vinyleRepository->findByCat('Pop')
        ]);
    } 

    /**
     * Page d'accueil categorie Metal
     */
    public function findByCatMetal(): void {

        // Si l'ID est vide ou pas string, redirection vers erreur 404
        if (empty($_GET['name']) || is_numeric($_GET['name']) || ($_GET['name']) != 'Metal/Grunge') {
            header('Location: /laboiteavinyles/404');
            exit;
        }
        $vinyleRepository = new VinyleRepository();
        
        $this->view('vinyles/metal.php', [
            'vinyls' => $vinyleRepository->findByCat('Metal/Grunge')
        ]);
    } 

    /**
     * Page d'accueil categorie Pepites
     */
    public function findByCatPepites(): void {

        // Si l'ID est vide ou pas string, redirection vers erreur 404
        if (empty($_GET['name']) || is_numeric($_GET['name']) || ($_GET['name']) != 'Pepites') {
            header('Location: /laboiteavinyles/404');
            exit;
        }
        $vinyleRepository = new VinyleRepository();
        
        $this->view('vinyles/pepites.php', [
            'vinyls' => $vinyleRepository->findByCat('Pepites')
        ]);
    } 

    /**
     * Page d'accueil categorie Live
     */
    public function findByCatLive(): void {

        // Si l'ID est vide ou pas string, redirection vers erreur 404
        if (empty($_GET['name']) || is_numeric($_GET['name']) || ($_GET['name']) != 'Live/OST') {
            header('Location: /laboiteavinyles/404');
            exit;
        }
        $vinyleRepository = new VinyleRepository();
        
        $this->view('vinyles/live.php', [
            'vinyls' => $vinyleRepository->findByCat('Live/OST')
        ]);
    } 
 
    

    /**
     * Liker un vinyle
     */
    public function like() {
        $repository = new VinyleRepository();
        $repository->likeVinyl($_GET['id']);

        echo json_encode([]);
    }
}