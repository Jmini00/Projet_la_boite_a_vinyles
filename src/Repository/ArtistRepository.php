<?php

namespace App\Repository;

use App\Entity\Artist;
use Core\Database;


class ArtistRepository extends Database
{

    private $instance;

    public function __construct()
    {
        $this->instance = self::getInstance();
    }

    /** Selectionne tous les artistes */
    public function findAll(): array
    {
        $objectsArtists = [];
        $query = $this->instance->query("SELECT 
        artists.id, 
        artists.name as artistname,
        artists.description as artistdescription,
        countries.name as artistcountry
        FROM artists
        INNER JOIN countries
        ON artists.country_id = countries.id
        ORDER BY artistname ASC");
        $artists = $query->fetchAll();

        foreach ($artists as $artist) {
            $item = new Artist();
            $item->setId($artist->id);
            $item->setName($artist->artistname);
            $item->setDescription($artist->artistdescription);
            $item->setCountry($artist->artistcountry);

            $objectsArtists[] = $item;
        }

        return $objectsArtists;
    }

    /** Selectionne un artiste */
    public function find(int $id): Artist|bool
    {

        $objectArtist = false;

        $query = $this->instance->prepare("SELECT 
        artists.id, 
        artists.name as artistname,
        artists.description as artistdescription, 
        countries.name as artistcountry
        FROM artists 
        INNER JOIN countries
        ON artists.country_id = countries.id
        WHERE artists.id = :id");
        $query->bindValue(':id', $id);
        $query->execute();

        $artist = $query->fetch();

        if ($artist) {
            $objectArtist = new Artist();
            $objectArtist->setId($artist->id);
            $objectArtist->setName($artist->artistname);
            $objectArtist->setDescription($artist->artistdescription);
            $objectArtist->setCountry($artist->artistcountry);
        }

        return $objectArtist;
    }

    /** Insertion artiste en base de donnees */
    public function add(Artist $artist): Artist {

        $query = $this->instance->prepare("
            INSERT INTO artists (name, description, country_id)
            VALUES (:name, :description, :country_id)
            ");

            $query->bindValue(':name', $artist->getName());
            $query->bindValue(':description', $artist->getDescription());
            $query->bindValue(':country_id', $artist->getCountry());
            $query->execute();

            // Recupere l'ID nouvellement créé
            $id = $this->instance->lastInsertId();

            // Ajoute l'ID à mon objet
            $artist->setId($id);

            // Retourne notre objet muni d'un ID
            return $artist;
    }

     /** Edition d'un artiste */
    public function edit(Artist $artist): Artist
    {
        $query = $this->instance->prepare("
            UPDATE artists SET 
                name = :name, description = :description
            WHERE id = :id
        ");

        $query->bindValue(':name', $artist->getName());
        $query->bindValue(':description', $artist->getDescription());
        $query->bindValue(':id', $artist->getId());
        $query->execute();

        // Retourne notre objet
        return $artist;
    }
}
