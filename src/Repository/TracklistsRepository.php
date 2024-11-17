<?php

namespace App\Repository;

use App\Entity\Tracklist;
use Core\Database;


class TracklistsRepository extends Database
{

    private $instance;

    public function __construct()
    {
        $this->instance = self::getInstance();
    }

    /** Insertion morceaux en base de donnees */
    public function add(Tracklist $tracklist): Tracklist {

        $query = $this->instance->prepare("
            INSERT INTO tracklists (title, vinyl_id)
            VALUES (:title, :vinyl_id)
            ");

            $query->bindValue(':title', $tracklist->getTitle());
            $query->bindValue(':vinyl_id', $tracklist->getVinyle());
            $query->execute();

            // Recupere l'ID nouvellement créé
            $id = $this->instance->lastInsertId();

            // Ajoute l'ID à mon objet
            $tracklist->setId($id);

            // Retourne notre objet muni d'un ID
            return $tracklist;
    }
}